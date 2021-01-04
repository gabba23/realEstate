<?php  include "includes/db.php"; ?>
 <?php  include "includes/header.php"; ?>
 <?php  include "admin/functions.php"; ?>


<?php


if (isset($_POST['signup-submit'])) {



    $username = $_POST['uid'];
    $email = $_POST['mail'];
    $password = $_POST['pwd'];
    $passwordRepeat = $_POST['pwd-repeat'];

    if (empty($username) || empty($email) || empty($password) || empty($passwordRepeat)) {
        header("Location: ../signup.php?error=emptyfields&uid=".$username."$mail=".$email);
        exit();
    }
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        header("Location: ../signup.php?error=invalidmailuid&uid=");
        exit();
    }

    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../signup.php?error=invalidmail&uid=".$username);
        exit();
    }
    else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        header("Location: ../signup.php?error=invaliduid&mail=".$email);
        exit();
    }
    else if($password !== $passwordRepeat) {
        header("Location: ../signup.php?error=passwordcheck&uid=".$username."$mail=".$email);
        exit();
    }
    else {

        $sql = "SELECT Username FROM Users WHERE Username=?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../signup.php?error=sqlerror");
            exit();
        }
        else {
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);
            if ($resultCheck > 0) {
                header("Location: ../signup.php?error=usertaken&mail=".$email);
                exit();
            }
        else {
            $sql = "INSERT INTO Users (Username, Email, Password) VALUES (?, ?, ?)";
            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)) {
                header("Location: ../signup.php?error=sqlerror");
                exit();
            }
            else {
            $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

            mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedPwd);
            mysqli_stmt_execute($stmt);
            header("Location: ../signup.php?signup=success");
            exit();
            }
          }
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}

else {
    header("Location: ../registration.php");
    exit();
}
?>



    <!-- Navigation -->
    
    <?php  include "includes/navigation.php"; ?>
    
 <br>
 <br>
 <br>
 <br>
 
    <!-- Page Content -->
    <div class="container">
    

    <main>
       <section>
           <?php

            if (isset($_GET['error'])) {
                if ($_GET['error'] == "emptyfields") {
                    echo '<p class="alert alert-danger" id="error_text"> Fill in all fields!</p>' ;
                }
                else if ($_GET['error'] == "invaliduidemail") {
                    echo '<p class="alert alert-danger" id="error_text"> Invalid username and e-mail!</p>' ;
                }
                else if ($_GET['error'] == "invaliduid") {
                    echo '<p class="alert alert-danger" id="error_text">Invalid username!</p>' ;
                }
                else if ($_GET['error'] == "invalidmail") {
                    echo '<p class="alert alert-danger" id="error_text">Invalid e-mail!</p>' ;
                }
                else if ($_GET['error'] == "passwordcheck") {
                    echo '<p class="alert alert-danger" id="error_text">Your passwords do not match!</p>' ;
                }
                else if ($_GET['error'] == "usertaken") {
                    echo '<p class="alert alert-danger" id="error_text">Username is already taken!</p>' ;
                }
            }
            else if ($_GET['signup'] == "success") {
                echo '<p class="alert alert-success" id="success_text">Signup successful</p>' ;
            }

           ?>
           
        

            <form action="includes/signup.inc.php" method="post">
	<div class="container-fluid">
		<div class="row">
			<div class="well center-block">
				<div class="well-header">
					<h3 class="text-center text-success"> Register Here! </h3>
					<hr>
				</div>


				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12">
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									<i class="glyphicon glyphicon-user"></i>
								</div>
								<input type="text" placeholder="Username" name="uid" class="form-control">
							</div>
						</div>
					</div>
                </div>
                
                
				<div class="row">
					<div class="col-md-12 col-xs-12 col-sm-12">
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									<i class="glyphicon glyphicon-envelope"></i>
								</div>
								<input type="text" class="form-control" name="mail" placeholder="E-Mail">
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									<i class="glyphicon glyphicon-lock"></i>
								</div>
								<input type="password" minlength="8" maxlength="20" placeholder="Password" name="pwd" class="form-control">
							</div>
						</div>
					</div>
                </div>
                <div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									<i class="glyphicon glyphicon-lock"></i>
								</div>
								<input type="password" minlength="8" maxlength="20" placeholder="Repeat password" name="pwd-repeat" class="form-control">
							</div>
						</div>
					</div>
				</div>




				
				<div class="row widget">
					<div class="col-md-12 col-xs-12 col-sm-12">
						<button class="btn btn-warning btn-block" type="submit" name="signup-submit"> Signup </button>
					</div>
				</div>
			</div>
		</div>
	</div>


</form>
       </section>
    </main>

        <hr>



<?php include "includes/footer.php";?>




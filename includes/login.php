<?php session_start(); ?>
<?php include "db.php";?>
<?php include "../admin/functions.php"; ?>


<?php

if (isset($_POST['login-submit'])) {

    require '../includes/db.php';

    $username = $_POST['username'];
    $password = $_POST['user_password'];

    if (empty($username) || empty($password)) {
        header("Location: ../log-in.php?error=emptyfields");
        exit();
    }
    else {
        $query = "SELECT * FROM users WHERE username=? OR user_email=?;";
        $stmt = mysqli_stmt_init($connection);
        if (!mysqli_stmt_prepare($stmt, $query)) {
            header("Location: ../log-in.php?error=sqlerror");
            exit();
        }
        else {
            
            mysqli_stmt_bind_param($stmt, "ss", $username, $username);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if ($row = mysqli_fetch_assoc($result)) {
                $pwdCheck = password_verify($password, $row['user_password']);
                if ($pwdCheck == false) {
                    header("Location: ../log-in.php?error=wrongpwd");
                    exit();
                } else if ( $row['user_role'] == 'admin' && $pwdCheck == true){
                    session_start();
                    $_SESSION['user_id'] = $row['user_id'];
                    $_SESSION['username'] = $row['username'];
                    $_SESSION['user_email'] = $row['user_email'];
                    header("Location: ../admin/index.php");
                    exit();
                }
                else if ($pwdCheck == true) {
                    session_start();
                    $_SESSION['user_id'] = $row['user_id'];
                    $_SESSION['username'] = $row['username'];
                    $_SESSION['user_email'] = $row['user_email'];

                    header("Location: ../log-in.php?login=success");
                    exit();
                } 
                else {
                    header("Location: ../log-in.php?error=wrongpwd");
                    exit();
                }
            }
            else {
                header("Location: ../log-in.php?error=nouser");
                exit();
            }
        }
    }
}

else {
    header("Location: ../index.php");
    exit();
}


?>




<?php


?>
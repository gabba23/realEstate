<?php 



 
function redirect($location) {
    return header("Location:". $location);
}


function confirm($result) {

    global $connection;

    if(!$result) {
        die("QUERY FAILED" . mysqli_error($connection));
    }

    
}


function insert_categories() {

    global $connection;

    if(isset($_POST['submit'])) {
  
        $cat_title = $_POST['cat_title'];
     
        if($cat_title == "" || empty($cat_title)) {
     
         echo "this field should not be empty";
     
        } else {
     
         $query = "INSERT INTO categories(cat_title)";
         $query .= "VALUE('{$cat_title}')";
     
         $create_category_query = mysqli_query($connection, $query);
     
         if(!$create_category_query) {
             die('QUERY FAILED' . mysqli_error($connection));
         }
     
        }
     
     }
     
}




function findAllCategories() {

    global $connection;

$query = "SELECT * FROM categories";
$select_categories = mysqli_query($connection, $query);

while ($row = mysqli_fetch_assoc( $select_categories)) {
$cat_id = $row['cat_id'];
$cat_title = $row['cat_title'];

echo "<tr>";
echo " <td>{$cat_id}</td>";
echo " <td>{$cat_title}</td>";
echo " <td><a href='categories.php?delete={$cat_id}'>Delete</td>";
echo " <td><a href='categories.php?edit={$cat_id}'>Edit</td>";
echo "</tr>";
}
}



function deleteCategories() {
global $connection;


if(isset($_GET['delete'])) {
$the_cat_id = $_GET['delete'];
$query = "DELETE FROM categories WHERE cat_id = {$the_cat_id} ";
$delete_query = mysqli_query($connection, $query);
header("Location: categories.php");
}


}

function is_admin($username) {
    global $connection;

    $query = "SELECT user_role FROM users WHERE username = '$username'";

    $result = mysqli_query($connection, $query);

    confirm($result);

    $row = mysqli_fetch_array($result);

    if($row['user_role'] == 'admin') {

        return true;
    } else {

        return false;
    }
}


function username_exists($username) {

    global $connection;

    $query = "SELECT username FROM users WHERE username = '$username'";
    $result = mysqli_query($connection, $query);
    confirm($result);

    if(mysqli_num_rows($result) > 0) {
        return true;
    } else {
        return false;
    }


}

function email_exists($email) {

    global $connection;

    $query = "SELECT user_email FROM users WHERE user_email = '$email'";
    $result = mysqli_query($connection, $query);
    confirm($result);

    if(mysqli_num_rows($result) > 0) {
        return true;
    } else {
        return false;
    }


}

function register_user($username, $email, $password) {

    global $connection;

        $username = mysqli_real_escape_string($connection, $username);
        $email    = mysqli_real_escape_string($connection, $email);
        $password = mysqli_real_escape_string($connection, $password);

        $password = password_hash($password, PASSWORD_BCRYPT, array('cost' => 12));

        $query = "INSERT INTO users (username, user_email, user_password, user_role) ";
        $query .= "VALUES('{$username}', '{$email}', '{$password}', 'subscriber')";
        $register_user_query = mysqli_query($connection, $query);
       
        confirm($register_user_query);


}

function letMeIn($username, $password){

    global $connection;

$username = trim($username);
$password = trim($password);

$username = mysqli_real_escape_string($connection, $username);
$password = mysqli_real_escape_string($connection, $password);

$query = "SELECT * FROM users WHERE username = '{$username}' ";
$select_user_query = mysqli_query($connection, $query);

if(!$select_user_query) {
    die("QUERY FAILED" . mysqli_error($connection));
}

while($row = mysqli_fetch_array($select_user_query)) {

    $db_id = $row['user_id'];
    $db_username = $row['username'];
    $db_user_password = $row['user_password'];
    $db_user_firstname = $row['user_firstname'];
    $db_user_lastname = $row['user_lastname'];
    $db_user_role = $row['user_role'];

}

$password = crypt($password, $db_user_password);

if(password_verify($password, $db_user_password)) {

    $_SESSION['username'] = $db_username;
    $_SESSION['firstname'] = $db_user_firstname;
    $_SESSION['lastname'] = $db_user_lastname;
    $_SESSION['user_role'] = $db_user_role;

    redirect("/bachelorProject/admin");

} else {


    redirect("/bachelorProject/index.php");
}
}




function login($username, $password ) {
    global $connection;


    if (isset($_POST['login-submit'])) {

        require '../includes/db.php';
    
        $username = $_POST['username'];
        $password = $_POST['password'];
    
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
                        header("Location: ../admin/log-in.php");
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
}


?>
<?php 
session_start();


$username = $_POST['user_name'];
$email = $_POST['user_email'];
$password = $_POST['user_pass'];
$flag = false;

if ($username) {
    $flag = true;
    $_SESSION['old_user_name'] = $username;
} else {
    $_SESSION['username_error'] = 'Please provide username.';
    header('location: page-register.php');
}

if ($email) {
    $flag = true;
    $_SESSION['old_email'] = $email;
} else {
    $_SESSION['email_error'] = 'Please provide e-mail.';
    header('location: page-register.php');
}


if ($password) {
    $flag = true;
    $_SESSION['old_pass'] = $password;


    // information insert to database (dynamic)
    $encrypted_pass = md5($password);
    $db_connect = mysqli_connect('localhost','root', '', 'gymove_info');
    $insert_query = "INSERT INTO users(username,email,password) VALUES('$username','$email','$encrypted_pass')";
    $sign_up_data_insert_query = mysqli_query($db_connect,$insert_query);

    $_SESSION['register_successful_msg'] = $username.'! Your account regestered succesfully. Please log-in';

    header('location: page-login.php');
} else {
    $_SESSION['password_error'] = 'Please provide password.';
    header('location: page-register.php');
}

die();
if ($flag != 1) {
    header('location: page-register.php');
}
?>
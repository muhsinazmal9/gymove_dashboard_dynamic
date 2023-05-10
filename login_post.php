<?php 
session_start();


$email = $_POST['log_in_mail'];
$password = $_POST['log_in_pass'];
$flag = false;


// database_connection
$encrypted_pass = md5($password);
$db_connect = mysqli_connect('localhost','root', '', 'gymove_info');
$count_query = "SELECT COUNT(*) AS 'results' FROM users WHERE email='$email' AND password='$encrypted_pass'";
$sign_in_data_count_query = mysqli_query($db_connect,$count_query);
$data_count_query_OtoA = mysqli_fetch_assoc($sign_in_data_count_query)['results'];



if ($email) {
    $flag = true;
} else {
    $_SESSION['log_in_mail_error'] = 'Please provide your email';
    header('location: page-login.php');
}
if ($password) {
    $flag = true;
    $_SESSION['log_in_pass_old_data'];
    if ($data_count_query_OtoA==1) {
        $flag = true;
        header('location: index.php');
    } else {
        $_SESSION['credential_match_error'] = "Providen Credential doesn't match. Check your email and password again";
        header('location: page-login.php');
    }
} else {
    $_SESSION['log_in_pass_error'] = 'Please provide your Password';
    header('location: page-login.php');
}




?>
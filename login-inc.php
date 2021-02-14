<?php
require_once 'database.php';
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
$hashedPwd = password_hash($password, PASSWORD_DEFAULT);



$sql = "SELECT * FROM users WHERE email='$email'";
if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
        header("Location: mainpage.html");

    }
    else{
    echo "User Not Found.";
    }
}
?>



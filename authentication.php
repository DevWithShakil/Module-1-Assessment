<?php 

$username = "admin";
$password = "1234";

$inputUsername = readline("Enter the username: ");
$inputPassword = readline("Enter the password: ");

if($inputUsername === $username && $inputPassword === $password){
    echo "Login successful";
} else{
    echo "Invalid username or password";
}
?>
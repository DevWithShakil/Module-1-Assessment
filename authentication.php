<?php 

$username = "admin";
$password = "1234";

$user = readline("Enter the username: ");
$pass = readline("Enter the password: ");

if($user === $username && $pass === $password){
    echo "Login successful";
} else{
    echo "Invalid username or password";
}
?>
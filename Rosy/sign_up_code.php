<?php
session_start();
if(isset($_POST['submit']))
{
    include 'connection.php'; 
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $get_data = "insert into users(name,phone,email,password) values ('$name','$phone','$email','$password');";
    mysqli_query($connect,$get_data);
    header("Location: index.php");
}
else
{
    header("Location: sign_up.php");
}
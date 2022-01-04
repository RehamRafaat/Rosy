<?php
session_start();
if(isset($_POST['submit']))
{
    include 'connection.php';
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $id = $_SESSION['id'];
    
    $update_data="UPDATE users 
     SET name = '$name',
     phone = '$phone',
     email = '$email',
     password = '$password'
     WHERE id = '$id'";
    mysqli_query($connect,$update_data);
    
    $_SESSION['name']=$name;
    $_SESSION['phone']=$phone;
    $_SESSION['email']=$email;
    $_SESSION['password']=$password;
    
    header("Location: profile.php");
}
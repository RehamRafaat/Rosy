<?php

session_start();

if(isset($_POST['submit']))
{
    include 'connection.php';  
    $mail = $_POST['email'];
    $pass = $_POST['password'];
    $get_data = "select * from users where email='$mail'";
    $data = mysqli_query($connect,$get_data);
    if($record = mysqli_fetch_assoc($data))
    {
        $_SESSION['id'] = $record['id'];
        $_SESSION['name'] = $record['name'];
        $_SESSION['phone'] = $record['phone'];
        $_SESSION['email'] = $record['email'];
        $_SESSION['password'] = $record['password'];
        header("Location: home.php");
    }
}

?>
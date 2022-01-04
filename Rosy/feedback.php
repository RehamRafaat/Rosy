<?php
session_start();
if(!isset($_SESSION['id'])){
    header("Location: index.php");
}
if(isset($_POST['submit']))
{
    include 'connection.php'; 
    $email = $_POST['email'];
    $message = $_POST['message'];
    $get_data = "insert into feedback(feed_email,feed_message) values ('$email','$message');";
    mysqli_query($connect,$get_data);
    header("Location: feedback.php");
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Rosy</title>
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="icon" href="img/flower-logo.png">
        <link rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.min.css">
        <style>
            #contact .container .contact-form{
                position: relative;
                bottom: 145px;
                font-size: 50px;
            }
        </style>
    </head>
    <body>
       <!-- Start Header -->
           <div class="header">
              <div class="navbar">
                   <div class="container">
                     <img src="img/flower-logo.png"/>
                      <h2>Rosy</h2>
                       <ul>
                           <a href="home.php"><li>Home</li></a>
                           <a href="bouquets.php"><li>Our Bouquets</li></a>
                           <a href="contact.php"><li  class="active">Contact</li></a>
                           <a href="profile.php"><li>Profile</li></a>
                           <a href="logout.php"><li>Logout</li></a>
                       </ul>
                   </div>
               </div>
           </div>
       <!-- End Header -->
         
          <!-- Start flower as a gift Section -->
             <div id="contact">
                   <div class="container">
                      <div class="contact-desc">
                           <div class="contact-content">
                              <h2>Contact Us</h2>
                               <ul>
                                   <li><i class="fa fa-phone" aria-hidden="true"></i><span>&nbsp;&nbsp;&nbsp;(+20)1112235546</span></li>
                                   <li><i class="fa fa-envelope" aria-hidden="true"></i><span>&nbsp;&nbsp;&nbsp;rosy_store@gmail.com</span></li>
                                   <li><i class="fa fa-map-marker" aria-hidden="true"></i><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Florida, USA</span></li>
                               </ul>
                           </div>
                      </div>
                      <div class="contact-form">
                              <h2>Thanks</h2>
                      </div>
                   </div>
               </div>
        <!-- End flower as a gift Section -->
        
        <!-- Start footer Section -->
        <div class="footer">
            <div class="container">
                  <div class="social">
                       <ul>
                           <li><img src="img/facebook.png"></li>
                           <li><img src="img/instagram.png"></li>
                           <li><img src="img/whatsapp.png"></li>
                           <li><img src="img/twitter.png"></li>
                       </ul>
                  </div>
            </div>
             <div class="copyrights">
                    <p>Copyright &copy; 2021 Rosy.</p>
               </div>
        </div>
        <!-- End footer Section -->
    </body>
</html>
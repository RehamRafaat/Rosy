<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Rosy</title>
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="icon" href="img/flower-logo.png">
        <style>
            .header .hero-sec{
                height: 700px;
                background-image: url(img/header2.jpg);
                background-size: cover;
            }
            .header .hero-sec .container .welcome-txt .flower-types-imgs .btn{
            width:150px;
            margin: 0 auto;
            margin-top: 50px;
            border-radius: 5px;
            }
            .header .hero-sec .container .welcome-txt .flower-types-imgs .btn button{
                padding: 15px;
                padding-right: 50px;
                padding-left: 50px;
                border-radius: 5px;
                background-color: #94c547;
                color: white;
                border-color: #94c547;
                cursor: pointer;
            }
            .header .hero-sec .container .welcome-txt .flower-types-imgs .btn button:hover{
                background-color: white;
                color: #94c547;
                border-color: #94c547;
            }
            .header .hero-sec .container .welcome-txt .flower-types-imgs input{
                height: 35px;
                width: 345px;
                border: solid;
                border-radius: 10px;
                border-color: #e43774;
                margin-left: 80px;
            }
            .header .hero-sec .container .welcome-txt .flower-types-imgs form{
                padding-left: 320px;
                padding-right: 320px;
            }
            .header .hero-sec .container .welcome-txt .flower-types-imgs form h3{
                position: relative;
                left: 220px;
            }
        </style>
    </head>
    <body>
       <!-- Start Header -->
           <div class="header">
               <div class="hero-sec">
                   <div class="container">
                      <div class="welcome-txt">
                           <h4 style="margin-bottom: 130px;">Rosy</h4>
                           <div class="flower-types-imgs">
                               <form action="login_code.php" method="post" name="formy" id="my_form">
                                  <h3>Email</h3>
                                  <input type="email" name="email"/>
                                  <h3>Password</h3>
                                  <input type="text" name="password"/>
                                  <div class="btn">
                                     <button type="submit" name="submit">Login</button>
                                  </div>
                              </form>
                           </div>
                           <p>New User ? <a href="sign_up.php" style="text-decoration: none; color: #e43774;">Sign Up</a></p>
                       </div>
                   </div>
               </div>
           </div>
       <!-- End Header -->
    </body>
</html>
<?php
session_start();
if(!isset($_SESSION['id'])){
    header("Location: index.php");
}?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Rosy</title>
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="icon" href="img/flower-logo.png">
    </head>
    <style>
        #flower_types{
            height: 2200px;
            padding: 50px;
            padding-top: 60px;
            background-color: #D1DBF5;
        }
        #flower_types .card{
            width: 200px;
            height: 200px;
            display: inline-block;
            margin: 20px;
            background-size: cover;
            background-position: center;
        }
        #flower_types .flower-types-imgs{
            background-color:white;
            border-radius: 40px;
        }
        #flower_types .flower-types-imgs .flower-name h3 {
            margin-left: 93px;
        }
    </style>
    <body>
        
         <!-- Start Header -->
           <div class="header">
              <div class="navbar">
                   <div class="container">
                     <img src="img/flower-logo.png"/>
                      <h2>Rosy</h2>
                       <ul>
                           <a href="home.php"><li>Home</li></a>
                           <a href="bouquets.php"><li class="active">Our Bouquets</li></a>
                           <a href="contact.php"><li>Contact</li></a>
                           <a href="profile.php"><li>Profile</li></a>
                           <a href="logout.php"><li>Logout</li></a>
                       </ul>
                   </div>
               </div>
           </div>
       <!-- End Header -->
       
        <!-- Start flower-types Section -->
              <div id="flower_types">
                   <div class="container">
                           <h2>Our Bouquets</h2>
                           <div class="flower-types-content">
                               <p>Take a look on our beautiful bouquets</p>
                           </div>
                           <div class="flower-types-imgs">
                               <div class="card" style="background-image: url(img/f1.png);"></div>
                               <div class="card" style="background-image: url(img/f2.png);"></div>
                               <div class="card" style="background-image: url(img/f3.png);"></div>
                               <div class="card" style="background-image: url(img/f4.png);"></div>
                               <div class="flower-name">
                                   <h3>$350</h3>
                                   <h3>$200</h3>
                                   <h3 style="margin-left: : ">$220</h3>
                                   <h3>$150</h3>
                               </div>
                               <div class="card" style="background-image: url(img/f5.png);"></div>
                               <div class="card" style="background-image: url(img/f6.png);"></div>
                               <div class="card" style="background-image: url(img/f7.png);"></div>
                               <div class="card" style="background-image: url(img/f8.png);"></div>
                               <div class="flower-name">
                                   <h3>$150</h3>
                                   <h3>$200</h3>
                                   <h3>$250</h3>
                                   <h3>$150</h3>
                               </div>
                               <div class="card" style="background-image: url(img/f9.png);"></div>
                               <div class="card" style="background-image: url(img/f10.png);"></div>
                               <div class="card" style="background-image: url(img/f11.png);"></div>
                               <div class="card" style="background-image: url(img/f12.png);"></div>
                               <div class="flower-name">
                                   <h3>$150</h3>
                                   <h3>$250</h3>
                                   <h3>$250</h3>
                                   <h3>$150</h3>
                               </div>
                               <div class="card" style="background-image: url(img/f13.png);"></div>
                               <div class="card" style="background-image: url(img/f14.png);"></div>
                               <div class="card" style="background-image: url(img/f15.png);"></div>
                               <div class="card" style="background-image: url(img/f16.png);"></div>
                               <div class="flower-name">
                                   <h3>$350</h3>
                                   <h3>$225</h3>
                                   <h3>$207</h3>
                                   <h3>$300</h3>
                               </div>
                               <div class="card" style="background-image: url(img/f17.png);"></div>
                               <div class="card" style="background-image: url(img/f18.png);"></div>
                               <div class="card" style="background-image: url(img/f19.png);"></div>
                               <div class="card" style="background-image: url(img/f20.png);"></div>
                               <div class="flower-name">
                                   <h3>$320</h3>
                                   <h3>$130</h3>
                                   <h3>$170</h3>
                                   <h3>$220</h3>
                               </div>
                               <div class="card" style="background-image: url(img/f21.png);"></div>
                               <div class="card" style="background-image: url(img/f22.png);"></div>
                               <div class="card" style="background-image: url(img/f23.png);"></div>
                               <div class="card" style="background-image: url(img/f24.png);"></div>
                               <div class="flower-name">
                                   <h3>$400</h3>
                                   <h3>$120</h3>
                                   <h3>$125</h3>
                                   <h3>$130</h3>
                               </div>
                           </div>
                   </div>
               </div>
        <!-- End flower-types Section -->
         
        
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
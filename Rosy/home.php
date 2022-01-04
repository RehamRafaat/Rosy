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
    <body>
       <!-- Start Header -->
           <div class="header">
              <div class="navbar">
                   <div class="container">
                     <img src="img/flower-logo.png"/>
                      <h2>Rosy</h2>
                       <ul>
                           <a href="home.php"><li class="active">Home</li></a>
                           <a href="bouquets.php"><li>Our Bouquets</li></a>
                           <a href="contact.php"><li>Contact</li></a>
                           <a href="profile.php"><li>Profile</li></a>
                           <a href="logout.php"><li>Logout</li></a>
                       </ul>
                   </div>
               </div>
               <div class="hero-sec">
                   <div class="container">
                      <div class="welcome-txt">
                           <h4>Rosy</h4>
                           <p>The right place to flower fans</p>
                       </div>
                       <div class="btn">
                           <a href="home.php"><button>Let's Start</button></a>
                       </div>
                   </div>
               </div>
           </div>
       <!-- End Header -->
       
        <!-- Start About Section -->
             <div id="about">
                   <div class="container">
                           <h2>About</h2>
                           <div class="about-content">
                               <p>Rosy is a considered as a big store of flowers, inwhere you can find several types of flowers in different pallettes. with each package of flowers you take you will take a guide also about how to tread with it and how to make it grows healthy</p>
                           </div>
                   </div>
               </div>
        <!-- End About Section -->
        
        <!-- Start flower-types Section -->
              <div id="flower_types">
                   <div class="container">
                           <h2>Flower Type</h2>
                           <div class="flower-types-content">
                               <p>There are alot of flowers type in the world <br>The following types are the most populer ones known</p>
                           </div>
                           <div class="flower-types-imgs">
                               <div class="card" style="background-image: url(img/lily.png);"></div>
                               <div class="card" style="background-image: url(img/sunflower.png);"></div>
                               <div class="card" style="background-image: url(img/daisy-flower.png);"></div>
                               <div class="card" style="background-image: url(img/rose-flower.png);"></div>
                               <div class="flower-name">
                                   <h3>Lily</h3>
                                   <h3>Sunflower</h3>
                                   <h3>Daisy</h3>
                                   <h3>Rose</h3>
                               </div>
                               <div class="card" style="background-image: url(img/jasmine-flower.png);"></div>
                               <div class="card" style="background-image: url(img/pansy-flower.png);"></div>
                               <div class="card" style="background-image: url(img/tulip.png);"></div>
                               <div class="card" style="background-image: url(img/narcissus.png);"></div>
                               <div class="flower-name">
                                   <h3>Jasmine</h3>
                                   <h3>Pansy</h3>
                                   <h3>Tulip</h3>
                                   <h3>Narcissus</h3>
                               </div>
                           </div>
                   </div>
               </div>
        <!-- End flower-types Section -->
         
         
          <!-- Start flower as a gift Section -->
             <div id="floral-basket">
                   <div class="container">
                      <div class="floral-desc">
                           <div class="floral-basket-content">
                              <h2>Flowers as a Gift</h2>
                               <p>Flowers are the forever gift for everyone and every occasion. We can give flowers on birthday, anniversary, best wishes, congratulations, and sympathy or funeral events. Flowers are a great way to express and convey your love, feelings, and emotions with someone special.</p>
                           </div>
                      </div>
                      <div class="floral-card">
                          <img src="img/floral-basket.png"/>
                      </div>
                   </div>
               </div>
        <!-- End flower as a gift Section -->
        
        
        <!-- Start flowers-benefits Section -->
            <div id="flowers-benefits">
                   <div class="container">
                           <h2>Flowers Benefits</h2>
                           <div class="benefits-content">
                               <p>Feeling a little down or tired?<br> We’ve all been there. Fortunately, flowers can help increase energy and lower fatigue.
                               <br>Simply spending time working with or looking at flowers has been shown to lower fatigue and increase energy levels. Adding some flowering plants to your office could be a great way to provide a boost of mid-day energy.</p>
                           </div>
                   </div>
               </div>
        <!-- End flowers-benefits Section -->
        
         
          <!-- Start flower as a gift Section -->
             <div id="visit">
                  <img src="img/test.png"/>
                   <div class="container">
                      <div class="visit-desc">    
                          <h2>Visit Us</h2>
                           <p>Come on and don't lose the chance to get best offers in our packages and bouqeats, if you are a new client you will get 50% discount. don't forget to leave your feedback on us is the contact form above.<br>Enjoy our services.</p>
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
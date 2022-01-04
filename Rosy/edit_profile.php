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
            height: 1150px;
            padding: 50px;
            padding-top: 60px;
            background-color: #D1DBF5;
        }
        #flower_types .card{
            width: 200px;
            height: 200px;
            margin: 20px;
            background-size: cover;
            background-position: center;
            background-color: pink;
            position: relative;
            left: 380px;
            border-radius: 100%;
        }
        #flower_types .flower-types-imgs{
            background-color:white;
            border-radius: 40px;
        }
        #flower_types .flower-types-imgs .flower-name h3 {
            text-align: center;
            display: block;
        }
        #flower_types .container .flower-types-imgs .btn{
            width:150px;
            margin: 0 auto;
            margin-top: 50px;
            border-radius: 5px;
        }
        #flower_types .container .flower-types-imgs .btn button{
            padding: 15px;
            padding-right: 50px;
            padding-left: 50px;
            border-radius: 5px;
            background-color: #94c547;
            color: white;
            border-color: #94c547;
            cursor: pointer;
        }
        #flower_types .container .flower-types-imgs .btn button:hover{
            background-color: white;
            color: #94c547;
            border-color: #94c547;
        }
        #flower_types .container .flower-types-imgs input{
            height: 35px;
            width: 345px;
            border: solid;
            border-radius: 10px;
            border-color: #e43774;
        }
        #flower_types .container .flower-types-imgs form{
            padding-left: 320px;
            padding-right: 320px;
        }
        #flower_types .container .flower-types-imgs form h3{
            position: relative;
            left: 150px;
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
                           <a href="bouquets.php"><li>Our Bouquets</li></a>
                           <a href="contact.php"><li>Contact</li></a>
                           <a href="profile.php"><li  class="active">Profile</li></a>
                           <a href="logout.php"><li>Logout</li></a>
                       </ul>
                   </div>
               </div>
           </div>
       <!-- End Header -->
       
        <!-- Start flower-types Section -->
              <div id="flower_types">
                   <div class="container">
                           <h2>Your Profile</h2>
                           <div class="flower-types-imgs">
                               <div class="card" style="background-image: url(img/user.png);"></div>
                               <form action="update.php" method="post">
                                  <h3>Name</h3>
                                  <input type="text" name="name" value="<?php echo $_SESSION['name']; ?>"/>
                                  <h3>Phone</h3>
                                  <input type="text" name="phone" value="<?php echo $_SESSION['phone']; ?>"/>
                                  <h3>Email</h3>
                                  <input type="email" name="email" value="<?php echo $_SESSION['email']; ?>"/>
                                  <h3>Password</h3>
                                  <input type="text" name="password" value="<?php echo $_SESSION['password']; ?>"/>
                                  <div class="btn">
                                     <button type="submit" name="submit">Update</button>
                                  </div>
                              </form>
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
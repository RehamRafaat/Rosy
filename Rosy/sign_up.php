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
    </head>
    <style>
        #flower_types{
            height: 900px;
            padding: 50px;
            padding-top: 60px;
            background-image: url(img/header2.jpg);
            background-size: cover;
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
            background-color:rgba(255, 99, 71, 0.2);
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
            padding-right: 30px;
            padding-left: 30px;
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
            padding-left: 300px;
            padding-right: 300px;
        }
        #flower_types .container .flower-types-imgs form h3{
            position: relative;
            left: 150px;
        }
    </style>
    <body>
        
        <!-- Start flower-types Section -->
              <div id="flower_types">
                   <div class="container">
                           <h2>Sign Up</h2>
                           <div class="flower-types-imgs">
                               <form action="sign_up_code.php" method="post" name="" id="">
                                  <h3>Name</h3>
                                  <input type="text" name="name"/>
                                  <h3>Phone</h3>
                                  <input type="text" name="phone"/>
                                  <h3>Email</h3>
                                  <input type="email" name="email"/>
                                  <h3>Password</h3>
                                  <input type="password" name="password"/>
                                  <div class="btn">
                                     <button type="submit" name="submit">Sign Up</button>
                                  </div>
                              </form>
                           </div>
                   </div>
               </div>
        <!-- End flower-types Section -->
    </body>
</html>
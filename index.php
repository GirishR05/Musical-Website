<?php 
    include("connection.php");
    include("login.php")
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Form</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />

    <link rel="stylesheet" href="/main/loginstyle.css">
  </head>
  <body>
 
    <div class="main-container">
    <div class="text">
        <h1>Welcome to string </h1>
        <p>Login to your account to see and choose your <br> favorite musical instrument from string</p>
    </div>
   <section>
    <div class=" form-box">
       
        <div class="form-value">
            <form name="form" action="login.php" onsubmit="return isvalid()" method="POST">

                <div class="inputbox">
                    <ion-icon name="mail-outline"></ion-icon>
                    <input type="text" required id="user" name="user">
                    <label for="">Username</label>
                    
                </div>
                <div class="inputbox">
                    
                    <ion-icon name="lock-closed-outline"></ion-icon>
                    <input type="password" required id="pass" name="pass">
                    <label for="">Password</label>
                    
                </div>
                <input type="submit" id="btn" value="Sign In" name = "submit"/>
                <div class="forget">
                    <label for="">
                        <input type="checkbox">Remember Me  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<a href="#">Forget Password</a></label>
                    
                </div>
               
                <div class="register">
                    <p>Don't have account &nbsp; &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  <a href="signupmain.php">Register here</a></p>
                </div>
            </form>
        </div>

    </div>
</section> 
</div>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
        <script>
            function isvalid(){
                var user = document.form.user.value;
                var pass = document.form.pass.value;
                if(user.length=="" && pass.length==""){
                    alert(" Username and password field is empty!!!");
                    return false;
                }
                else if(user.length==""){
                    alert(" Username field is empty!!!");
                    return false;
                }
                else if(pass.length==""){
                    alert(" Password field is empty!!!");
                    return false;
                }
                
            }
        </script>
  </body>
</html>
<!--<html>
    <head>
        <title>Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        
        <div id="form">
            <h1>Login Form</h1>
            <form name="form" action="login.php" onsubmit="return isvalid()" method="POST">
                <label>Username: </label>
                <input type="text" id="user" name="user"></br></br>
                <label>Password: </label>
                <input type="password" id="pass" name="pass"></br></br>
                <input type="submit" id="btn" value="Login" name = "submit"/>
            </form>
        </div>
        <script>
            function isvalid(){
                var user = document.form.user.value;
                var pass = document.form.pass.value;
                if(user.length=="" && pass.length==""){
                    alert(" Username and password field is empty!!!");
                    return false;
                }
                else if(user.length==""){
                    alert(" Username field is empty!!!");
                    return false;
                }
                else if(pass.length==""){
                    alert(" Password field is empty!!!");
                    return false;
                }
                
            }
        </script>
    </body>
</html>
        -->
        
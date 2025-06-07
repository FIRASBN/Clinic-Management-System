<?php
session_start();
include("connection.php");
      ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
  <link rel="stylesheet" href="stylelogin.css" />
  <title>Modern Login Page | firas ben attia</title>
</head>

<body>
  
  <div class="container" id="container">
    <div class="form-container sign-up">
      <form action="recuper.php" method="post">
        <h1>Create Account</h1>
        <div class="social-icons">
          <a href="#" class="icon">
            <i class="fa-brands fa-google-plus-g"></i></a>
          <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
          <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
          <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
        </div>
        <span>you email for registeration</span>
        <input type="text" placeholder="Name" name="name" />
        <input type="text" placeholder="prenom" name="prenom" />
        <input type="tel" placeholder="telephone" name="tel" />
        <input type="date" name="date" />
        <input type="email" placeholder="Email" name="email" />
        <input type="password" placeholder="Password" name="pass" />
        <button type="submit" class="trans">Sign Up</button>
      </form>
    </div>
    <div class="form-container sign-in">
      <form action="trait-login.php" method="post">
        <h1>login</h1>
        <div class="social-icons">
          <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
          <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
          <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
          <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
        </div>
        <span>or use your email password</span>
        <input type="email" placeholder="Email" name="email" required/>
        <input type="password" placeholder="Password" name="pass" required />
        <div class="wrapper">
          <input type="radio" name="type" id="option-1" value="DOCTOR" />
          <input type="radio" name="type" id="option-2" value="PASSION" />
          <label for="option-1" class="option option-1">
            <div class="dot"></div>
            <span>DOCTOR</span>
          </label>
          <label for="option-2" class="option option-2">
            <div class="dot"></div>
            <span>PASSION</span>
          </label>
        </div>
        
        <a href="#" class="inder">Forget Your Password?</a>
        <button class="trans">login</button>
      </form>
    </div>
    <div class="toggle-container">
      <div class="toggle">
        <div class="toggle-panel toggle-left">
          <h1>Welcome Back!</h1>
          <p>Enter your personal details to use all of site features</p>
          <button class="hidden" id="login">Sign In</button>
        </div>
        <div class="toggle-panel toggle-right">
          <h1>Hello, Friend!</h1>
          <p>
            Register with your personal details to use all of site features
          </p>
          <button class="hidden" id="register">Sign Up</button>
        </div>
      </div>
    </div>
  </div>

  <script src="script.js"></script>
</body>

</html>
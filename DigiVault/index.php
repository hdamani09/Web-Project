<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Home | DigiVault</title>
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
    $(document).ready(function(){
        $("#get-started").click(function(){
            $(".about-container").hide();
            $(".form-container").slideDown(900);
        });
        $("#about-us").click(function(){
            $(".form-container").hide();
            $(".about-container").slideDown(600);  
        });
        $("#form-close").click(function(){
            $(".form-container").slideUp(700);
        });
        $("#to-login").click(function(){
            $(".signup-container").css({display: 'none'});
            $(".signin-container").fadeIn(700);
        });
        $("#to-register").click(function(){
            $(".signin-container").css({display: 'none'});
            $(".signup-container").fadeIn(700);
        });
    });
    </script>
  </head>

  <body>
  <nav>
    <ul>
      <li id="about-us">About US</li>
      <li id="get-started">Get Started</li>
    </ul>
  </nav>
  <header>
    <div class="main-brand">
      <h2>&nbsp;<span style="color:#ccc">D</span>igiV<span style="color:#ccc"><i class="fa fa-lock" aria-hidden="true"></i></span>ult</h2>
    </div>
  </header>
  <div class="main-wrapper">
    <div class="body-wrapper">

    </div>
    <div class="about-container" style="display:none">

    </div>

    <div class="form-container" style="display:none">
      <p id="form-close" style="color:white">&#10006;</p>
      <div class="signup-container">
        <p class="form-header" style="color:white">Register</p>
        <form id="signup-form">
          <input type="text" name="first" placeholder="First Name">
          <input type="text" name="last" placeholder="Last Name">
          <input id="signup-email"type="email" name="email" placeholder="Email">
          <input type="text" name="uid" placeholder="Username">
          <div id="signup-gender">
            <input type="radio" name="gender" value="male" id="male-box"style="display:none"><label id="male-label" for="male-box">Male</label>
            <input type="radio" name="gender" value="female" id="female-box"style="display:none"><label id="female-label" for="female-box">Female</label>
          </div>
          <input type="password" name="password" placeholder="Password">
          <input type="password" name="password2" placeholder="Retype-Password">
          <button type="submit" class="form-button" name="signup">Sign Up!</button>
          <span id="to-login" style="padding-top:1.13em">Already Registered?</span>
        </form>
      </div>
      <div class="signin-container">
        <p class="form-header" style="color:white">Login</p>
        <form id="signin-form">
          <input type="text" name="username" placeholder="Username">
          <input type="password" name="password" placeholder="Password">
          <button type="submit" class="form-button" name="signin">Sign In!</button>
          <span id="to-register" style="padding-top:1.13em">Are you new?</span>
        </form>
      </div>
    </div>
  </div>

  </body>
</html>

<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>DigiVault</title>
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/clean.css">
    <script src="js/index.js"></script>
    <?php
      if(isset($_SESSION['u_id'])){
        echo "<link rel='stylesheet' type='text/css' href='css/home.css'>";
      } else {
        echo "<link rel='stylesheet' type='text/css' href='css/index.css'>";
      }
    ?>
    <link rel="stylesheet" type='text/css' href="css/animate.css" />
    <script src="js/jquery.min.js"></script>
    <script>
    $(document).ready(function(){
      $("#n3").click(function(){
          $(".user-mainbody").css({display: 'none'});
          $(".user-files").css({display: 'none'});
          $(".user-contact").fadeIn(700);

      });
      $("#n1").click(function(){
          $(".user-contact").css({display: 'none'});
          $(".user-files").css({display: 'none'});
          $(".user-mainbody").fadeIn(700);
      });
      $("#n2").click(function(){
          $(".user-contact").css({display: 'none'});
          $(".user-mainbody").css({display: 'none'});
          $(".user-files").fadeIn(700);
      });
        $("#get-started").click(function(){
            $(this).css({background:'rgba(30,30,30,0.5)'});
            $("#about-us").css({background:''});
            $("#wrapper").hide();
            $(".form-container").show();
        });
        $("#about-us").click(function(){
          $(this).css({background:'rgba(30,30,30,0.5)'});
          $("#get-started").css({background:''});
            $(".form-container").hide();
            $("#wrapper").show();
        });
        $("#form-close").click(function(){
            $(".form-container").hide(500);
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
    <header>
      <div class="main-brand">
        <h2>&nbsp;DigiV<i class="fa fa-lock" aria-hidden="true" style="color:#101010"></i>ult</h2>
      </div>
    </header>
        <?php
          if(!isset($_SESSION['u_id'])){
            echo "
              <nav id='index-nav'>
              <ul>
                <li id='about-us'>About Us</li>
                <li id='get-started'>Get Started</li>
              </ul>
            </nav>
            ";
          }
        ?>

    <div class="main-wrapper">
      <?php
        if(!isset($_SESSION['u_id'])){
          include_once 'include/home.php';
        } else{
          include_once 'include/user.php';
        }
       ?>
    </div>
  </body>
</html>

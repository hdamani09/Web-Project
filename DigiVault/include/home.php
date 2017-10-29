
<section id="wrapper" class="skewed">
  <div class="layer bottom">
    <div class="content-wrap">
      <div class="content-body">
        <h1>Stay Secure</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
      <img src="images/safe2.png" alt="">
    </div>
  </div>

  <div class="layer top">
    <div class="content-wrap">
      <div class="content-body">
        <h1>Easy Access</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
      <img src="images/safe1.png" alt="">
    </div>
  </div>

  <div class="handle">

  </div>
</section>

<div class="form-container animated flipInX" style="display:none">
  <p id="form-close" style="color:white">&#10006;</p>
  <div class="signup-container">
    <p class="form-header" >Register</p>
    <form id="signup-form" action="include/signup.inc.php" method="POST">
      <input type="text" name="first" placeholder="First Name" required>
      <input type="text" name="last" placeholder="Last Name"  required>
      <input id="signup-email" type="email" name="email" placeholder="Email" required>
      <input type="text" name="uid" placeholder="Username" required>
      <input type="password" name="pwd" placeholder="Password" required>
      <input type="password" name="pwd2" placeholder="Retype-Password" required>
      <button type="submit" class="form-button" name="submit-signup">Sign Up!</button>
      <span id="to-login" style="padding-top:1.13em">Already Registered?</span>
    </form>
  </div>
  <div class="signin-container">
    <p class="form-header" >Login</p>
    <form id="signin-form" action="include/signin.inc.php" method="POST">
      <input type="text" name="uid" placeholder="Username/Email" required>
      <input type="password" name="pwd" placeholder="Password" required>
      <button type="submit" class="form-button" name="submit-signin">Sign In!</button>
      <span id="to-register" style="padding-top:1.13em">Are you new?</span>
    </form>
  </div>
</div>

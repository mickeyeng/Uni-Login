<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Flat HTML5/CSS3 Login Form</title> 
    <link rel="stylesheet" href="css/style.css?<?php echo time(); ?> /">
    <link rel="stylesheet" href="css/style-mickey.css?<?php echo time(); ?> /">
    
  </head>
  <body>
  <section>
    <div class="login-page">
      <div class="form">
        <form class="register-form">
          <input type="text" placeholder="email address"/>
          <button>Submit</button>
          <p class="message">Already registered? <a href="#">Sign In</a></p>
        </form>
        <form class="login-form">
          <input type="text" placeholder="username"/>
          <input type="password" placeholder="password"/>
          <button>login</button>
          <p class="message">Forgot Password? <a href="#">Click here</a></p>
        </form>
      </div>
    </div>
  </section>



    <?php include "includes/footer.inc.php";?>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="js/index.js"></script>
  </body>
</html>
<?php include('connection.php'); ?>
<!DOCTYPE html>
<html>
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="login.css">
      
      <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800&display=swap" rel="stylesheet">

    </head>
    
<body>
  <div class="cont">
    <div class="form sign-in">
      <h2>Sign In</h2>
      <form action="loginconnection.php" method="POST">
      <label>
        <span>Email Address</span>
        <input type="text" class="input" required name="email">
      </label>
      <label>
        <span>Password</span>
        <input type="password" class="input" required name="password">
      </label>
      <button class="submit" type="submit" value="login"> Login  </button>
      </form>
    </div>

    <div class="sub-cont">
      <div class="img">
        <div class="img-text m-up">
          <h1>New here?</h1>
          <p>sign up and discover</p>
        </div>
        <div class="img-text m-in">
          <h1>One of us?</h1>
          <p>just sign in</p>
        </div>
        <div class="img-btn">
          <span class="m-up">Sign Up</span>
          <span class="m-in">Sign In</span>
        </div>
      </div>
      <div class="form sign-up">

  
        <h2>Sign Up</h2>
        <form action="registerconnection.php" method="POST">
    
        <label>
          <span>Email</span>
          <input type="text"  class="input" placeholder="Enter Email" name="email" required>
  
        </label>
        <label>
          <span>Password</span>
           <input type="password" class="input" placeholder="Enter Password" name="password" required>
  
        </label>
        <label>
          <span>Confirm Password</span>
          <input type="password" class="input" placeholder="Repeat Password" name="repeatpass" required>

        </label>
        <button type="submit" class="submit" value="register" name="register">Sign Up Now</button>
        </form>
      </div>
    </div>

  </div>
  

<script type="text/javascript" src="login.js"></script>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP </title>
  <link rel="stylesheet" type="text/css" href="style.css">

  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
 <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script> 
 <script src="https://www.google.com/recaptcha/api.js?render=6LdFEr4eAAAAABy2_RbtrFlBMuhMiqTZlwj6tN6b"></script>

</head>
<body>
  <div class="header">
  	<h2>Register</h2>
  </div>
	<div class="container">
  <form   method="post" action="add_loger.php"   >
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" id='username' required>
      <span id="usererror" class="text-danger" font-"weight-bold"></span>
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1" id="password_1" required>
      <span id="passworderror" class="text-danger" font-"weight-bold"></span>
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2" id="password_2" required>
      <span id="confirmpassworderror" class="text-danger" font-"weight-bold"></span>
  	</div>
    <div >
						<p>     
                 <button type =  "submit" id = "btn" class="button button2" value = "Login" style="background-color:#007bff;">Register
                            </button>
             Are you already a member ? <a href="login.php">Sign in</a></p>           
					</div>
          
  </form>
 
     
</body>
</html>
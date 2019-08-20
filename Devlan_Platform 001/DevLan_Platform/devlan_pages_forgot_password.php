<?php
include ('assets/configs/config.php');
include ('assets/configs/function.php');
	
if(isset($_POST['reset_password']))
{
	$email = $_POST['email'];
	$email = mysqli_real_escape_string($mysqli, $email);
	
	if(checkUser($email) == "true")
	{
		$userID = UserID($email);
		$token = generateRandomString();
		
		$query = mysqli_query($mysqli, "INSERT INTO recovery_keys (userID, token) VALUES ($userID, '$token') ");
		if($query)
		{
			 $send_mail = send_mail($email, $token);


			if($send_mail === 'success')
			{
				 $msg = 'A mail with recovery instruction has sent to your email.';
				 $msgclass = 'bg-success';
			}else{
				$msg = 'There is something wrong.';
				$msgclass = 'bg-danger';
			}



		}else
		{
				$msg = 'There is something wrong.';
				 $msgclass = 'bg-danger';
		}
		
	}else
	{
		$msg = "This email doesn't exist in our database.";
				 $msgclass = 'bg-danger';
	}
}

?>


<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="Mart Developers">
    <link rel="shortcut icon" href="https://devlan.martdev.info/assets/img/favicon.png">
    <title>DevLan | Software Development projects,  Networking, Scripts, Topologies</title> 
    <link rel="stylesheet" type="text/css" href="assets/lib/perfect-scrollbar/css/perfect-scrollbar.css"/>
    <link rel="stylesheet" type="text/css" href="assets/lib/material-design-icons/css/material-design-iconic-font.min.css"/>
    <link rel="stylesheet" href="assets/css/app.css" type="text/css"/>
    <link rel="stylesheet" href="//cdn.materialdesignicons.com/3.9.97/css/materialdesignicons.min.css">

  </head>
  <body class="be-splash-screen">
    <div class="be-wrapper be-login">
      <div class="be-content">
        <div class="main-content container-fluid">
          <div class="splash-container">
            <div class="card card-border-color card-border-color-primary">
              <div class="card-header"><img class="logo-img" src="assets/img/logo-xx.png" alt="logo" width="102" height="27"><span class="splash-description">Please enter your user information.</span></div>
              <div class="card-body">
              
              <!--Login Form-->
                <form method ="POST">
                  <div class="form-group">
                    <input class="form-control" id="email" required name="email" type="email" placeholder="Enter Your Email" autocomplete="off">
                  </div>
                  <div class="form-group pt-2">
                    <button class="btn btn-block btn-primary btn-xl" name="reset_password" type="submit">Reset Password</button>
                  </div>                
                </form>

              </div>
              <div class="splash-footer"><span>Remembered Password? <a href="index.php">Sign In</a></span></div>
            </div>
            <div class="splash-footer">&copy; <?php echo date("Y");?> DevLan Inc. All Rights Reserved. Powered By <a href="https://martmbithi.github.io">MartDevelopers</a></div>
          </div>
        </div>
      </div>
    </div>
    <script src="assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="assets/lib/perfect-scrollbar/js/perfect-scrollbar.min.js" type="text/javascript"></script>
    <script src="assets/lib/bootstrap/dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <script src="assets/js/app.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function(){
      	//-initialize the javascript
      	App.init();
      });
      
    </script>
  </body>

</html>
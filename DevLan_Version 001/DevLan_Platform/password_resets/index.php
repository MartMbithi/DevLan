<?php
include ('config.php');
include ('function.php');
	
if(isset($_POST['submit']))
{
	$email = $_POST['email'];
	$email = mysqli_real_escape_string($db, $email);
	
	if(checkUser($email) == "true")
	{
		$userID = UserID($email);
		$token = generateRandomString();
		
		$query = mysqli_query($db, "INSERT INTO recovery_keys (userID, token) VALUES ($userID, '$token') ");
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
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>DevLan | Software Development projects,  Networking, Scripts, Topologies</title> 

<!-- Bootstrap -->
<link href="css/bootstrap.css" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
</head>
<body>

<div class="container">
	<div class="row">

    	<div class="col-lg-4 col-lg-offset-4">
        

        	<form class="form-horizontal" role="form" method="post">
			    <h2>Forgot Password</h2>

				<?php if(isset($msg)) {?>
                    <div class="<?php echo $msgclass; ?>" style="padding:5px;"><?php echo $msg; ?></div>
                <?php } ?>

                <p>
                    Forgot your password? No problem, we will fix it. Just type your email below and we will send you password recovery instruction to your email. Follow easy steps to get back to your account.
                </p>
    
                <div class="row">
                    <div class="col-lg-12">
                    <label class="control-label">Your Email</label>
                    </div>
                </div>
    
                <div class="row">
                    <div class="col-lg-12">
                        <input class="form-control" name="email" type="email" placeholder="Enter your email here..." required>
                    </div>
                </div>
    
                <div class="row">
                    <div class="col-lg-12">
                        <button class="btn btn-success btn-block" name="submit" style="margin-top:8px;">Submit</button>
                    </div>
                </div>
			</form>
		</div>
           

	</div>
    

    </div>
</div>    






















<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery-1.11.3.min.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.js"></script>
</body>
</html>

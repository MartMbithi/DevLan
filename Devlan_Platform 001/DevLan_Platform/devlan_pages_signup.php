<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="MartDevelopers">
    <link rel="shortcut icon" href="https://devlan.martdev.info/assets/img/favicon.png">
    <title>DevLan</title>
    <link rel="stylesheet" type="text/css" href="assets/lib/perfect-scrollbar/css/perfect-scrollbar.css"/>
    <link rel="stylesheet" type="text/css" href="assets/lib/material-design-icons/css/material-design-iconic-font.min.css"/>
    <link rel="stylesheet" href="assets/css/app.css" type="text/css"/>
  </head>
  <body class="be-splash-screen">
    <div class="be-wrapper be-login be-signup">
      <div class="be-content">
        <div class="main-content container-fluid">
          <div class="splash-container sign-up">
            <div class="card card-border-color card-border-color-primary">
              <div class="card-header"><img class="logo-img" src="assets/img/logo-xx.png" alt="logo" width="102" height="27"><span class="splash-description">Please enter your user information.</span></div>
              <div class="card-body">

              <!--User sign upphp code-->
              <?php
              session_start();
              include('assets/configs/config.php');
                  if(isset($_POST['create_Account']))
              {
                  //$fname=$_POST['fname'];
                // $lname=$_POST['lname'];
                  //$id_no=$_POST['id_no'];
                  $email=$_POST['email'];
                  $username=$_POST['username'];
                  $password=sha1($_POST['password']);
                  //$acc_status=$_POST['acc_status'];
                  //$dpic=$_FILES["dpic"]["name"];
                  //move_uploaded_file($_FILES["dpic"]["tmp_name"],"../client/img/".$_FILES["dpic"]["name"]);
                  

              //sql to inset the values to the database
                  $query="insert into users (email, username, password) values(?,?,?)";
                  $stmt = $mysqli->prepare($query);
                  //bind the submitted values with the matching columns in the database.
                  $rc=$stmt->bind_param('sss', $email, $username, $password);
                  $stmt->execute();

                  
                  $msg = "Success Your Account Has Been Created!";
                  echo 
                                  '<div class="alert alert-success alert-icon alert-dismissible" role="alert">
                                  <div class="icon"><span class="mdi mdi-thumb-up"></span></div>
                                  <div class="message">
                                    <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span class="mdi mdi-close" aria-hidden="true"></span></button><strong>'.$msg.'</strong>
                                  </div>
                                </div>';
                  
              }

              ?>
                <form  method="Post"><span class="splash-title pb-4">Sign Up</span>
                  <div class="form-group">
                    <input class="form-control" type="text" name="username" required="" placeholder="Username" autocomplete="off">
                  </div>

                  <div class="form-group">
                    <input class="form-control" type="email" name="email" required="" placeholder="E-mail" autocomplete="off">
                  </div>

                  <div class="form-group">
                    <input class="form-control" type="password" name="password" required="" placeholder="Password" autocomplete="off">
                  </div>

                  <div class="form-group pt-2">
                    <button class="btn btn-block btn-primary btn-xl" name="create_Account" type="submit">Sign Up</button>
                  </div>

                  
                </form>

              </div>
              <div class="splash-footer"><span>Already With account? <a href="index.php">Sign In</a></span></div>

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
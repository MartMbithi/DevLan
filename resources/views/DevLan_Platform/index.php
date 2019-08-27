<?php
session_start();
include('assets/configs/config.php');

                      if(isset($_POST['user_signin']))
                        {
                              $email=$_POST['email'];
                              $password=sha1($_POST['password']);
                              $stmt=$mysqli->prepare("SELECT email,password, user_id FROM users WHERE email=? and password=? ");
                              $stmt->bind_param('ss',$email,$password);
                              $stmt->execute();
                              $stmt -> bind_result($email,$password,$user_id);
                              $rs=$stmt->fetch();
                              $_SESSION['user_id']=$user_id;
                              $uip=$_SERVER['REMOTE_ADDR'];
                              $ldate=date('d/m/Y h:i:s', time());
                              if($rs)
                                {
                                      
                                  header("location:devlan_pages_dashboard.php");
                                }

                              else
                              {
                                $error = "Please Check Your Email Or Password";
                                
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
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script><!--Sweet alert js-->

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
                    <!--Code for Triggering an error-->
                <?php if(isset($error)) {?>
                <script>
                                setTimeout(function () 
                                { 
                                    swal("Failed!","<?php echo $error;?>!","error");
                                },
                                    100);
                            </script>
                  
                <?php } ?>
                <!--End-->
                  <div class="form-group">
                    <input class="form-control" id="email" required name="email" type="email" placeholder="Enter Your Email" autocomplete="off">
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="password" required name="password" type="password" placeholder="Password">
                  </div>
                  <div class="form-group row login-tools">
                    <div class="col-6 login-remember">
                      <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="checkbox1">
                        <label class="custom-control-label" for="checkbox1">Remember Me</label>
                      </div>
                    </div>
                    <div class="col-6 login-forgot-password"><a href="devlan_password_reset.php">Forgot Password?</a></div>
                  </div>
                  <div class="form-group pt-2">
                    <button class="btn btn-block btn-outline-success btn-xl" name="user_signin" type="submit">Sign In</button>
                  </div>                
                </form>

              </div>
            </div>
            <div class="splash-footer"><span>Don't have an account? <a href="devlan_pages_signup.php">Sign Up</a></span></div>
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

<?php include('head.php');?>
<body>

  <?php include("navbar.php");?>

  <div class="intro py-8 bg-primary position-relative text-white">
    <div class="bg-overlay-success">
      <img src="img/photos/8.jpg" class="img-fluid img-cover" alt="Robust UI Kit" />
    </div>
    <div class="intro-content mt-5">
      <div class="container">
        <div class="row">
          <div class="col-md-6 align-self-center">
            <h1 class="display-4 mb-3">Built For Developers <br />And Network Engineers</h1>
            <p class="lead mb-4">DevLan is a projects sharing  platform inspired by the way you work. From software development to networking projects, you can host and review code, manage projects, and build  any software or networking projects alongside your fellow. </p>
          </div><!-- /.col-md-6 -->
          <div class="col-md-5 ml-auto">
            <div class="card">
            <!----- Php code to  verify user and log in ----->
              <?php
                  session_start();
                    include('../includes/config.php');
                      if(isset($_POST['log_in']))
                        {
                              $email=$_POST['email'];
                              //$password=sha1($_POST['password']);
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
                                      
                                  header("location:../dashboard/user_dashboard.php");
                                }

                              else
                              {
                                $error = "<i class='fa fa-meh-rolling-eyes'></i>Whoops......Please Check your Email Or Password!";
                                echo 
                                  '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <strong>'.$error.'</strong>
                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                  </div>';
                              }
                          }
                ?>
              <div class="card-body text-dark">
              
                <form method="POST" action="">
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" id="email" >
                  </div>
                  
                  
                  
                  <button type="submit"  name="resetpassword" class="btn btn-outline-success btn-block btn-lg mb-2">Reset Password</button>
                  <div class="text-center">
                    Dont have an account? <a href="index.php">Sign up</a>
                  </div>
                  <hr>
                  <div class="text-center">
                    Remembered Password? <a href="login.php">Sign In</a>
                  </div>
                </form>
              </div>
            </div>
          </div><!-- /.col-md-6 -->
        </div>
      </div>
    </div>
  </div>


  <?php include('footer.php');?>

  <script src="dist/js/bundle.js"></script>
</body>

</html>

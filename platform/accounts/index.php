<!--PHP CODE TO CAPTURE LIBRARY USERS DETAILS-->

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
            <p class="lead mb-4">DevLan is a projects sharing  platform inspired by the way you work. From software development to networking projects, you can host and review code, manage projects, and build  any software or networking projects alongside your fellow geeks. </p>
          </div><!-- /.col-md-6 -->
          <div class="col-md-5 ml-auto">
          <?php
              session_start();
              include('../includes/config.php');
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

                  
                  $msg = "<i class='fa fa-grin-hearts'></i> Success Your Account Has Been Created!";
                  echo 
                                  '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>'.$msg.'</strong>
                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                  </div>';
                  
              }

              ?>
            <div class="card">
              <div class="card-body text-dark">
                <form  method= "POST" > 
                
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" required name="email" id="email" >
                  </div>
                  <div class="form-group">
                    <label for="email">Username</label>
                    <input type="text" class="form-control"  required name="username" id="email" >
                  </div>
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" id="password" >
                  </div>
                  
                  <button type="submit"  name="create_Account" class="btn btn-success btn-block btn-lg mb-2">Sign Up For DevLan</button>
                  <hr>
                  <div class="text-center">
                    Already have an account? <a href="login.php">Sign in</a>
                  </div>
                </form>
              </div>
            </div>
          </div><!-- /.col-md-6 -->
        </div>
      </div>
    </div>
  </div>


 <?php include("footer.php");?>

  <script src="dist/js/bundle.js"></script>
  <script src="dist/js/bootstrap-notify.js"></script>
  
</body>

</html>


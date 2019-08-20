<?php
session_start();
include('assets/configs/config.php');
include('assets/configs/checklogin.php');
check_login();
$aid=$_SESSION['admin_id'];
?>

<!DOCTYPE html>
<html lang="en">
  
<?php include("assets/_partials/head.php");?>
  <body>
    <div class="be-wrapper">
     <!--Navigation Bar-->
     <?php include('assets/_partials/navbar.php');?>

     <!--Sidebar-->
     <?php include('assets/_partials/sidebar.php');?>

      
      <div class="be-content">
        <div class="page-head">
                <?php
                            if(isset($_POST['update_password_intel']))
                        {
                          $id=$_GET['id'];
                           $username =$_POST['username'];
                           $user_email= $_POST['user_email'];
                           $status = $_POST['status'];

                        $query="update password_resets set   username=?, user_email=?, status=?  where id=?";
                        $stmt = $mysqli->prepare($query);
                        //bind the submitted values with the matching columns in the database.
                        $rc=$stmt->bind_param('sssi',$username, $user_email, $status,  $id);
                        $stmt->execute();
                        //if binding is successful, then indicate that a new value has been added.
                        $msg = "Success!";
                  echo 
                                  '<div class="alert alert-success alert-icon alert-dismissible" role="alert">
                                  <div class="icon"><span class="mdi mdi-thumb-up"></span></div>
                                  <div class="message">
                                    <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span class="mdi mdi-close" aria-hidden="true"></span></button><strong>'.$msg.'</strong>
                                  </div>
                                </div>';
                    }

            ?>
          <div class="row">
            <div class="col-md-12">
              <div class="card card-border-color card-border-color-primary">
                <div class="card-header card-header-divider">Update Password</div>
                <div class="card-body">
                            <?php
                            $aid=$_GET['id'];
                            $ret="select * from password_resets where id=?";
                            $stmt= $mysqli->prepare($ret) ;
                            $stmt->bind_param('i',$aid);
                            $stmt->execute() ;//ok
                            $res=$stmt->get_result();
                        //$cnt=1;
                        while($row=$res->fetch_object())
                    {
                        ?>

                  <form  method="post" enctype="multipart/form-data">

                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right"  for="inputText3">User Name</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <input class="form-control" name="username" value="<?php echo $row->username;?>" type="text">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right"  for="inputText3">Email</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <input class="form-control" name="user_email" required value="<?php echo $row->user_email;?>" type="text">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right"  for="inputText3">Status</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <select id="status" name="status" class="form-control">
                                    <option selected>Status</option>
                                    <option>Pending</option>
                                    <option>approved</option>
                                    
                            </select>
                      </div>
                    </div>
                    
                    <hr>
                    <hr>
                    <div class="col-sm-6">
                        <p class="text-right">
                          <button class="btn btn-space btn-success"  name="update_password_intel" type="submit">Approve</button>
                          <button class="btn btn-space btn-secondary">Cancel</button>
                        </p>
                      </div>

                  </form>
                    <?php }?>

                </div>
              </div>
            </div>
          </div>
          
      </div>
      
    </div>
    <script src="assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="assets/lib/perfect-scrollbar/js/perfect-scrollbar.min.js" type="text/javascript"></script>
    <script src="assets/lib/bootstrap/dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <script src="assets/js/app.js" type="text/javascript"></script>
    <script src="assets/lib/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
    <script src="assets/lib/jquery.nestable/jquery.nestable.js" type="text/javascript"></script>
    <script src="assets/lib/moment.js/min/moment.min.js" type="text/javascript"></script>
    <script src="assets/lib/datetimepicker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
    <script src="assets/lib/select2/js/select2.min.js" type="text/javascript"></script>
    <script src="assets/lib/select2/js/select2.full.min.js" type="text/javascript"></script>
    <script src="assets/lib/bootstrap-slider/bootstrap-slider.min.js" type="text/javascript"></script>
    <script src="assets/lib/bs-custom-file-input/bs-custom-file-input.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function(){
      	//-initialize the javascript
      	App.init();
      	App.formElements();
      });
    </script>
  </body>

</html>
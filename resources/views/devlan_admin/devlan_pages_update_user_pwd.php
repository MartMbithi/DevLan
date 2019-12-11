<?php
session_start();
include('assets/configs/config.php');
include('assets/configs/checklogin.php');
check_login();
$aid=$_SESSION['admin_id'];

            if(isset($_POST['update_profile']))
        {
        $id=$_GET['user_id'];
        
        $password=sha1($_POST['password']);
       
        //$cover=$_FILES["cover"]["name"];
       // move_uploaded_file($_FILES["cover"]["tmp_name"],"assets/img/cover/".$_FILES["cover"]["name"]);
        

        //sql to inset the values to the database
        $query="update users set  password=? where user_id=?";
        $stmt = $mysqli->prepare($query);
        //bind the submitted values with the matching columns in the database.
        $rc=$stmt->bind_param('si', $password,  $id);
        $stmt->execute();
        //if binding is successful, then indicate that a new value has been added.
        $msg = "Account Password Has Been Updated!";
  
    }
?>

<!DOCTYPE html>
<html lang="en">
  
<?php include("assets/_partials/head.php");?>
  <body>
  <div class="be-wrapper be-fixed-sidebar">
    <div class="be-wrapper">
     <!--Navigation Bar-->
     <?php include('assets/_partials/navbar.php');?>

     <!--Sidebar-->
     <?php include('assets/_partials/sidebar.php');?>

      
      <div class="be-content">
        <div class="page-head">
            <?php if(isset($msg)) 
               {?>
                    <script>
                        setTimeout(function () 
                        { 
                            swal("Success!","<?php echo $msg;?>!","success");
                        },
                            100);
                    </script>
                    <!--Trigger a pretty success alert-->

           <?php } ?>
          <div class="row">
            <div class="col-md-12">
              <div class="card card-border-color card-border-color-primary">
                <div class="card-header card-header-divider">Admin Manage DevLanner`s  Password <span class="card-subtitle">provide required information</span></div>
                <div class="card-body">
                            <?php
                            $aid=$_GET['user_id'];
                            $ret="select * from users where user_id=?";
                            $stmt= $mysqli->prepare($ret) ;
                            $stmt->bind_param('i',$aid);
                            $stmt->execute() ;//ok
                            $res=$stmt->get_result();
                        //$cnt=1;
                        while($row=$res->fetch_object())
                    {
                        ?>

                  <form  method="post" enctype="multipart/form-data">                   
                    <hr>       
                    <div class="form-group row">
                        <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputPassword3">New Password</label>
                    <div class="col-12 col-sm-8 col-lg-6">
                        <input class="form-control" name="password"  type="password">
                    </div>
                    </div>

                    <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3">Confirm Password</label>
                    <div class="col-12 col-sm-8 col-lg-6">
                        <input class="form-control"   type="password">
                    </div>
                    </div>                    
                    <hr>
                    <div class="col-sm-6">
                        <p class="text-right">
                          <button class="btn btn-space btn-success"  name="update_profile" type="submit">Change Password</button>
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
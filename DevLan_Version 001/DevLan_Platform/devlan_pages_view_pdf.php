<?php
session_start();
include('assets/configs/config.php');
include('assets/configs/checklogin.php');
check_login();
$aid=$_SESSION['user_id'];
?>
<!DOCTYPE html>
<html lang="en">
  
<?php include("assets/_partials/head.php");?>
  <body>
    <div class="be-wrapper">
      <!--navbar-->
      <?php include('assets/_partials/navbar.php');?>
      <!--end navbar-->
      <!--Sidebar-->
      <?php include('assets/_partials/sidebar.php');?>
      <!--End sidebar-->

      <?php	
        $id=$_GET['project_id'];
        $ret="select * from projects where project_id=?";
        //code for getting rooms using a certain id
        $stmt= $mysqli->prepare($ret) ;
        $stmt->bind_param('i',$id);
        $stmt->execute() ;//ok
        $res=$stmt->get_result();
        //$cnt=1;
        while($row=$res->fetch_object())
        {
     ?>
      <div class="be-content">
        <div class="page-head">
          <h2 class="page-head-title"><?php echo $row->project_name;?></h2>
          <nav aria-label="breadcrumb" role="navigation">
            <ol class="breadcrumb page-head-nav">
              <li class="breadcrumb-item"><a href="devlan_pages_dashboard.php">Dashboard</a></li>
              <li class="breadcrumb-item active"><?php echo $row->project_name;?></li>
            </ol>
          </nav>
        </div>
        <div class="main-content container-fluid">
          <div class="row">
            <div class="col-lg-12">
              <div class="tab-container">
                <ul class="nav nav-tabs nav-tabs-classic" role="tablist">
                  <li class="nav-item"><a class="nav-link active" href="#active" data-toggle="tab" role="tab">Pdf Details</a></li>
                </ul>
              </div>
              
              <div class="tab-content">
              
                
              </div>
            </div>
         
          </div>
        </div>
      </div>
        <?php }?>
    </div>
    <script src="assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="assets/lib/perfect-scrollbar/js/perfect-scrollbar.min.js" type="text/javascript"></script>
    <script src="assets/lib/bootstrap/dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <script src="assets/js/app.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function(){
      	//initialize the javascript
      	App.init();
      });
    </script>
  </body>

</html>
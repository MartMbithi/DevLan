<?php
session_start();
include('assets/configs/config.php');
include('assets/configs/checklogin.php');
check_login();
$aid=$_SESSION['admin_id'];
?>

<!DOCTYPE html>
<html lang="en">
  
<?php include('assets/_partials/head.php');?>
  <body>
    <div class="be-wrapper be-fixed-sidebar">

      <!--Head Based Navigation bar-->
      <?php include('assets/_partials/navbar.php');?>
      <!--eND OF NAVBAR-->

      <!--Side Bar-->
      <?php include('assets/_partials/sidebar.php');?>
      <!--End of side bar-->

      <div class="be-content">
        <div class="main-content container-fluid">
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
          <div class="row">
            <div class="col-12 col-lg-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="devlan_pages_dashboard.php">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">PDF Cheat Sheets</li>
                        <li class="breadcrumb-item active" aria-current="page"><?php echo  $row->project_name;?> </li>
                    </ol>
                </nav>
              <div class="card card-table">
                <div class="card-header">
                  <div class="tools dropdown"><a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"></a>
                    <div class="dropdown-menu dropdown-menu-right" role="menu"><a class="dropdown-item" href="#">View Projects</a>
                    </div>
                  </div>
                  <div class="title">Creator: <b><?php echo $row->user_email;?></b></div>
                  <embed src="assets/projects/<?php echo $row->project_files;?>" width="1000" height="500"  type="application/pdf">
                </div>
               
              </div>
            </div>
            <?php }?>
          </div>

        </div>
      </div>
                  <div class="splash-footer"><span><?php echo date ('Y');?> Devlan Labs. Proudly Powered By  <a href="https://martmbithi.github.io/">MartDevelopers</a></span></div>

    </div>
    <script src="assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="assets/lib/perfect-scrollbar/js/perfect-scrollbar.min.js" type="text/javascript"></script>
    <script src="assets/lib/bootstrap/dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <script src="assets/js/app.js" type="text/javascript"></script>
    <script src="assets/lib/jquery-flot/jquery.flot.js" type="text/javascript"></script>
    <script src="assets/lib/jquery-flot/jquery.flot.pie.js" type="text/javascript"></script>
    <script src="assets/lib/jquery-flot/jquery.flot.time.js" type="text/javascript"></script>
    <script src="assets/lib/jquery-flot/jquery.flot.resize.js" type="text/javascript"></script>
    <script src="assets/lib/jquery-flot/plugins/jquery.flot.orderBars.js" type="text/javascript"></script>
    <script src="assets/lib/jquery-flot/plugins/curvedLines.js" type="text/javascript"></script>
    <script src="assets/lib/jquery-flot/plugins/jquery.flot.tooltip.js" type="text/javascript"></script>
    <script src="assets/lib/jquery.sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
    <script src="assets/lib/countup/countUp.min.js" type="text/javascript"></script>
    <script src="assets/lib/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
    <script src="assets/lib/jqvmap/jquery.vmap.min.js" type="text/javascript"></script>
    <script src="assets/lib/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function(){
      	//-initialize the javascript
      	App.init();
      	App.dashboard();
      
      });
    </script>
  </body>

</html>
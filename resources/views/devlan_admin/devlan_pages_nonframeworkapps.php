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
          
          <div class="row">
            <div class="col-12 col-lg-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="devlan_pages_dashboard.php">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="#">Coding Topologies</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Non Framework WebApps</li>
                    </ol>
                </nav>
              <div class="card card-table">
                <div class="card-header">
                  <div class="tools dropdown"><a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"></a>
                    <div class="dropdown-menu dropdown-menu-right" role="menu"><a class="dropdown-item" href="#">View Projects</a>
                    </div>
                  </div>
                  <div class="title">Non Framework WebApp Projects </div>
                </div>
                
                <div class="card-body table-responsive">
                  <table class="table table-striped table-hover">
                    <thead>
                      <tr>
                      <th style="width:36%;"># </th>
                        <th style="width:36%;">Project Name  </th>
                        
                        <th>Action</th>
                        
                      </tr>
                    </thead>
                    <?php
                                            
                                            $ret="SELECT * FROM projects   where project_category = 'Non Framework WebApp'  ";
                                            $stmt= $mysqli->prepare($ret) ;
                                            //$stmt->bind_param('i',$aid);
                                            $stmt->execute() ;//ok
                                            $res=$stmt->get_result();
                                            $cnt=1;
                                            while($row=$res->fetch_object())
                    	                        {
                    	?>
                    <tbody>
                   
                      <tr>
                        <td><?php  echo $cnt;?></td>
                        <td><?php echo $row->project_name;?></td>
                        <td><a class="badge badge-success" href='devlan_pages_singleproject_detail.php?project_id=<?php echo $row->project_id;?>'>
                            <i class="mdi mdi-eye-outline"></i>
                                 View Project</a>
                        </td>
                      </tr>
                     </tbody>
                     <?php $cnt=$cnt+1; } ?>
                  </table>
                </div>
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
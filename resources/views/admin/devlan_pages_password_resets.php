<?php
session_start();
include('assets/configs/config.php');
include('assets/configs/checklogin.php');
check_login();
$aid=$_SESSION['user_id'];
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
                        //delete or remove projects
                    if(isset($_GET['del']))
                    {
                            $id=intval($_GET['del']);
                            $adn="delete from password_resets where id=?";
                            $stmt= $mysqli->prepare($adn);
                            $stmt->bind_param('i',$id);
                            $stmt->execute();
                            $stmt->close();	   
                            $msg = "Password Reset Details are Successfully Removed!";
                            echo 
                            
                            '<div class="alert alert-danger alert-icon alert-dismissible" role="alert">
                            <div class="icon"><span class="mdi mdi-delete-forever"></span></div>
                                <div class="message">
                                    <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span class="mdi mdi-close" aria-hidden="true"></span></button><strong>'.$msg.'</strong>
                                </div>
                        </div>';
            
                    }
           
            ?>
          <div class="row">
            <div class="col-12 col-lg-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="devlan_pages_dashboard.php">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Password Resets</li>
                    </ol>
                </nav>
              <div class="card card-table">
                <div class="card-header">
                  <div class="tools dropdown"><a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"></a>
                    <div class="dropdown-menu dropdown-menu-right" role="menu"><a class="dropdown-item" href="#">Password Reset Requests</a>
                    </div>
                  </div>
                  <div class="title">Password Reset Requests</div>
                </div>
                
                <div class="card-body table-responsive">
                  <table class="table table-striped table-hover">
                    <thead>
                      <tr>
                        <th># </th>
                        <th>User Name  </th>
                        <th> User Email</th>
                        <th>Status</th>
                        <th>Update</th>
                        <th>Delete</th>
                        
                      </tr>
                    </thead>
                    <?php
                                            
                                            $ret="SELECT * FROM password_resets   ";
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
                        <td><?php echo $row->username;?></td>
                        <td><?php echo $row->user_email;?></td>
                        <td><?php echo $row->status;?></td>
                        <td><a href='devlan_pages_update_password_reset_request.php?id=<?php echo $row->id;?>' class="mdi mdi-account-check"></td>
                        <td><a  class=" mdi mdi-delete-sweep" href='devlan_pages_password_resets.php?del=<?php echo $row->id;?>' onClick= "return confirm('You Sure Wanna Delete This Record?');"></td>
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
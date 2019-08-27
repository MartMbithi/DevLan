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
      
                
      <div class="be-content">
        <div class="main-content container-fluid">
          <div class="user-profile">
            <div class="row">
            <?php
            $aid=$_SESSION['user_id'];
            $ret="select * from users where user_id=?";
            $stmt= $mysqli->prepare($ret) ;
            $stmt->bind_param('i',$aid);
            $stmt->execute() ;//ok
            $res=$stmt->get_result();
      	 //$cnt=1;
      	   while($row=$res->fetch_object())
      	  {
      	  	?>
              <div class="col-lg-12">
                <div class="user-display">
                  <div class="user-display-bg"><img src="assets/img/<?php echo $row->dpic;?>" alt="Profile Background"></div>
                  <div class="user-display-bottom">
                    <div class="user-display-avatar"><img src="assets/img/<?php echo $row->dpic;?>" alt="Avatar"></div>
                    <div class="user-display-info">
                      <div class="name"><?php echo $row->fname;?> <?php echo $row->lname;?></div>
                      <div class="nick"><span class="mdi mdi-account"></span><?php echo $row->username;?></div>
                    </div>
                    <?php }?>
                  </div>
                </div>
                <?php
                        $aid=$_SESSION['user_id'];
                        $ret="select * from users where user_id=?";
                        $stmt= $mysqli->prepare($ret) ;
                        $stmt->bind_param('i',$aid);
                        $stmt->execute() ;//ok
                        $res=$stmt->get_result();
                    //$cnt=1;
                    while($row=$res->fetch_object())
                    {
                        ?>
                <div class="user-info-list card">
                  <div class="card-header card-header-divider">About Me<span class="card-subtitle"><?php echo $row->bio;?></span></div>
                  <div class="card-body">
                    <table class="no-border no-strip skills">
                      <tbody class="no-border-x no-border-y">
                        <tr>
                          <td class="icon"><span class="mdi mdi-case"></span></td>
                          <td class="item">Skills<span class="icon s7-portfolio"></span></td>
                          <td><?php echo $row->skill;?></td>
                        </tr>
                        <tr>
                          <td class="icon"><span class="mdi mdi-cake"></span></td>
                          <td class="item">Birthday<span class="icon s7-gift"></span></td>
                          <td><?php echo $row->dob;?></td>
                        </tr>
                        <tr>
                          <td class="icon"><span class="mdi mdi-smartphone-android"></span></td>
                          <td class="item">Mobile<span class="icon s7-phone"></span></td>
                          <td><?php echo $row->phone;?></td>
                        </tr>
                        <tr>
                          <td class="icon"><span class="mdi mdi-globe-alt"></span></td>
                          <td class="item">Location<span class="icon s7-map-marker"></span></td>
                          <td><?php echo $row->location;?></td>
                        </tr>
                        <tr>
                          <td class="icon"><span class="mdi mdi-pin"></span></td>
                          <td class="item">Website<span class="icon s7-global"></span></td>
                          <td><?php echo $row->website;?></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
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
    <script src="assets/lib/jquery-flot/jquery.flot.js" type="text/javascript"></script>
    <script src="assets/lib/jquery-flot/jquery.flot.pie.js" type="text/javascript"></script>
    <script src="assets/lib/jquery-flot/jquery.flot.time.js" type="text/javascript"></script>
    <script src="assets/lib/jquery-flot/jquery.flot.resize.js" type="text/javascript"></script>
    <script src="assets/lib/jquery-flot/plugins/jquery.flot.orderBars.js" type="text/javascript"></script>
    <script src="assets/lib/jquery-flot/plugins/curvedLines.js" type="text/javascript"></script>
    <script src="assets/lib/jquery-flot/plugins/jquery.flot.tooltip.js" type="text/javascript"></script>
    <script src="assets/lib/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function(){
      	//-initialize the javascript
      	App.init();
      	App.pageProfile();
      });
    </script>
  </body>

</html>
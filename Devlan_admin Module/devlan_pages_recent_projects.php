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
    <div class="be-wrapper">
      <!-- Navigation Bar-->
      <?php include('assets/_partials/navbar.php');?>
      <!--Side Bar-->
      <?php include('assets/_partials/sidebar.php');?>

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
              <li class="breadcrumb-item"><a href="#">Latest Commits</a></li>
              <li class="breadcrumb-item active"><?php echo $row->project_name;?></li>
            </ol>
          </nav>
        </div>
        <div class="main-content container-fluid">
          <div class="row">
            <div class="col-lg-12">
              <div class="tab-container">
                <ul class="nav nav-tabs nav-tabs-classic" role="tablist">
                  <li class="nav-item"><a class="nav-link active" href="#active" data-toggle="tab" role="tab">Project Details</a></li>
                </ul>
              </div>
              
              <div class="tab-content">
                <div class="tab-pane active" id="active" role="tabpanel">
                  <div class="card text-center">
                    <div class="card-header"><?php echo $row->project_category;?></div>
                    <div class="card-body">
                      <p><?php echo $row->project_desc;?></p><a class="btn btn-outline-success"  href="#"><span class = "mdi mdi-account-convert" ></span> Creator : <?php echo $row->user_email;?></a>
                      <a class="btn btn-outline-success" href="#"> <i class=" mdi mdi-cloud-upload" ></i> Date Uploaded: <?php echo $row->date_created;?></a>
                      <a class="btn btn-outline-success" href="assets/projects/<?php echo $row->project_files;?>"><i class="mdi mdi-meteor" ></i> Download</a>
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="link" role="tabpanel">
                  <div class="card">
                    <div class="card-header">Make It Yours</div>
                    <div class="card-body">
                      <a class="btn btn-primary " href="assets/projects/<?php echo $row->project_files;?>"><i class="mdi mdi-download"></i>Download</a>
                    </div>
                  </div>
                </div>
                
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
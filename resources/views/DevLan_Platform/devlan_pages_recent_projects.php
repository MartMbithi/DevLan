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
              <div class="card mb-3"><img class="card-img-top" src="assets/projects/<?php echo $row->project_avatar;?>" alt="project screenshot">
                <div class="card-header">Project Category : <b><?php echo $row->project_category;?></b> <br>
                Uploaded By : <b><?php echo $row->user_email;?></b> <br>
                <?php echo $row->project_desc;?>
                </div>
                <div class="card-body">
                  <a class="btn btn-outline-success" href="assets/projects/<?php echo $row->project_files;?>">Download</a>
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
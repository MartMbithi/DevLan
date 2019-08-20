<!DOCTYPE html>
<html lang="en">


<?php include("_partials/head.php");?>
 <!--PHP CODE TO GET LIB DETAILS USING ID SESSION-->
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
<body class="application application-offset">



  <!-- Application container -->
  <div class="container-fluid container-application">
    <!-- Sidenav -->
    <?php include ("_partials/side_navbar.php");?>
    <!-- Content -->
    <div class="main-content position-relative">
      <!-- Main nav -->
      <nav class="navbar navbar-main navbar-expand-lg navbar-dark bg-primary navbar-border" id="navbar-main">
        <div class="container-fluid">
          <!-- Brand + Toggler (for mobile devices) -->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-main-collapse" aria-controls="navbar-main-collapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>


         <?php include("_partials/navbar.php");?>
         </div>
      </nav>
      <div id="omnisearch" class="omnisearch">
            <div class="container">
                <!-- Search form -->
                <form class="omnisearch-form " action ="user_web_application_projects.php">
                    <div class="form-group">
                        <div class="input-group input-group-merge input-group-flush">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-search"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Type and hit enter ...">
                        </div>
                    </div>
                </form>
                <div class="omnisearch-suggestions">
                    <h6 class="heading">Search Suggestions</h6>
                    <div class="row">
                        <div class="col-sm-6">
                            <ul class="list-unstyled mb-0">
                                <li>
                                    <a class="list-link" href="#">
                                        <i class="fa fa-search"></i>
                                        <span>Networking Projects</span> Topologies
                                    </a>
                                </li>
                                <li>
                                    <a class="list-link" href="#">
                                        <i class="fa fa-search"></i>
                                        <span>Coding Projects</span> Web Apps
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      <!-- Omnisearch -->
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
      <div class="page-content">
        <!-- Page title -->
        <div class="page-title">
          <div class="row justify-content-between align-items-center">
            <div class="col-md-6 mb-3 mb-md-0">

              <h5 class="h3 font-weight-400 mb-0 text-white">Hey! <?php echo $row->fname;?> </h5>
              <span class="text-sm text-white opacity-8">Welcome To DevLan Platform!</span>
            </div>
          </div>
        </div>
        <div class="row justify-content-between align-items-center">
              <!-- Page title + Go Back button -->
              <div class="d-inline-block">
                  <h5 class="h4 d-inline-block font-weight-400 mb-0 text-white">Dashboard / <b>Network Topologies</b></h5>
              </div>
              
           </div>
        <div class="row">
        <!-- Page title + Go Back button -->
        
          
          <div class="col-xl-4 col-md-6">
            <div class="card card-fluid">
              
            </div>
          </div>
        </div>

        
        <div class="row">
        <div class="card-deck">
        <!--GET ALL PROJECTS IN A CERTAIN ORDER--->
            <?php
                        //$user_id=$_SESSION['user_id'];
                        $ret="SELECT * FROM projects where project_category= 'Networking Topologies' ";
                        $stmt= $mysqli->prepare($ret) ;
                        //$stmt->bind_param('i',$user_id);
                        $stmt->execute() ;//ok
                        $res=$stmt->get_result();
                        $cnt=1;
                        while($row=$res->fetch_object())
                            {
                            ?>
                             <div class="card text-center">
                                
                                <div class="card-body">
                                  <h5 class="card-title"><?php echo $row->project_name;?></h5>
                                  <p class="card-text"><?php echo $row->project_desc;?></p>
                                  <a href="projects/<?php echo $row->project_files;?>" class="btn btn-outline-success">Dowload</a>
                                </div>
                              </div>
              <?php }?>   
          
        </div>
      </div>

     <!--Footer-->
     <?php include("_partials/footer.php");?>
  <!--/footer-->
  <!-- Scripts -->
  <!-- Core JS - includes jquery, bootstrap, popper, in-view and sticky-kit -->
  <script src="dist/js/core.js"></script>
  <!-- Page JS -->
  <script src="dist/js/progressbar.min.js"></script>
  <script src="dist/js/apexcharts.min.js"></script>
  <script src="dist/js/moment.min.js"></script>
  <!-- Purpose JS -->
  <script src="dist/js/devlan.js"></script>


</body>
          <?php }}?>


</html>

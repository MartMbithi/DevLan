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
                <form class="omnisearch-form">
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
        <div class="row">
          <div class="col-xl-8 col-md-6">
            <div class="card card-fluid">
              <div class="card-header">
                <h6 class="mb-0">Engagement</h6>
              </div>
              <div class="card-body">
                <!-- Chart -->
                <div id="apex-engagement" data-color="primary" data-height="280"></div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-md-6">
            <div class="card card-fluid">
              <div class="card-body text-center d-flex flex-column justify-content-center">
                <h5 class="mb-4">My Contribution</h5>
                <div class="progress-circle progress-lg mx-auto" id="progress-5" data-progress="50" data-text="98" data-textclass="h1" data-color="success"></div>
                <div class="d-flex mt-4">
                  <div class="col">
                    <span class="d-block badge badge-dot badge-lg h6">
                      <i class="bg-primary"></i>Topologies
                    </span>
                    <span class="d-block badge badge-dot badge-lg h6">
                      <i class="bg-success"></i>Scripts
                    </span>
                  </div>
                  <div class="col">
                    <span class="d-block badge badge-dot badge-lg h6">
                      <i class="bg-warning"></i>Web Apps
                    </span>
                    <span class="d-block badge badge-dot badge-lg h6">
                      <i class="bg-primary"></i>Framework Apps
                    </span>
                  </div>
                </div>
                <a href="user_own_projects.php" class="btn btn-block btn-secondary mt-auto">Open My Projects</a>
              </div>
            </div>
          </div>
        </div>

        
        <div class="row">
        <div class="card-deck">
        <div class="card">
          <img src="..." class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Featured Projects</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          </div>
          <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
          </div>
        </div>    
          
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

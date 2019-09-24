<!DOCTYPE html>
<html lang="en">


<?php include ('_partials/head.php');?>
<body class="application application-offset">
<!-- Chat modal -->
<!-- Customizer modal -->

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
        <!-- Omnisearch -->
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
                                    <a class="list-link" href="user_network_topologies_projects.php">
                                        <i class="fa fa-search"></i>
                                        <span>Networking Projects</span> Topologies
                                    </a>
                                </li>
                                <li>
                                    <a class="list-link" href="user_web_application_projects.php">
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
        <!-- Page content -->
        <div class="page-content">
            <!-- Page title -->
            <div class="page-title">
             <!-- Profile Update   Code -->
             <?php
                                 if(isset($_POST['create_Project']))
                                 {
                                     $project_name=$_POST['project_name'];
                                     $project_desc=$_POST['project_desc'];
                                     $project_category=$_POST['project_category'];
                                     $user_id=$_SESSION['user_id'];
                                     $user_email=$_POST['user_email'];
                                     $date_created=($_POST['date_created']);
                                    // $date_updated=$_POST['date_updated'];
                                     $project_files=$_FILES["project_files"]["name"];
                                     move_uploaded_file($_FILES["project_files"]["tmp_name"],"../dashboard/projects/".$_FILES["project_files"]["name"]);
                                                       
                                 //sql to inset the values to the database
                                     $query="insert into projects (project_name, project_desc, project_category, user_id, user_email, date_created,  project_files) values(?,?,?,?,?,?,?)";
                                     $stmt = $mysqli->prepare($query);
                                     //bind the submitted values with the matching columns in the database.
                                     $rc=$stmt->bind_param('sssssss', $project_name, $project_desc, $project_category, $user_id, $user_email, $date_created,  $project_files);
                                     $stmt->execute();
                   
                                     
                                     $msg = "<i class='fa fa-grin-hearts'></i> Success Project Uploaded!";
                                     echo 
                                                     '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                                       <strong>'.$msg.'</strong>
                                                         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                           <span aria-hidden="true">&times;</span>
                                                         </button>
                                                     </div>';
                                     
                                 }
                   
                                 ?>
                <div class="row justify-content-between align-items-center">
                    <div class="col-md-6 d-flex align-items-center justify-content-between justify-content-md-start mb-3 mb-md-0">
                        <!-- Page title + Go Back button -->
                        <div class="d-inline-block">
                            <h5 class="h4 d-inline-block font-weight-400 mb-0 text-white">Dashboard / <b>Create Project</b></h5>
                        </div>
                       
                    </div>
                    <div class="col-md-6 d-flex align-items-center justify-content-between justify-content-md-end">
                    </div>
                </div>
            </div>
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

                <div class="col-lg-12 order-lg-1">
                    <div class="card">
                        <div class="card-body">
                            <form method="POST"  enctype="multipart/form-data" >
                                <!-- General information -->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Project name</label>
                                            <input class="form-control" name="project_name" required  type="text" placeholder="Name Your Project">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Project Category</label>
                                            <select id="project_category" name="project_category" class="form-control">
                                                <option selected>Project Categories</option>
                                                <option>Networking Topologies</option>
                                                <option>Networking Scripts</option>
                                                <option>Web Apps</option>
                                                <option>Framework Web Apps</option>
                                                
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <hr />

                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <div class="form-group">
                                                <label class="form-control-label">Project Description</label>
                                                <textarea class="form-control" name="project_desc" placeholder="Tell us a few words about your project" rows="3"></textarea>
                                                <small class="form-text text-muted mt-2">You can @mention other users and organizations to link to them to your project</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-control-label">Your Email</label>
                                            <input class="form-control" name="user_email" type="email" value="<?php echo $row->email;?>" placeholder="name@exmaple.com">
                                        </div>
                                    </div>
                                </div>
                                
                                <hr />
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Date Project Created</label>
                                            <input class="form-control" name="date_created" type="text" value="<?php echo date('D M Y');?>" placeholder="Enter Your Username">
                                        </div>
                                    </div>
                                                                
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Project Files</label>
                                            <input class=" btn btn-outline-primary" name="project_files" type="file"  placeholder="Upload Your Profile">
                                            <small class="form-text text-muted mt-2">Please Upload A Zipped/ Compressed Files Of Your Project</small>

                                        </div>
                                    </div>
                                </div>                               
                                <hr />
                                <!-- Save changes buttons -->
                                <button type="submit" name="create_Project" class="btn btn-sm btn-primary rounded-pill">Share Project</button>
                                <button type="button" class="btn btn-link text-muted">Cancel</button>
                            </form>
                        </div>
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
        <script src="dist/js/fullcalendar.min.js"></script>
        <!-- Purpose JS -->
        <script src="dist/js/devlan.js"></script>

</body>


</html>

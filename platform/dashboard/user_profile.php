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
        <!-- Page content -->
        <div class="page-content">
            <!-- Page title -->
            <div class="page-title">
             <!-- Profile Update   Code -->
             <?php
                                if(isset($_POST['update_profile']))
                            {
                                $id=$_SESSION['user_id'];
                                $fname=$_POST['fname'];
                                $lname=$_POST['lname'];
                                //$id_no=$_POST['id_no'];
                                $email=$_POST['email'];
                                $username=$_POST['username'];
                                $password=sha1($_POST['password']);
                                $dpic=$_FILES["dpic"]["name"];
                                move_uploaded_file($_FILES["dpic"]["tmp_name"],"dist/img/profiles/".$_FILES["dpic"]["name"]);
                                $bio=$_POST['bio'];
                                $skill=$_POST['skill'];
                                

                            //sql to inset the values to the database
                                $query="update users set  fname=?, lname=?, email=?, username=?, password=?, dpic=?, bio=?, skill=?  where user_id=?";
                                $stmt = $mysqli->prepare($query);
                                //bind the submitted values with the matching columns in the database.
                                $rc=$stmt->bind_param('ssssssssi',$fname, $lname, $email, $username, $password, $dpic, $bio, $skill, $id);
                                $stmt->execute();
                                //if binding is successful, then indicate that a new value has been added.
                                $msg = "<i class='fa fa-grin-hearts'></i> Success Your Account Has Been Updated!";

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
                            <h5 class="h4 d-inline-block font-weight-400 mb-0 text-white">Dashboard / <b>Profile</b></h5>
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
                    <!-- Change avatar -->
                    <div class="card bg-gradient-dark hover-shadow-lg border-0">
                        <div class="card-body py-3">
                            <div class="row row-grid align-items-center">
                                <div class="col-lg-8">
                                    <div class="media align-items-center">
                                        <a href="#" class="avatar avatar-lg rounded-circle mr-3">
                                            <img alt="Dpic" src="../dashboard/dist/img/profiles/<?php echo $row->dpic;?>">
                                        </a>
                                        <div class="media-body">
                                            <h5 class="text-white mb-0"><?php echo $row->fname;?> <?php echo $row->lname;?></h5>
                                            
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <form method="POST"  enctype="multipart/form-data" >
                                <!-- General information -->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">First name</label>
                                            <input class="form-control" name="fname" required value="<?php echo $row->fname;?>" type="text" placeholder="Enter your first name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Last name</label>
                                            <input class="form-control" name="lname" type="text" value="<?php echo $row->lname;?>" placeholder="Also your last name">
                                        </div>
                                    </div>
                                </div>

                                <hr />
                                
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-control-label">Email</label>
                                            <input class="form-control" name="email" type="email" value="<?php echo $row->email;?>" placeholder="name@exmaple.com">
                                        </div>
                                    </div>
                                </div>
                                
                               
                                <!-- Username -->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Username</label>
                                            <input class="form-control" name="username" type="text" value="<?php echo $row->username;?>" placeholder="Enter Your Username">
                                        </div>
                                    </div>
                                                                
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Profile Picture</label>
                                            <input class=" btn btn-primary" name="dpic" type="file"  placeholder="Upload Your Avatar">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Password</label>
                                            <input class="form-control" name="password" type="password" placeholder="Password">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Confirm Password</label>
                                            <input class="form-control"  type="password" placeholder="Confirm Password">
                                        </div>
                                    </div>
                                    
                                </div>

                                <hr />
                                <!-- Description -->
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <div class="form-group">
                                                <label class="form-control-label">Bio</label>
                                                <textarea class="form-control" name="bio" placeholder="Tell us a few words about yourself" rows="3"><?php echo $row->bio;?></textarea>
                                                <small class="form-text text-muted mt-2">You can @mention other users and organizations to link to them.</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-4">
                                    <div class="col">
                                        <div class="form-group">
                                            <label class="form-control-label mb-3">Skills</label>
                                            <input type="text" name="skill" class="form-control" value="<?php echo $row->skill;?>" placeholder="Your Skills"  />
                                        </div>
                                    </div>
                                </div>
                                <hr />
                                <!-- Save changes buttons -->
                                <button type="submit" name="update_profile" class="btn btn-sm btn-primary rounded-pill">Save changes</button>
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

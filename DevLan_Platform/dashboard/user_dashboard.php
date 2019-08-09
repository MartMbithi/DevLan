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
    <div class="sidenav" id="sidenav-main">
      <!-- Sidenav header -->
      <div class="sidenav-header d-flex align-items-center">
        <a class="navbar-brand" href="https://preview.webpixels.io/purpose-application-ui-kit-v1.0.0/index.html">
          <img src="https://martdev.info/devlan/public/assets/img/logo.png" class="navbar-brand-img" alt="DevLan Logo">
        </a>
        <div class="ml-auto">
          <!-- Sidenav toggler -->
          <div class="sidenav-toggler sidenav-toggler-dark d-md-none" data-action="sidenav-unpin" data-target="#sidenav-main">
            <div class="sidenav-toggler-inner">
              <i class="sidenav-toggler-line bg-white"></i>
              <i class="sidenav-toggler-line bg-white"></i>
              <i class="sidenav-toggler-line bg-white"></i>
            </div>
          </div>
        </div>
      </div>
      <!-- User mini profile -->
      <div class="sidenav-user d-flex flex-column align-items-center justify-content-between text-center">
        <!-- Avatar -->
        <div>
          <a href="#" class="avatar rounded-circle avatar-xl">
            <img alt="Image placeholder" src="https://preview.webpixels.io/purpose-application-ui-kit-v1.0.0/assets/img/theme/light/team-1-800x800.jpg" class="">
          </a>
          <div class="mt-4">
            <h5 class="mb-0 text-white"><?php echo $row->fname;?> <?php echo $row->lname;?></h5>
            <span class="d-block text-sm text-white opacity-8 mb-3"><?php echo $row->bio;?></span>
            <a href="#" class="btn btn-sm btn-white btn-icon rounded-pill shadow hover-translate-y-n3">
              <span class="btn-inner--icon"><i class="fa fa-coins"></i></span>
              <span class="btn-inner--text">$2.300</span>
            </a>
          </div>
        </div>
        <!-- User info -->
        <!-- Actions -->
        <div class="w-100 mt-4 actions d-flex justify-content-between">
          
          <a href="#modal-chat" class="action-item action-item-lg text-white" data-toggle="modal">
            <i class="fa fa-comment-alt"></i>
          </a>
          <a href="shop/invoices.html" class="action-item action-item-lg text-white pr-0">
            <i class="fa fa-receipt"></i>
          </a>
        </div>
      </div>

      <!-- Application nav -->
      <div class="nav-application clearfix">
        <a href="home.html" class="btn btn-square text-sm active">
          <span class="btn-inner--icon d-block"><i class="fa fa-home fa-2x"></i></span>
          <span class="btn-inner--icon d-block pt-2">Home</span>
        </a>
        <a href="project/card-listing.html" class="btn btn-square text-sm">
          <span class="btn-inner--icon d-block"><i class="fa fa-projects fa-2x"></i></span>
          <span class="btn-inner--icon d-block pt-2">Projects</span>
        </a>
        <a href="task/table-listing.html" class="btn btn-square text-sm">
          <span class="btn-inner--icon d-block"><i class="fa fa-tasks fa-2x"></i></span>
          <span class="btn-inner--icon d-block pt-2">Tasks</span>
        </a>
        <a href="task/kanban-board.html" class="btn btn-square text-sm">
          <span class="btn-inner--icon d-block"><i class="fa fa-columns fa-2x"></i></span>
          <span class="btn-inner--icon d-block pt-2">Kanban</span>
        </a>
        <a href="user/card-listing.html" class="btn btn-square text-sm">
          <span class="btn-inner--icon d-block"><i class="fa fa-users fa-2x"></i></span>
          <span class="btn-inner--icon d-block pt-2">Users</span>
        </a>
        <a href="user/profile.html" class="btn btn-square text-sm">
          <span class="btn-inner--icon d-block"><i class="fa fa-user fa-2x"></i></span>
          <span class="btn-inner--icon d-block pt-2">Profile</span>
        </a>
        <a href="shop/invoices.html" class="btn btn-square text-sm">
          <span class="btn-inner--icon d-block"><i class="fa fa-receipt fa-2x"></i></span>
          <span class="btn-inner--icon d-block pt-2">Invoices</span>
        </a>
        <a href="widgets.html" class="btn btn-square text-sm">
          <span class="btn-inner--icon d-block"><i class="fa fa-cogs fa-2x"></i></span>
          <span class="btn-inner--icon d-block pt-2">Widgets</span>
        </a>
      </div>
      <!-- Misc area -->
      <div class="card bg-gradient-warning">
        <div class="card-body">
          <h5 class="text-white">Hello, Friend!</h5>
          <p class="text-white mb-4">
            Why not start using Purpose Application UI Kit and create something amazing today?
          </p>
          <a href="https://themes.getbootstrap.com/product/purpose-application-ui-kit/" class="btn btn-sm btn-block btn-white rounded-pill" target="_blank">Get started</a>
        </div>
      </div>
    </div>
    <!-- Content -->
    <div class="main-content position-relative">
      <!-- Main nav -->
      <nav class="navbar navbar-main navbar-expand-lg navbar-dark bg-primary navbar-border" id="navbar-main">
        <div class="container-fluid">
          <!-- Brand + Toggler (for mobile devices) -->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-main-collapse" aria-controls="navbar-main-collapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <!-- User's navbar -->
          <div class="navbar-user d-lg-none ml-auto">
            <ul class="navbar-nav flex-row align-items-center">
              <li class="nav-item">
                <a href="#" class="nav-link nav-link-icon sidenav-toggler" data-action="sidenav-pin" data-target="#sidenav-main"><i class="fa fa-bars"></i></a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link nav-link-icon" data-action="omnisearch-open" data-target="#omnisearch"><i class="fa fa-search"></i></a>
              </li>
              <li class="nav-item dropdown dropdown-animate">
                <a class="nav-link nav-link-icon" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-bell"></i></a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg dropdown-menu-arrow p-0">
                  <div class="py-3 px-3">
                    <h5 class="heading h6 mb-0">Notifications</h5>
                  </div>
                  <div class="list-group list-group-flush">
                    <a href="#" class="list-group-item list-group-item-action">
                      <div class="d-flex align-items-center" data-toggle="tooltip" data-placement="right" data-title="2 hrs ago">
                        <div>
                          <span class="avatar bg-primary text-white rounded-circle">AM</span>
                        </div>
                        <div class="flex-fill ml-3">
                          <div class="h6 text-sm mb-0">Alex Michael <small class="float-right text-muted">2 hrs ago</small></div>
                          <p class="text-sm lh-140 mb-0">
                            Some quick example text to build on the card title.
                          </p>
                        </div>
                      </div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                      <div class="d-flex align-items-center" data-toggle="tooltip" data-placement="right" data-title="3 hrs ago">
                        <div>
                          <span class="avatar bg-warning text-white rounded-circle">SW</span>
                        </div>
                        <div class="flex-fill ml-3">
                          <div class="h6 text-sm mb-0">Sandra Wayne <small class="float-right text-muted">3 hrs ago</small></div>
                          <p class="text-sm lh-140 mb-0">
                            Some quick example text to build on the card title.
                          </p>
                        </div>
                      </div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                      <div class="d-flex align-items-center" data-toggle="tooltip" data-placement="right" data-title="5 hrs ago">
                        <div>
                          <span class="avatar bg-info text-white rounded-circle">JM</span>
                        </div>
                        <div class="flex-fill ml-3">
                          <div class="h6 text-sm mb-0">Jason Miller <small class="float-right text-muted">5 hrs ago</small></div>
                          <p class="text-sm lh-140 mb-0">
                            Some quick example text to build on the card title.
                          </p>
                        </div>
                      </div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                      <div class="d-flex align-items-center" data-toggle="tooltip" data-placement="right" data-title="2 hrs ago">
                        <div>
                          <span class="avatar bg-dark text-white rounded-circle">MJ</span>
                        </div>
                        <div class="flex-fill ml-3">
                          <div class="h6 text-sm mb-0">Mike Thomson <small class="float-right text-muted">2 hrs ago</small></div>
                          <p class="text-sm lh-140 mb-0">
                            Some quick example text to build on the card title.
                          </p>
                        </div>
                      </div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                      <div class="d-flex align-items-center" data-toggle="tooltip" data-placement="right" data-title="3 hrs ago">
                        <div>
                          <span class="avatar bg-primary text-white rounded-circle">RN</span>
                        </div>
                        <div class="flex-fill ml-3">
                          <div class="h6 text-sm mb-0">Richard Nixon <small class="float-right text-muted">3 hrs ago</small></div>
                          <p class="text-sm lh-140 mb-0">
                            Some quick example text to build on the card title.
                          </p>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="py-3 text-center">
                    <a href="#" class="link link-sm link--style-3">View all notifications</a>
                  </div>
                </div>
              </li>
              <li class="nav-item dropdown dropdown-animate">
                <a class="nav-link pr-lg-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="avatar avatar-sm rounded-circle">
                    <img alt="Image placeholder" src="https://preview.webpixels.io/purpose-application-ui-kit-v1.0.0/assets/img/theme/light/team-4-800x800.jpg">
                  </span>
                </a>
                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right dropdown-menu-arrow">
                  <h6 class="dropdown-header px-0">Hi, Heather!</h6>
                  <a href="user/profile.html" class="dropdown-item">
                    <i class="fa fa-user"></i>
                    <span>My profile</span>
                  </a>
                  <a href="account/settings.html" class="dropdown-item">
                    <i class="fa fa-cog"></i>
                    <span>Settings</span>
                  </a>
                  <a href="account/billing.html" class="dropdown-item">
                    <i class="fa fa-credit-card"></i>
                    <span>Billing</span>
                  </a>
                  <a href="shop/orders.html" class="dropdown-item">
                    <i class="fa fa-shopping-basket"></i>
                    <span>Orders</span>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a href="authentication/login.html" class="dropdown-item">
                    <i class="fa fa-sign-out-alt"></i>
                    <span>Logout</span>
                  </a>
                </div>
              </li>
            </ul>
          </div>

         <?php include("_partials/navbar.php");?>

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
                      <span>macbook pro</span> in Laptops
                    </a>
                  </li>
                  <li>
                    <a class="list-link" href="#">
                      <i class="fa fa-search"></i>
                      <span>iphone 8</span> in Smartphones
                    </a>
                  </li>
                  <li>
                    <a class="list-link" href="#">
                      <i class="fa fa-search"></i>
                      <span>macbook pro</span> in Laptops
                    </a>
                  </li>
                  <li>
                    <a class="list-link" href="#">
                      <i class="fa fa-search"></i>
                      <span>beats pro solo 3</span> in Headphones
                    </a>
                  </li>
                  <li>
                    <a class="list-link" href="#">
                      <i class="fa fa-search"></i>
                      <span>smasung galaxy 10</span> in Phones
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Page content -->
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
                <h5 class="mb-4">Emails sent</h5>
                <div class="progress-circle progress-lg mx-auto" id="progress-5" data-progress="50" data-text="98" data-textclass="h1" data-color="warning"></div>
                <div class="d-flex mt-4">
                  <div class="col">
                    <span class="d-block badge badge-dot badge-lg h6">
                      <i class="bg-danger"></i>30 not sent
                    </span>
                    <span class="d-block badge badge-dot badge-lg h6">
                      <i class="bg-success"></i>68 success
                    </span>
                  </div>
                  <div class="col">
                    <span class="d-block badge badge-dot badge-lg h6">
                      <i class="bg-warning"></i>38 opened
                    </span>
                    <span class="d-block badge badge-dot badge-lg h6">
                      <i class="bg-danger"></i>SMTP error
                    </span>
                  </div>
                </div>
                <a href="#" class="btn btn-block btn-secondary mt-auto">Open insights</a>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-sm-6">
            <div class="card card-fluid">
              <div class="card-body">
                <div class="row align-items-center mb-4">
                  <div class="col-auto">
                    <div class="progress-circle progress-sm" id="progress-1" data-progress="90" data-color="primary"></div>
                  </div>
                  <div class="col">
                    <a href="#!" class="d-block h6 mb-0">98 tasks solved</a>
                    <a href="#" class="text-sm text-muted">Purpose Website UI</a>
                  </div>
                </div>
                <div class="row align-items-center mb-4">
                  <div class="col-auto">
                    <div class="progress-circle progress-sm" id="progress-2" data-progress="40" data-color="warning"></div>
                  </div>
                  <div class="col">
                    <a href="#!" class="d-block h6 mb-0">13 tasks solved</a>
                    <a href="#" class="text-sm text-muted">Webpixels website</a>
                  </div>
                </div>
                <div class="row align-items-center">
                  <div class="col-auto">
                    <div class="progress-circle progress-sm" id="progress-3" data-progress="60" data-color="info"></div>
                  </div>
                  <div class="col">
                    <a href="#!" class="d-block h6 mb-0">23 tasks solved</a>
                    <a href="#" class="text-sm text-muted">Purpose Dashboard UI</a>
                  </div>
                </div>
                <a href="#" class="btn btn-sm btn-block btn-secondary mt-5">Open insights</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6">
            <div class="card card-fluid">
              <div class="card-body text-center d-flex flex-column justify-content-center">
                <h5 class="mb-4">Congratulations!</h5>
                <div class="progress-circle progress-lg mx-auto" id="progress-4" data-progress="78" data-text="23" data-textclass="h1" data-color="primary"></div>
                <p class="mt-4 mb-0">
                  Github issues were closed this week.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card card-fluid bg-gradient-dark border-0">
              <div class="card-header border-0 pb-0">
                <h6 class="text-white mb-0"><span class="text-danger mr-2">●</span>Project at risk</h6>
              </div>
              <div class="card-body text-center">
                <!-- Avatar -->
                <a href="#" class="avatar avatar-lg rounded-circle">
                  <img alt="Image placeholder" src="https://preview.webpixels.io/purpose-application-ui-kit-v1.0.0/assets/img/theme/light/brand-avatar-1.png">
                </a>
                <!-- Title -->
                <h5 class="h6 mt-4 mb-0 text-white">Website redesign</h5>
                <!-- Actions -->
                <div class="actions actions-dark d-flex justify-content-between px-4 mt-4">
                  <a href="#" class="action-item">
                    <i class="fa fa-chart-pie"></i>
                  </a>
                  <a href="#" class="action-item">
                    <i class="fa fa-user"></i>
                  </a>
                  <a href="#" class="action-item">
                    <i class="fa fa-info-circle"></i>
                  </a>
                </div>
              </div>
              <div class="card-body">
                <div class="row justify-content-between align-items-center">
                  <div class="col-6">
                    <div style="max-width: 120px;">
                      <div class="spark-chart" data-toggle="spark-chart" data-type="line" data-height="50" data-color="danger" data-dataset="[42, 55, 19, 16, 84, 24, 10, 11, 93, 15, 81]"></div>
                    </div>
                  </div>
                  <div class="col-auto text-center">
                    <span class="d-block h4 mb-0 text-white">8</span>
                    <span class="d-block text-sm text-white opacity-8">Days delay</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xl-7 d-sm-flex flex-sm-column">
            <div class="row flex-sm-fill">
              <div class="col-sm-4">
                <div class="card card-fluid">
                  <div class="card-body text-center">
                    <div class="avatar-parent-child">
                      <a href="#" class="avatar avatar-lg rounded-circle">
                        <img alt="Image placeholder" src="https://preview.webpixels.io/purpose-application-ui-kit-v1.0.0/assets/img/theme/light/team-1-800x800.jpg">
                      </a>
                      <span class="avatar-child avatar-badge bg-success"></span>
                    </div>
                    <h5 class="h6 mt-4 mb-0">John Sullivan</h5>
                    <a href="#" class="d-block text-sm text-muted mb-3">@john.sullivan</a>
                    <div class="actions d-flex justify-content-between px-4">
                      <a href="#" class="action-item">
                        <i class="fa fa-envelope"></i>
                      </a>
                      <a href="#" class="action-item">
                        <i class="fa fa-phone"></i>
                      </a>
                      <a href="#" class="action-item">
                        <i class="fa fa-share-alt"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="card card-fluid">
                  <div class="card-body text-center">
                    <div class="avatar-parent-child">
                      <a href="#" class="avatar avatar-lg rounded-circle">
                        <img alt="Image placeholder" src="https://preview.webpixels.io/purpose-application-ui-kit-v1.0.0/assets/img/theme/light/team-2-800x800.jpg">
                      </a>
                      <span class="avatar-child avatar-badge bg-warning"></span>
                    </div>
                    <h5 class="h6 mt-4 mb-0">Heather Wright</h5>
                    <a href="#" class="d-block text-sm text-muted mb-3">@heather.wright</a>
                    <div class="actions d-flex justify-content-between px-4">
                      <a href="#" class="action-item">
                        <i class="fa fa-envelope"></i>
                      </a>
                      <a href="#" class="action-item">
                        <i class="fa fa-phone"></i>
                      </a>
                      <a href="#" class="action-item">
                        <i class="fa fa-share-alt"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="card card-fluid">
                  <div class="card-body text-center">
                    <div class="avatar-parent-child">
                      <a href="#" class="avatar avatar-lg rounded-circle">
                        <img alt="Image placeholder" src="https://preview.webpixels.io/purpose-application-ui-kit-v1.0.0/assets/img/theme/light/team-3-800x800.jpg">
                      </a>
                      <span class="avatar-child avatar-badge bg-danger"></span>
                    </div>
                    <h5 class="h6 mt-4 mb-0">James Lewis</h5>
                    <a href="#" class="d-block text-sm text-muted mb-3">@james.lewis</a>
                    <div class="actions d-flex justify-content-between px-4">
                      <a href="#" class="action-item">
                        <i class="fa fa-envelope"></i>
                      </a>
                      <a href="#" class="action-item">
                        <i class="fa fa-phone"></i>
                      </a>
                      <a href="#" class="action-item">
                        <i class="fa fa-share-alt"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row flex-sm-fill">
              <div class="col-sm-4">
                <div class="card card-fluid">
                  <div class="card-body text-center">
                    <div class="avatar-parent-child">
                      <a href="#" class="avatar avatar-lg rounded-circle">
                        <img alt="Image placeholder" src="https://preview.webpixels.io/purpose-application-ui-kit-v1.0.0/assets/img/theme/light/team-1-800x800.jpg">
                      </a>
                      <span class="avatar-child avatar-badge bg-success"></span>
                    </div>
                    <h5 class="h6 mt-4 mb-0">John Snow</h5>
                    <a href="#" class="d-block text-sm text-muted mb-3">@john.snow</a>
                    <div class="actions d-flex justify-content-between px-4">
                      <a href="#" class="action-item">
                        <i class="fa fa-envelope"></i>
                      </a>
                      <a href="#" class="action-item">
                        <i class="fa fa-phone"></i>
                      </a>
                      <a href="#" class="action-item">
                        <i class="fa fa-share-alt"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="card card-fluid">
                  <div class="card-body text-center">
                    <div class="avatar-parent-child">
                      <a href="#" class="avatar avatar-lg rounded-circle">
                        <img alt="Image placeholder" src="https://preview.webpixels.io/purpose-application-ui-kit-v1.0.0/assets/img/theme/light/team-2-800x800.jpg">
                      </a>
                      <span class="avatar-child avatar-badge bg-success"></span>
                    </div>
                    <h5 class="h6 mt-4 mb-0">John Michael</h5>
                    <a href="#" class="d-block text-sm text-muted mb-3">@john.michael</a>
                    <div class="actions d-flex justify-content-between px-4">
                      <a href="#" class="action-item">
                        <i class="fa fa-envelope"></i>
                      </a>
                      <a href="#" class="action-item">
                        <i class="fa fa-phone"></i>
                      </a>
                      <a href="#" class="action-item">
                        <i class="fa fa-share-alt"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="card card-fluid">
                  <div class="card-body text-center">
                    <div class="avatar-parent-child">
                      <a href="#" class="avatar avatar-lg rounded-circle">
                        <img alt="Image placeholder" src="https://preview.webpixels.io/purpose-application-ui-kit-v1.0.0/assets/img/theme/light/team-3-800x800.jpg">
                      </a>
                      <span class="avatar-child avatar-badge bg-warning"></span>
                    </div>
                    <h5 class="h6 mt-4 mb-0">Monroe Parker</h5>
                    <a href="#" class="d-block text-sm text-muted mb-3">@monroe.parker</a>
                    <div class="actions d-flex justify-content-between px-4">
                      <a href="#" class="action-item">
                        <i class="fa fa-envelope"></i>
                      </a>
                      <a href="#" class="action-item">
                        <i class="fa fa-phone"></i>
                      </a>
                      <a href="#" class="action-item">
                        <i class="fa fa-share-alt"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-5">
            <!-- Calendar -->
            <div class="card widget-calendar">
              <div class="card-header">
                <div class="text-sm text-muted mb-1 widget-calendar-year"></div>
                <div class="h5 mb-0 widget-calendar-day"></div>
              </div>
              <!-- Calendar -->
              <div data-toggle="widget-calendar"></div>
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
  <script src="dist/js/fullcalendar.min.js"></script>
  <!-- Purpose JS -->
  <script src="dist/js/devlan.js"></script>


</body>
          <?php }}?>


</html>

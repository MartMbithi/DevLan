 <!-- Navbar nav -->
 <!--PHP CODE TO GET UserDetails USING ID SESSION-->
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
 <div class="collapse navbar-collapse navbar-collapse-fade" id="navbar-main-collapse">
            <ul class="navbar-nav align-items-lg-center">
              <!-- Overview  -->

              <li class="border-top opacity-2 my-2"></li>
              <!-- Home  -->
              <li class="nav-item ">
                <a class="nav-link pl-lg-0" href="user_dashboard.php">
                 <?php echo $row->username;?>'s Dashboard
                </a>
              </li>


              <li class="border-top opacity-2 my-2"></li>
              <!-- Docs menu -->
              <li class="nav-item d-lg-none">
                <a class="nav-link" >

                </a>
              </li>
              <li class="nav-item d-lg-none">
                <a class="nav-link">

                </a>
              </li>
              <li class="nav-item d-lg-none">
                <a class="nav-link" >

                </a>
              </li>
            </ul><!-- Right menu -->
            <ul class="navbar-nav ml-lg-auto align-items-center d-none d-lg-flex">
              <li class="nav-item">
                <a href="#" class="nav-link nav-link-icon sidenav-toggler" data-action="sidenav-pin" data-target="#sidenav-main"><i class="fa fa-bars"></i></a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link nav-link-icon" data-action="omnisearch-open" data-target="#omnisearch"><i class="fa fa-search"></i></a>
              </li>
              <li class="nav-item">
                <a href="#modal-chat" class="nav-link nav-link-icon" data-toggle="modal"><i class="fa fa-comment-alt"></i></a>
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
                  </div>
                  <div class="py-3 text-center">
                    <a href="#" class="link link-sm link--style-3">View all notifications</a>
                  </div>
                </div>
              </li>
              <li class="nav-item dropdown dropdown-animate">
                <a class="nav-link pr-lg-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <div class="media media-pill align-items-center">
                    <span class="avatar rounded-square">
                      <img alt="" src="dist/img/profiles/<?php echo $row->dpic;?>">
                    </span>
                    <div class="ml-2 d-none d-lg-block">
                      <span class="mb-0 text-sm  font-weight-bold"><?php echo $row->fname;?> <?php echo $row->lname;?></span>
                    </div>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right dropdown-menu-arrow">
                  <h6 class="dropdown-header px-0">Hi, <?php echo $row->username;?></h6>
                  <a href="user_profile.php" class="dropdown-item">
                    <i class="fa fa-user"></i>
                    <span>My profile</span>
                  </a>
                  <a href="#!" class="dropdown-item">
                    <i class="fa fa-cog"></i>
                    <span>Settings</span>
                  </a>

                  <div class="dropdown-divider"></div>
                  <a href="_partials/logout.php" class="dropdown-item">
                    <i class="fa fa-sign-out-alt"></i>
                    <span>Logout</span>
                  </a>
                </div>
              </li>
            </ul>
          </div>

          <?php }?>

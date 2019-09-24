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
  <nav class="navbar navbar-expand fixed-top be-top-header">
        <div class="container-fluid">
          <div class="be-navbar-header"><a class="navbar-brand" href="devlan_pages_dashboard.php"></a>
          </div>
          <div class="page-title"><span>Hello <?php echo $row->username;?>! This is Your Dashboard</span></div>
          <div class="be-right-navbar">
            <ul class="nav navbar-nav float-right be-user-nav">
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-expanded="false"><img src="assets/img/<?php echo $row->dpic;?>" alt="Avatar"><span class="user-name"><?php echo $row->fname;?> <?php echo $row->lname;?></span></a>
                <div class="dropdown-menu" role="menu">     
                  <div class="user-info">
                    <div class="user-name"><?php echo $row->username;?></div>
                    <div class="user-position online">Active</div>
                  </div>
                    <a class="dropdown-item" href="devlan_pages_profile.php"><span class="icon mdi mdi-face"></span>Profile</a>
                    <a class="dropdown-item" href="devlan_pages_update_profile.php"><span class="icon mdi mdi-face"></span>Update Profile</a>
                   <!-- <a class="dropdown-item" href="devlan_pages_create_project.php"><span class="icon mdi mdi-settings"></span>Settings</a>-->
                    <a class="dropdown-item" href="devlan_pages_logout.php"><span class="icon mdi mdi-power"></span>Logout</a>
                </div>
              </li>
            </ul>
            
            <ul class="nav navbar-nav float-right be-icons-nav">
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-expanded="false"><span class="icon mdi mdi-apps"></span></a>
                <ul class="dropdown-menu be-connections">
                  <li>
                    <div class="list">
                      <div class="content">
                        <div class="row">
                          <div class="col"><a class="connection-item" href="https://github.com/MartMbithi/DevLan" target = "_blank"><img src="assets/img/github.png" alt="Github"><span>GitHub</span></a></div>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      
            <?php }?>
          
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
<div class="sidenav" id="sidenav-main">
    <!-- Sidenav header -->
    <div class="sidenav-header d-flex align-items-center">
        <a class="navbar-brand" href="user_dashboard.php">
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
            <a href="#" class="avatar rectangle avatar-xl">
                <img alt="Profile Picture" src="../dashboard/dist/img/profiles/<?php echo $row->dpic;?>" class="">
            </a>
            <div class="mt-4">
                <h5 class="mb-0 text-white"><?php echo $row->fname;?> <?php echo $row->lname;?></h5>
                <span class="d-block text-sm text-white opacity-8 mb-3"><?php echo $row->skill;?></span>
                <!--
                <a href="#" class="btn btn-sm btn-white btn-icon rounded-pill shadow hover-translate-y-n3">
                    <span class="btn-inner--icon"><i class="fa fa-coins"></i></span>
                    <span class="btn-inner--text"></span>-->
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
        <a href="user_dashboard.php" class="btn btn-square text-sm active">
            <span class="btn-inner--icon d-block"><i class="fa fa-home fa-2x"></i></span>
            <span class="btn-inner--icon d-block pt-2">Home</span>
        </a>

        <a href="user_profile.php" class="btn btn-square text-sm active">
            <span class="btn-inner--icon d-block"><i class="fa fa-user fa-2x"></i></span>
            <span class="btn-inner--icon d-block pt-2">Profile</span>
        </a>


        <a href="user_network_topologies_projects.php" class="btn btn-square text-sm active">
            <span class="btn-inner--icon d-block"><i class="fa fa-connectdevelop fa-2x"></i></span>
            <span class="btn-inner--icon d-block pt-2">Topologies</span>
        </a>

        <a href="user_networking_scripts_projects.php" class="btn btn-square text-sm active">
            <span class="btn-inner--icon d-block"><i class="fa fa-signal fa-2x"></i></span>
            <span class="btn-inner--icon d-block pt-2">Networking Scripts</span>
        </a>

        <a href="user_web_application_projects.php" class="btn btn-square text-sm active">
            <span class="btn-inner--icon d-block"><i class="fa fa-columns fa-2x"></i></span>
            <span class="btn-inner--icon d-block pt-2">Web Apps</span>
        </a>
        <a href="user_framework_web_applications.php" class="btn btn-square text-sm active">
            <span class="btn-inner--icon d-block"><i class="fa fa-qrcode fa-2x"></i></span>
            <span class="btn-inner--icon d-block pt-2">Framework Web Apps</span>
        </a>

        <a href="user_own_projects.php" class="btn btn-square text-sm active">
            <span class="btn-inner--icon d-block"><i class="fa fa-hdd-o fa-2x"></i></span>
            <span class="btn-inner--icon d-block pt-2">Create Project</span>
        </a>

       

        <a href="user_projects_settings.php" class="btn btn-square text-sm active">
            <span class="btn-inner--icon d-block"><i class="fa fa-cogs fa-2x"></i></span>
            <span class="btn-inner--icon d-block pt-2">Settings</span>
        </a>
    </div>
    
</div>
<?php }?>

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
<?php }?>

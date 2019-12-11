<?php
session_start();
include('assets/configs/config.php');
include('assets/configs/checklogin.php');
check_login();
$aid=$_SESSION['admin_id'];
 //delete or remove projects
                    if(isset($_GET['del']))
                    {
                            $id=intval($_GET['del']);
                            $adn="delete from users where user_id=?";
                            $stmt= $mysqli->prepare($adn);
                            $stmt->bind_param('i',$id);
                            $stmt->execute();
                            $stmt->close();	   
                            
                            $msg = "DevLanner De'Throned!";
                            
            
                    }
?>

<!DOCTYPE html>
<html lang="en">
<?php include('assets/_partials/head.php');?>
  <body>
    <div class="be-wrapper be-fixed-sidebar">

      <!--Head Based Navigation bar-->
      <?php include('assets/_partials/navbar.php');?>
      <!--eND OF NAVBAR-->

     <!--Side Bar-->
      <?php include('assets/_partials/sidebar.php');?>
      <!--End of side bar-->
      
      <div class="be-content">
          
        <div class="page-head">
          <h2 class="page-head-title">Manage Users</h2>
          <nav aria-label="breadcrumb" role="navigation">
            <ol class="breadcrumb page-head-nav">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">Manage DevLanners`</li>
            </ol>
          </nav>
        </div>
        <?php if(isset($msg)) 
               {?>
                    <script>
                        setTimeout(function () 
                        { 
                            swal("Success","<?php echo $msg;?>!","success");
                        },
                            100);
                    </script>
                    <!--Trigger a pretty success alert-->

           <?php } ?>
        <div class="main-content container-fluid">
          <div class="row">
            <div class="col-sm-12">
              <div class="card card-table">
                <div class="card-header">Seach Any DevLanner
                
                  <div class="tools dropdown"><span class=""></span><a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"><span class=""></span></a>
                    
                  </div>
                </div>
                <div class="card-body">
                  <table class="table table-striped table-hover table-fw-widget" id="table1">
                    <thead>
                      <tr>
                        <th>DevLanner</th>
                        <th>Email</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                                            
                            $ret="SELECT * FROM `password_resets` where status != 'approved' ";
                            $stmt= $mysqli->prepare($ret) ;
                            //$stmt->bind_param('i',$aid);
                            $stmt->execute() ;//ok
                            $res=$stmt->get_result();
                            $cnt=1;
                            $created_at = date_create($row[0]);
                            while($row=$res->fetch_object())
                                {
                    	?>
                      <tr class="odd gradeX even gradeC odd gradeA ">
                        <td><?php echo $row->user_email;?></td>
                        <td><?php echo $row->username;?></td>
                        <td class="center">
                            <a class="badge badge-success" href='devlan_pages_single_user_request.php?id=<?php echo $row->id;?>'>
                                <i class="mdi mdi-account-badge"></i>
                                    Manage
                            </a>                              
                        </td>
                      </tr>

                    <?php $cnt=$cnt+1; }?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </div>
    <script src="assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="assets/lib/perfect-scrollbar/js/perfect-scrollbar.min.js" type="text/javascript"></script>
    <script src="assets/lib/bootstrap/dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <script src="assets/js/app.js" type="text/javascript"></script>
    <script src="assets/lib/datatables/datatables.net/js/jquery.dataTables.js" type="text/javascript"></script>
    <script src="assets/lib/datatables/datatables.net-bs4/js/dataTables.bootstrap4.js" type="text/javascript"></script>
    <script src="assets/lib/datatables/datatables.net-buttons/js/dataTables.buttons.min.js" type="text/javascript"></script>
    <script src="assets/lib/datatables/datatables.net-buttons/js/buttons.flash.min.js" type="text/javascript"></script>
    <script src="assets/lib/datatables/jszip/jszip.min.js" type="text/javascript"></script>
    <script src="assets/lib/datatables/pdfmake/pdfmake.min.js" type="text/javascript"></script>
    <script src="assets/lib/datatables/pdfmake/vfs_fonts.js" type="text/javascript"></script>
    <script src="assets/lib/datatables/datatables.net-buttons/js/buttons.colVis.min.js" type="text/javascript"></script>
    <script src="assets/lib/datatables/datatables.net-buttons/js/buttons.print.min.js" type="text/javascript"></script>
    <script src="assets/lib/datatables/datatables.net-buttons/js/buttons.html5.min.js" type="text/javascript"></script>
    <script src="assets/lib/datatables/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js" type="text/javascript"></script>
    <script src="assets/lib/datatables/datatables.net-responsive/js/dataTables.responsive.min.js" type="text/javascript"></script>
    <script src="assets/lib/datatables/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function(){
      	//-initialize the javascript
      	App.init();
      	App.dataTables();
      });
    </script>
  </body>

</html>
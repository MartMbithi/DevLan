<?php
session_start();
include('assets/configs/config.php');
include('assets/configs/checklogin.php');
check_login();
$aid=$_SESSION['user_id'];
?>

<!DOCTYPE html>
<html lang="en">
  
<?php include('assets/_partials/head.php');?>
  <body>
    <div class="be-wrapper be-fixed-sidebar">
        
     <!--Side Bar-->
      <?php include('assets/_partials/navbar.php');?>
      <!--End of side bar-->

      <!--Side Bar-->
      <?php include('assets/_partials/sidebar.php');?>
      <!--End of side bar-->

      <div class="be-content">
        <div class="main-content container-fluid">
          <div class="row">
            <div class="col-12 col-lg-6 col-xl-3">
                <div class="widget widget-tile">
                <div class="chart sparkline" ><i class="material-icons">memory</i></div>
                  <div class="data-info">
                  <?php
                                //code for getting all devlan PDF Projects
                                $result ="SELECT count(*) FROM projects where project_category = 'PDF Cheat Sheets' ";
                                $stmt = $mysqli->prepare($result);
                                $stmt->execute();
                                $stmt->bind_result($members);
                                $stmt->fetch();
                                $stmt->close();
                  ?>
                    <div class="desc">Cheat Sheets</div>
                    <div class="value"><span class="indicator indicator-equal mdi mdi-chevron-right"></span><span class="number" data-toggle="counter" data-end="<?php echo $members;?>"><?php echo $members;?></span>
                    </div>
                  </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-3">
              <div class="widget widget-tile">
              <div class="chart sparkline" ><i class="material-icons">router</i></div>
                <div class="data-info">
                <?php
                                //code for getting all devlan networking projects
                                $result ="SELECT count(*) FROM projects where project_category ='GNS 3 Topologies'   OR project_category = 'Network Automation' OR project_category = 'Packet Tracer Topologies' OR project_category = 'Misc Networking Projects' ";
                                $stmt = $mysqli->prepare($result);
                                $stmt->execute();
                                $stmt->bind_result($netwoking_projects);
                                $stmt->fetch();
                                $stmt->close();
                  ?>
                  <div class="desc">Network Projects</div>
                  <div class="value"><span class="indicator indicator-positive  mdi mdi-chevron-right"></span><span class="number" data-toggle="counter" data-end="<?php echo $netwoking_projects;?>" data-suffix=""><?php echo $netwoking_projects;?></span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-3">
              <div class="widget widget-tile">
              <div class="chart sparkline" ><i class="material-icons">code</i></div>
                <div class="data-info">
                <?php
                                //code for getting all devlan members
                                $result ="SELECT count(*) FROM projects where project_category ='FrontEnd WebApp'   OR  project_category = 'BackEnd WebApp' OR project_category = 'FullStack WebApp' OR project_category= 'Framework WebApp' OR project_category = 'Non Framework WebApp' OR project_category = 'Android App' OR project_category = 'Progressive WebApp' OR project_category = 'Misc Coding Projects'";
                                $stmt = $mysqli->prepare($result);
                                $stmt->execute();
                                $stmt->bind_result($coding_projects);
                                $stmt->fetch();
                                $stmt->close();
                  ?>
                  <div class="desc">Coding Projects</div>
                  <div class="value"><span class="indicator indicator-positive mdi mdi-chevron-right"></span><span class="number" data-toggle="counter" data-end="<?php echo $coding_projects;?>"><?php echo $coding_projects;?></span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-3">
              <div class="widget widget-tile">
              <div class="chart sparkline" ><i class="material-icons">important_devices</i></div>
                <div class="data-info">
                <?php
                                //code for getting all devlan members
                                $result ="SELECT count(*) FROM projects ";
                                $stmt = $mysqli->prepare($result);
                                $stmt->execute();
                                $stmt->bind_result($total_projects);
                                $stmt->fetch();
                                $stmt->close();
                  ?>
                  <div class="desc">Total Projects</div>
                  <div class="value"><span class="indicator indicator-positive mdi mdi-chevron-right"></span><span class="number" data-toggle="counter" data-end="<?php echo $total_projects;?>"><?php echo $total_projects;?></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <div class="row">
            <div class="col-12 col-lg-12">
                <div class="widget be-loading">
                  <div class="widget-chart-container">
                    <div id="chartContainer" style="height: 295px; width: 100%;"></div>
                    
                    <!--Wackass Javascript But It Aint Shit-->
                      <script>
                            window.onload = function () {
                            var chart = new CanvasJS.Chart("chartContainer", {
                              exportEnabled: true,
                              animationEnabled: true,
                              title:{
                                text: "Percentage Number Of Projects By Category"
                              },
                              legend:{
                                cursor: "pointer",
                                itemclick: explodePie
                              },
                              data: [{
                                type: "pie",
                                showInLegend: true,
                                toolTipContent: "{name}: <strong>{y}%</strong>",
                                indexLabel: "{name} - {y}%",
                                dataPoints: [
                                  //Data Populated from database and represented by the pie chart from patients records
                                  { y:
                                    <?php
                                  //code for getting all devlan members
                                  $result ="SELECT count(*) FROM projects where project_category ='FrontEnd WebApp'   OR  project_category = 'BackEnd WebApp' OR project_category = 'FullStack WebApp' OR project_category= 'Framework WebApp' OR project_category = 'Non Framework WebApp' OR project_category = 'Android App' OR project_category = 'Progressive WebApp' OR project_category = 'Misc Coding Projects'";
                                  $stmt = $mysqli->prepare($result);
                                  $stmt->execute();
                                  $stmt->bind_result($coding_projects);
                                  $stmt->fetch();
                                  $stmt->close();
                                    ?>
                                  <?php echo $coding_projects;?>, name: "Coding Projects", exploded: true },
                                  { y:
                                    <?php
                                  //code for getting all devlan PDF Projects
                                  $result ="SELECT count(*) FROM projects where project_category = 'PDF Cheat Sheets' ";
                                  $stmt = $mysqli->prepare($result);
                                  $stmt->execute();
                                  $stmt->bind_result($members);
                                  $stmt->fetch();
                                  $stmt->close();
                                      ?>
                                    <?php echo $members;?>, name: "Cheat Sheets" },

                                    { y:
                                    <?php
                                  //code for getting all devlan networking projects
                                  $result ="SELECT count(*) FROM projects where project_category ='GNS 3 Topologies'   OR project_category = 'Network Automation' OR project_category = 'Packet Tracer Topologies' OR project_category = 'Misc Networking Projects' ";
                                  $stmt = $mysqli->prepare($result);
                                  $stmt->execute();
                                  $stmt->bind_result($netwoking_projects);
                                  $stmt->fetch();
                                  $stmt->close();
                                    ?>
                                    <?php echo $netwoking_projects;?>, name: "Networking Projects" },
                                    
                                    
                                    { y:
                                    <?php
                                  //code for getting all devlan networking projects
                                  $result ="SELECT count(*) FROM projects where project_category ='Misc Networking Projects' OR project_category = 'Misc Coding Projects'";
                                  $stmt = $mysqli->prepare($result);
                                  $stmt->execute();
                                  $stmt->bind_result($misc);
                                  $stmt->fetch();
                                  $stmt->close();
                                    ?>
                                    <?php echo $misc;?>, name: "Misc Projects" }
                                  
                                ]
                              }]
                            });
                            chart.render();
                            }
                            function explodePie (e) {
                              if(typeof (e.dataSeries.dataPoints[e.dataPointIndex].exploded) === "undefined" || !e.dataSeries.dataPoints[e.dataPointIndex].exploded) {
                                e.dataSeries.dataPoints[e.dataPointIndex].exploded = true;
                              } else {
                                e.dataSeries.dataPoints[e.dataPointIndex].exploded = false;
                              }
                              e.chart.render();
                            }
                        </script>
                  </div>

                </div>
              </div>
              <div class="col-12 col-lg-12">
                <div class="card card-table">
                  <div class="card-header">
                    <div class="tools dropdown"><a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"></a>
                      <div class="dropdown-menu dropdown-menu-right" role="menu"><a class="dropdown-item" href="#">View Projects</a>
                      </div>
                    </div>
                    <div class="title">Latest Commits</div>
                  </div>
                  <div class="card-body">
                    <table class="table table-striped table-hover">
                      <thead>
                        <tr>
                        <th># </th>
                          <th style="width:36%;">Commit  </th>
                          <th>Category</th>
                          <th>Date Created</th>
                          <th>Action</th>
                          
                        </tr>
                      </thead>
                      <?php
                                              
                                              $ret="SELECT * FROM projects ORDER BY RAND() LIMIT 10  ";
                                              $stmt= $mysqli->prepare($ret) ;
                                              //$stmt->bind_param('i',$aid);
                                              $stmt->execute() ;//ok
                                              $res=$stmt->get_result();
                                              $cnt=1;
                                              while($row=$res->fetch_object())
                                                {
                        ?>
                      <tbody>
                    
                        <tr>
                          <td><?php  echo $cnt;?></td>
                          <td><?php echo $row->project_name;?></td>
                          <td><?php echo $row->project_category;?></td>
                          <td><?php echo $row->date_created;?></td>
                          <td><a href='devlan_pages_recent_projects.php?project_id=<?php echo $row->project_id;?>' class="mdi mdi-eye-outline"></td>
                        </tr>
                      </tbody>
                      <?php $cnt=$cnt+1; } ?>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <div class="splash-footer"><span><?php echo date ('Y');?> Devlan Labs. Proudly Powered By  <a href="https://martmbithi.github.io/">MartDevelopers</a></span></div>

      
    </div>
    <script src="assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="assets/lib/perfect-scrollbar/js/perfect-scrollbar.min.js" type="text/javascript"></script>
    <script src="assets/lib/bootstrap/dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <script src="assets/js/app.js" type="text/javascript"></script>
    <script src="assets/lib/jquery-flot/jquery.flot.js" type="text/javascript"></script>
    <script src="assets/lib/jquery-flot/jquery.flot.pie.js" type="text/javascript"></script>
    <script src="assets/lib/jquery-flot/jquery.flot.time.js" type="text/javascript"></script>
    <script src="assets/lib/jquery-flot/jquery.flot.resize.js" type="text/javascript"></script>
    <script src="assets/lib/jquery-flot/plugins/jquery.flot.orderBars.js" type="text/javascript"></script>
    <script src="assets/lib/jquery-flot/plugins/curvedLines.js" type="text/javascript"></script>
    <script src="assets/lib/jquery-flot/plugins/jquery.flot.tooltip.js" type="text/javascript"></script>
    <script src="assets/lib/jquery.sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
    <script src="assets/lib/countup/countUp.min.js" type="text/javascript"></script>
    <script src="assets/lib/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
    <script src="assets/lib/jqvmap/jquery.vmap.min.js" type="text/javascript"></script>
    <script src="assets/lib/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
    <script src="assets/lib/canvas/canvasjs.min.js"></script>
    <script src="assets/lib/canvas/jquery.canvasjs.min.js"></script>
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
      	App.dashboard();
      
      });
    </script>
  </body>

</html>
<!--inject some server side script to get some sessions-->
<?php
    session_start();
    include('includes/config.php');
    include('includes/checklogin.php');
    check_login();
    $aid=$_SESSION['user_id'];
?>
<!--End Ssession Injecting-->

<!DOCTYPE html>
<html lang="en">
    <!--Header-->
  <?php include('includes/head.php');?>
    <!--End Header-->
    <body>

        <div class="container-fluid">

            <!-- Slider -->
            <div class="tp-banner-container">
                <div class="tp-banner" >
                    <ul>	
                        <!-- SLIDE  -->
                        <li data-transition="fade" data-slotamount="7" data-masterspeed="1500" >
                            <!-- MAIN IMAGE -->
                            <img src="images/slide.jpg"  alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                            <!-- LAYERS -->
                        </li>
                    </ul>
                </div>
            </div>

            <!-- //Slider -->

            <div class="headernav">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-1 col-xs-3 col-sm-2 col-md-2 logo "><a href="index.php"><img src="https://devlan.martdev.info/assets/img/logo.png" alt=""  /></a></div>
                        <div class="col-lg-3 col-xs-9 col-sm-5 col-md-3 selecttopic">
                           
                        </div>
                        <!--Search Form-->
                        <div class="col-lg-4 search hidden-xs hidden-sm col-md-3">
                            <div class="wrap">
                                <form action="#" method="post" class="form">
                                    <div class="pull-left txt"><input type="text" class="form-control" placeholder="Search Topics"></div>
                                    <div class="pull-right"><button class="btn btn-default" type="button"><i class="fa fa-search"></i></button></div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                        <!--End Search Form-->

                        <!--New Topic -->
                        <div class="col-lg-4 col-xs-12 col-sm-5 col-md-4 avt">
                            <div class="stnt pull-left">                            
                                <form action="devlan_pages_forum_new_topic.php" method="post" class="form">
                                    <button class="btn btn-primary">Start New Topic</button>
                                </form>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <!--End NewTopic-->

                    </div>
                </div>
            </div>


            <section class="content">
            <!--Pagination-->
            <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-xs-12 col-md-8">
                            
                            <div class="pull-left">
                            <ul class="pagination">
                                <li><a href="?pageno=1">First</a></li>
                                <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?>">
                                    <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>">Prev</a>
                                </li>
                                <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
                                    <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">Next</a>
                                </li>
                                <li><a href="?pageno=<?php echo $total_pages; ?>">Last</a></li>
                            </ul>
                            </div>
                            
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
               <!-- End Navigation-->


                <div class="container">
                <!---->
                    <div class="row">
                        <!--Questions-->
                            <?php
                                
                                $ret="SELECT * FROM questions ";
                                $stmt= $mysqli->prepare($ret) ;
                                //$stmt->bind_param('i',$aid);
                                $stmt->execute() ;//ok
                                $res=$stmt->get_result();
                                $cnt=1;
                                while($row=$res->fetch_object())
                                    {
                            ?>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="post">
                                                <div class="wrap-ut pull-left">
                                                    <div class="userinfo pull-left">
                                                       
                                                    </div>
                                                    <div class="posttext pull-left">
                                                        <h2><a href="devlan_pages_forum_view_single_question.php?q_id=<?php echo $row->q_id;?>"><?php echo $row->q_title;?></a></h2>
                                                        <p><?php echo $row->q_body;?></p>
                                                        <button type="button" class="btn btn-outline-primary">
                                                             <?php echo $row->q_tags;?>
                                                        </button>
                                                        <button type="button" class="btn btn-success">
                                                             <?php echo $row->q_category;?>
                                                        </button>                                                        
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="postinfo pull-left">
                                                    <div class="comments">
                                                        <div class="commentbg">
                                                            
                                                            <div class="mark"></div>
                                                           
                                                        </div>
                                                        <p><?php echo $row->q_asked_by;?></p>

                                                    </div>
                                                    <div class="views"><a href="devlan_pages_forum_view_single_question.php?q_id=<?php echo $row->q_id;?>"><i class="fa fa-eye"></i> View Answers</a></div>
                                                    <div class="time"><a href="devlan_pages_forum_answer_single_question.php?q_id=<?php echo $row->q_id;?>"><i class="fa fa-check"></i> Answer</a></div>                                    
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>

                        <!--End Questions-->
                                    <?php }?>
                        
                    </div>
                </div>


                <?php

                    if (isset($_GET['pageno'])) {
                        $pageno = $_GET['pageno'];
                    } else {
                        $pageno = 1;
                    }
                    $no_of_records_per_page = 10;
                    $offset = ($pageno-1) * $no_of_records_per_page;


                    $total_pages_sql = "SELECT COUNT(*) FROM questions ";
                    $result = mysqli_query($mysqli ,$total_pages_sql);
                    $total_rows = mysqli_fetch_array($result)[0];
                    $total_pages = ceil($total_rows / $no_of_records_per_page);

                    $sql = "SELECT * FROM questions LIMIT $offset, $no_of_records_per_page";
                    $res_data = mysqli_query($mysqli,$sql);
                    while($row = mysqli_fetch_array($res_data)){
                        //here goes the data
                    }
                    mysqli_close($mysqli);
                ?>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-xs-12 col-md-8">
                            
                            <div class="pull-left">
                            <ul class="pagination">
                                <li><a href="?pageno=1">First</a></li>
                                <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?>">
                                    <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>">Prev</a>
                                </li>
                                <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
                                    <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">Next</a>
                                </li>
                                <li><a href="?pageno=<?php echo $total_pages; ?>">Last</a></li>
                            </ul>
                            </div>
                            
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>


            </section>

            <!--Footer-->
            <?php include('includes/footer.php');?>
            <!--End Footer-->
        </div>

        <!-- get jQuery from the google apis -->
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.js"></script>
 

        <!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
        <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
        <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

        <script src="js/bootstrap.min.js"></script>


        <!-- LOOK THE DOCUMENTATION FOR MORE INFORMATIONS -->
        <script type="text/javascript">
            
            var revapi;

            jQuery(document).ready(function() {
                "use strict";
                revapi = jQuery('.tp-banner').revolution(
                        {
                            delay: 15000,
                            startwidth: 1200,
                            startheight: 278,
                            hideThumbs: 10,
                            fullWidth: "on"
                        });

            });	//ready

        </script>

        <!-- END REVOLUTION SLIDER -->
    </body>

</html>
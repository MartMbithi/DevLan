<?php
    session_start();
    include('includes/config.php');
    include('includes/checklogin.php');
    check_login();
    $aid=$_SESSION['user_id'];
?>
<!DOCTYPE html>
<html lang="en">
    <!--HEAD-->
        <?php include('includes/head.php');?>
    <!--eND hEAD-->
    <body class="topic">

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


            


            <?php	
                $id=$_GET['q_id'];
                $ret="select * from questions where q_id=?";
                //code for getting rooms using a certain id
                $stmt= $mysqli->prepare($ret) ;
                $stmt->bind_param('i',$id);
                $stmt->execute() ;//ok
                $res=$stmt->get_result();
                //$cnt=1;
                while($row=$res->fetch_object())
                {
            ?>
            <section class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 breadcrumbf">
                            <a href="index.php">DevLan Projects Laboratory</a> <span class="diviver">&gt;</span> <a href="#">General Discussion</a> <span class="diviver">&gt;</span> <a href="#"><?php echo $row->q_title;?></a>
                        </div>
                    </div>
                </div>


                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                       
                            <!-- POST -->
                            <div class="post beforepagination">
                                <div class="topwrap">
                                    <div class="userinfo pull-left">
                                        <div class="avatar">
                                            
                                        </div>

                                    </div>
                                    <div class="posttext pull-left">
                                        <h2><b><?php echo $row->q_title;?></b></h2>
                                        <p><?php echo $row->q_body;?> </p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>                
                            </div><!-- POST -->
          

                           <hr>
                           
                           <div class="post beforepagination">
                                <div class="topwrap">
                                    <div class="userinfo pull-left">
                                        <div class="avatar">
                                            
                                        </div>

                                    </div>
                                    <div class="posttext pull-left">
                                    <button type="button" class="btn btn-primary">
                                         <h2><?php echo $row->q_title;?></h2>
                                    </button>
                                        <p><?php echo $row->ans_body;?> </p>
                                        <p><?php echo $row->ans_by;?> </p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>                
                            </div>
                            <?php }?>

                            <hr>

                            <!-- POST -->
                          


                        </div>
                    </div>
                </div>



                

            </section>

            <?php include('includes/footer.php');?>

        </div>

        <!-- get jQuery from the google apis -->
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.js"></script>

        <!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
        <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
        <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
        <script src="//cdn.ckeditor.com/4.6.2/basic/ckeditor.js"></script>
        <script type="text/javascript">
                 CKEDITOR.replace('editor')
        </script>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <!-- Include all compiled plugins (below), or include individual files as needed -->
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
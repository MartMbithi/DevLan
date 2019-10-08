<?php
session_start();
include('includes/config.php');
include('includes/checklogin.php');
check_login();
$aid=$_SESSION['user_id'];
  //Create Project
       
            if(isset($_POST['post_answer']))
            {
                //declare and initialize some variables
                $id=$_GET['q_id'];
                //$qns_title=$_POST['qns_title'];
                $ans_body=$_POST['ans_body'];
                $ans_by=$_POST['ans_by'];
               // $q_category=$_POST['q_category'];
                //$q_tags=($_POST['q_tags']);
                                    
               //sql to inset the values to the database
                $query="update questions set ans_body=?, ans_by=? where q_id=?";
                $stmt = $mysqli->prepare($query);
                //bind the submitted values with the matching columns in the database.
                $rc=$stmt->bind_param('ssi', $ans_body, $ans_by, $id);
                $stmt->execute();

                //show that question has been submitted successfully.
                $msg = "Answer Submitted";
                  
                
            }

            
?>
<!DOCTYPE html>
<html lang="en">

    <!---Head-->
    <?php include('includes/head.php');?>
    <!--End Head-->

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
                                <form action="index.php" method="post" class="form">
                                    <button class="btn btn-primary">View Questions</button>
                                </form>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <!--End NewTopic-->

                    </div>
                </div>
            </div>




            <sectiq_bodyon class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 breadcrumbf">
                            <a href="#">DevLan Projects Laboratory Forum</a> <span class="diviver">&gt;</span> <a href="#">General Discussion</a> <span class="diviver">&gt;</span> <a href="#">New Topic</a>
                        </div>
                    </div>
                </div>


                <div class="container">
                    <div class="row">
                    <?php if(isset($msg))
                            {?>
                                <script>
                                    setTimeout(function () 
                                    { 
                                        swal("Success!","<?php echo $msg;?>!","success");
                                    },
                                        100);
                                </script>
                                <!--Trigger a pretty success alert-->
                            <?php }?>
                        <div class="col-lg-12 col-md-12">
                            <!-- Create A question form -->
                            <div class="post ">
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
                                            <form action="#" class="form newtopic" method="post">
                                                <div class="topwrap">
                                                    <div class="userinfo pull-left">
                                                        <div class="avatar">
                                                        </div>

                                                    </div>
                                                    <div class="posttext pull-left">

                                                        <div>
                                                            <input type="text" name="qns_title"  required  value="<?php echo $row->q_title;?>" readonly class="form-control" />
                                                        </div>
                                                        <?php
                                                            //get users details using his/Session 
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
                                                        <div>
                                                            <input type="text" name="ans_by" readonly required  value="<?php echo $row->fname;?> <?php echo $row->lname;?>" class="form-control" />
                                                        </div>
                                                                        <?php }?>

                                                        
                                                        <div>
                                                            <textarea  id="editor" name="ans_body" placeholder="Enter Your Pressing Question"  class="form-control" >Enter Your Answer</textarea>
                                                        </div>

                                                       <hr> 

                                                       

                                                        <div>
                                                            <input type="submit" name="post_answer" class="btn btn-primary" value="Post Answer "> 
                                                        </div>

                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>                              
                                            </form>
                                            <?php }?>

                            </div>
                            <!--End FOrm -->
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
        <!--ck editor javascript-->
        <script src="//cdn.ckeditor.com/4.6.2/basic/ckeditor.js"></script>
        <script type="text/javascript">
                 CKEDITOR.replace('editor')
        </script>
        <!--Initialize this muhfucking ckeditor and load the shit...you know what i mean-->
        

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
<?php
$baseUrl = Yii::app()->theme->baseUrl;
?>
<!DOCTYPE html>
<html>
    <head>
        <!-- Meta -->
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
        <!-- End of Meta -->

        <!-- Page title -->
        <title>PraLax Infosoft :: Admin Panel </title>
        <!-- End of Page title -->
        <?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>

        <!-- Libraries -->
        <link type="text/css" href="<?php echo $baseUrl; ?>/css/layout.css" rel="stylesheet">
        <script type="text/javascript" src="<?php echo $baseUrl; ?>/js/jquery-1.js"></script>
        <script type="text/javascript" src="<?php echo $baseUrl; ?>/js/easyTooltip.js"></script>
        <script type="text/javascript" src="<?php echo $baseUrl; ?>/js/jquery-ui-1.js"></script>
        <script type="text/javascript" src="<?php echo $baseUrl; ?>/js/jquery.js"></script>
        <script type="text/javascript" src="<?php echo $baseUrl; ?>/js/hoverIntent.js"></script>
        <script type="text/javascript" src="<?php echo $baseUrl; ?>/js/superfish.js"></script>
        <script type="text/javascript" src="<?php echo $baseUrl; ?>/js/custom.js"></script>
        <!-- End of Libraries -->
    </head>
    <body style="cursor: auto;">
        <!-- Container -->
        <div id="container">

            <!-- Header -->
            <div id="header"> 

                <!-- Top -->
                <div id="top"> 
                    <!-- Logo -->
                    <div class="logo">
                        <h2><b style="color: whitesmoke;">PraLax Infosoft - ADMIN</b></h2>
                    </div>
                    <!-- End of Logo --> 

                    <!-- Meta information -->
                    <div class="meta">
                        <p>      
                            Welcome, <?php echo Yii::app()->user->admin_username; ?></p>
                        <ul>
                            <li><a href="<?php echo Yii::app()->createUrl('admin/logout'); ?>" title="End administrator session" class="tooltip"><span class="ui-icon ui-icon-power"></span>Logout</a></li>
<!--                            <li><a href="#" title="Change current settings" class="tooltip"><span class="ui-icon ui-icon-wrench"></span>Settings</a></li>
                            <li><a href="#" title="Go to your account" class="tooltip"><span class="ui-icon ui-icon-person"></span>My account</a></li>-->
                        </ul>
                    </div>
                    <!-- End of Meta information --> 
                </div>
                <!-- End of Top--> 

                <!-- The navigation bar -->
                <div id="navbar">
                    <ul class="nav sf-js-enabled sf-shadow">
                        <li><a href="<?php echo Yii::app()->createUrl('admin/dashboard'); ?>"> Dashboard </a></li>
                    </ul>
                </div>

                <div id="navbar">
                    <ul class="nav sf-js-enabled sf-shadow">
                        <li><a href="#">Report</a>
                            <ul>
                                <li>
                                <li><a href="<?php echo Yii::app()->createUrl('report/rcontact'); ?>">Contact Report</a></li>
                                
                        </li>
                    </ul>
                    </li>
                    </ul>
                    
<!--                    <ul class="nav sf-js-enabled sf-shadow">
                        <li><a href="#">Home Page Featured Album</a>
                            <ul>
                                <li>
                                
                                <li><a href="<?php echo Yii::app()->createUrl('videos/create'); ?>">Add Featured Album</a></li>
                                <li><a href="<?php echo Yii::app()->createUrl('videos/admin'); ?>">Featured Album Lists</a></li>
                                
 </li>
                    </ul>
                        </li>
                    </ul>-->
                    
<!--                    <ul class="nav sf-js-enabled sf-shadow">
                        <li><a href="#">Manage Albums</a>
                            <ul>
                                <li>
                                
                                <li><a href="<?php echo Yii::app()->createUrl('album/create'); ?>">Add Album</a></li>
                                <li><a href="<?php echo Yii::app()->createUrl('album/admin'); ?>">Album Lists</a></li>
                                
 </li>
                    </ul>
                        </li>
                    </ul>-->

<!--                    <ul class="nav sf-js-enabled sf-shadow">
                        <li><a href="#">Manage Videos</a>
                            <ul>
                                <li>
                                
                                <li><a href="<?php echo Yii::app()->createUrl('videos/create'); ?>">Add Video</a></li>
                                <li><a href="<?php echo Yii::app()->createUrl('videos/admin'); ?>">Video Lists</a></li>
                                
 </li>
                    </ul>
                        </li>
                    </ul>-->
<!--                    <ul class="nav sf-js-enabled sf-shadow">
                        <li><a href="#">Manage News</a>
                            <ul>
                                <li>
                                
                                <li><a href="<?php echo Yii::app()->createUrl('news/create'); ?>">Add News</a></li>
                                <li><a href="<?php echo Yii::app()->createUrl('news/admin'); ?>">All News</a></li>
                                
 </li>
                    </ul>
                        </li>
                    </ul>-->
                    
<!--                    <ul class="nav sf-js-enabled sf-shadow">
                        <li><a href="#">Manage Gallery</a>
                            <ul>
                                <li>
                                
                                <li><a href="<?php echo Yii::app()->createUrl('gallery/create'); ?>">Add Gallery Item</a></li>
                                <li><a href="<?php echo Yii::app()->createUrl('gallery/admin'); ?>">Gallery Lists</a></li>
                            </li>
                    </ul>     

                        </li>
                    </ul>-->
                    
<!--                    <ul class="nav sf-js-enabled sf-shadow">
                        <li><a href="#">Manage Testimonials</a>
                            <ul>
                                <li>
                                
                                <li><a href="<?php echo Yii::app()->createUrl('testimonial/create'); ?>">Add Testimonial</a></li>
                                <li><a href="<?php echo Yii::app()->createUrl('testimonial/admin'); ?>">Testimonial Lists</a></li>
                          </li>
                    </ul>       

                        </li>
                    </ul>-->
                    
                    </li>
                    </ul>

                    </li>
                    </ul>
                </div>
                <!--   End of navigation bar" --> 
            </div>
            <!-- End of Header --> 


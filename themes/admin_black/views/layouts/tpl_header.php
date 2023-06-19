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
        <title>पर्वतीय महापरिषद - व्यवस्थापक</title>
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
    <body style="cursor: auto; " >
        <!-- Container -->
        <div id="container">

            <!-- Header -->
            <div id="header"> 

                <!-- Top -->
                <div id="top"> 
                    <!-- Logo -->
                    <div class="logo">
                        <h1><b style="color: #fc6d03;">पर्वतीय महापरिषद - व्यवस्थापक</b></h1>
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
                        <li><a href="http://localhost/parvatiya/backend.php/admin/dashboard"> Dashboard </a></li>
                    </ul>
                </div>

                <div id="navbar">
                    <ul class="nav sf-js-enabled sf-shadow">
                        <li><a href="http://localhost/parvatiya/backend.php/admin/dashboard">Pages</a>
                            <ul>
                                <li>
                                <li><a href="<?php echo Yii::app()->createUrl('Gallery/create'); ?>">Gallery</a></li>
                                <li><a href="<?php echo Yii::app()->createUrl('Video/create'); ?>">Video</a></li>
                                <li><a href="<?php echo Yii::app()->createUrl('MediaNews/create'); ?>">Media News</a></li>
                                <li><a href="<?php echo Yii::app()->createUrl('Member/create'); ?>">Member</a></li>

                        </li>
                    </ul>
                    </li>
                    </ul>

                    <ul class="nav sf-js-enabled sf-shadow">
                        <li><a href="http://localhost/parvatiya/backend.php/admin/dashboard">Home Page</a>
                            <ul>
                                <li><a href="<?php echo Yii::app()->createUrl('AboutVideo/create'); ?>">About Video</a></li>
                                <li><a href="<?php echo Yii::app()->createUrl('upcoming_event/create'); ?>">Upcoming Event</a></li>

                            </ul>
                        </li>
                    </ul>

                    <ul class="nav sf-js-enabled sf-shadow">
                        <li><a href="http://localhost/parvatiya/backend.php/admin/dashboard">Report</a>
                            <ul>
                                <li>
                                <li><a href="<?php echo Yii::app()->createUrl('japply/report'); ?>">Contact Details</a></li>
                        </li>
                    </ul>
                    </li>
                    </ul>
                </div>
                <!--   End of navigation bar" --> 

                <!--- Search bar -->
<!--                <div id="search"> 
                    <form action="/search/" method="POST">
                        <p>
                            <input value="" class="but" type="submit">
                            <input name="q" value="Search the admin panel" onFocus="if (this.value == this.defaultValue)
                                        this.value = '';" onBlur="if (this.value == '')
                                                    this.value = this.defaultValue;" type="text">
                        </p>
                    </form> 
                </div>-->
                <!-- End of Search bar  -->

            </div>
            <!-- End of Header --> 


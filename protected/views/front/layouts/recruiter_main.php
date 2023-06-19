<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="<?php echo Yii::app()->baseUrl; ?>/css/style.css" rel="stylesheet" type="text/css" />
<title><?php echo isset($this->pageTitle) ? $this->pageTitle : Yii::app()->name; ?></title>
<script src="<?php echo Yii::app()->baseUrl; ?>/js/jquery-1.4.2.min.js"></script>
</head>
<body>
<div class="wra">
	<!--header-->
    <div class="header_O">
    	<div class="header">
        	<div class="logo"><a href="<?php echo Yii::app()->createUrl('site/index'); ?>"><img src="<?php echo Yii::app()->baseUrl; ?>/images/logo.png" width="112" height="22" alt="Home" /></a></div>
            <div class="nav">
            	<ul>
                	<li><a href="<?php echo Yii::app()->createUrl('site/index'); ?>">Home</a></li>
                    <li><a href="<?php echo Yii::app()->createUrl('jobs/postjobs'); ?>">Post a job</a></li>
                    <li><a href="<?php echo Yii::app()->createUrl('post-resume'); ?>">Posted jobs/ responses</a></li>
                    <li><a href="<?php echo Yii::app()->createUrl('career'); ?>">Sub users management</a></li>
                    <li><a href="<?php echo Yii::app()->createUrl('myprofile'); ?>">Resume search</a></li>
                   
                    <li><a href="<?php echo Yii::app()->createUrl('recruiter/signin'); ?>" class="none">Billing & product info</a></li>
                </ul>
            </div>
          <div class="clear"></div>
      </div>
    </div>
   <!--end header--> 

<?php
$logoutUrl = '<a href="'.Yii::app()->createUrl("site/logout").'">Sign Out</a>';
 
$facebook = new Facebook(array(
	'appId'  => '344504698893879',
	'secret' => '40a712608147fc7530eb307324f7efc9',
));

$user=$facebook->getUser();
if (!$user) 
{
	$loginUrl = '<a href="'.$facebook->getLoginUrl(array('scope' => 'read_stream, email', 'redirect_uri' => 'http://way4goals.com/maxaux/site/facebook')).'"><img src="'.Yii::app()->baseUrl.'/images/facebook.png" alt="Connect with facebook" /></a>'; 
} 
else
{
	$logoutUrl = '<a href="'.$facebook->getLogoutUrl(array( 'next' => 'http://way4goals.com/maxaux/site/logout')).'">Sign Out</a>';
}
?>

   <!--Search row-->
   <div class="searh_row_con">
       <div class="searh_row">
        <div class="search_con">
            <form action="<?php echo Yii::app()->createUrl('search/peoplesearch'); ?>" method="get">
            <strong>People Search</strong><input name="search_txt" type="text" placeholder="Skill,Keword,Company name " class="fld" />
            <input name="search_btn" type="image" src="<?php echo Yii::app()->baseUrl; ?>/images/search.png" align="top" />
            <span><a href="<?php echo Yii::app()->createUrl('search/people_search_advance'); ?>">Advance search</a></span>
            </form>
        </div>
        <div class="joinus_con">
        	<?php if(isset(Yii::app()->user->front_user_id)) { echo 'Welcome <a href="' . Yii::app()->createUrl('recruiter/myaccount') . '">' . ucfirst(Yii::app()->user->front_firstname) .'</a>, ' . $logoutUrl; ?>
			<?php } else { ?>
             <a href="<?php echo Yii::app()->createUrl('recruiter/signup'); ?>" id="try-1" class="joinus">Join Us</a>
             <a href="<?php echo Yii::app()->createUrl('recruiter/signin'); ?>" id="try-2" class="signin">Sign In</a>
            <?php } ?>
        </div>
        <div class="clear"></div>
       </div>
   </div>
   <!--end Search row-->

   <?php echo $content; ?>
   
   <!--footer-->
   
   <div class="footer2">
   	<div class="footer_container">
   		<div class="copyright">Maxjip &copy; 2013. English (US)</div>
        <div class="footer_link">
     	<a href="#">About</a> | 
        <a href="#">Privacy</a> | 
        <a href="#">Invite</a>| 
        <a href="#">Terms</a> | 
        <a href="#">Developers</a>
     	</div>
        <div class="clear"></div>
    </div>
   </div>
   <!--end footer-->
   
</div>

<?php
if(!isset(Yii::app()->user->front_user_id))
{
$ch = Yii::app()->clientScript;
$bu = Yii::app()->baseUrl;
$ch->registerScriptFile("$bu/js/jquery.lightbox_me.js",CClientScript::POS_HEAD);
$ch->registerScript('home','$(function() {
function launch() {
	 $(\'#sign_up, #sign_in\').lightbox_me({centered: true, onLoad: function() { $(\'#sign_up\').find(\'input:first\').focus()}});}

$(\'#try-1\').click(function(e) {
	$("#sign_in").lightbox_me({centered: true, onLoad: function() {
		$("#sign_in").find("input:first").focus();
	}});
	e.preventDefault();
});
$(\'#try-2\').click(function(e) {
	$("#sign_up").lightbox_me({centered: true, onLoad: function() {
		$("#sign_up").find("input:first").focus();
	}});
	e.preventDefault();
});

$(\'table tr:nth-child(even)\').addClass(\'stripe\');
});');
?>

<div id="sign_in" class="box_container">
    <h3 id="see_id" class="heading">Register new account</h3>
    <br />
    <div id="box_container_form">
    
    	<form id="users-signup-form" action="<?php echo Yii::app()->createUrl("user/signup"); ?>" method="post">            
            <label for="User_fullname" class="req uired">Fullname <span class="required">*</span></label>
            <input name="name" class="fld2" id="name" type="text" placeholder="Fullname" />                        

			<label for="User_email" class="required">Email <span class="required">*</span></label>            
            <input name="email" class="fld2" id="email" type="text" placeholder="test@example.com" />                        
            
			<label for="User_password" class="required">Password <span class="required">*</span></label>
            <input name="password" class="fld2" id="password" type="password" placeholder="xxxxxx" />            			
            
			<label for="User_cpassword" class="required">Re Type Password <span class="required">*</span></label>            <input name="cpassword" class="fld2" id="cpassword" type="password" placeholder="xxxxxx" />            			
            
            <label for="User_cpassword" class="required">&nbsp;</label>
            <input id="ytrememberMe" type="hidden" value="0" name="rememberMe" /><input name="rememberMe" value="No" id="rememberMe" type="checkbox" /> Accepted <a href="/cms/site/recruiters-terms">Terms &amp; conditions</a>
            
            <div class="btn_con" style="width:343px; padding:10px 0 0 0;">
            	<input type="submit" value="Submit" name="Signup" class="btn2 border4" />
            	<div class="clear"></div>
            </div>
            
            </form> 
        
        <p>&nbsp;</p>
        <h3 id="see_id" align="center">Or</h3>
        <div align="center"><?php echo $loginUrl; ?></div>
        
    </div>
    <a id="close_x" class="close sprited" href="<?php echo Yii::app()->createUrl('user/close'); ?>">close</a>
</div>

<div id="sign_up" class="box_container">
    <h3 id="see_id" class="heading">Sign In</h3>
    <div id="box_container_form">
    	<div>Please sign in using the form below</div>
        <br />
        <?php 
		$form=$this->beginWidget('CActiveForm', array(
			'id'=>'site-main-login-form',
			'action'=>Yii::app()->createUrl("user/signin"),
			'enableClientValidation'=>true,
			'clientOptions'=>array(
				'validateOnSubmit'=>true,
			),
		)); 
		?>
        <label>Email:</label>
        <input class="fld2" placeholder="test@example.com" name="LoginForm[username]" id="LoginForm_username" type="text" />
        
        <label>Password:</label>
        <input class="fld2" placeholder="xxxxxx" name="LoginForm[password]" id="LoginForm_password" type="password" />
         
        <?php echo CHtml::submitButton('Signin', array("class"=>"btn2 border4")); ?>
        <?php $this->endWidget(); ?>
    	<p style="margin:18px 0 0 100px;"><a href="<?php echo Yii::app()->createUrl('user/forgot'); ?>">Forgot Password?</a></p>
        <br />
        <h3 id="see_id" align="center">Or</h3>
        <div align="center"><?php echo $loginUrl; ?></div>
        
     </div>   
    <a id="close_x" class="close sprited" href="<?php echo Yii::app()->createUrl('user/close'); ?>">close</a>

</div>


<?php
}
?>

</body>
</html>

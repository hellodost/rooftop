<?php
$ch = Yii::app()->clientScript;
$bu = Yii::app()->baseUrl;
$ch->registerScriptFile("$bu/js/jquery-1.4.2.min.js",CClientScript::POS_HEAD);
$ch->registerScriptFile("$bu/js/jquery.lightbox_me.js",CClientScript::POS_HEAD);
$ch->registerScript('home','$(function() {
function launch() {
	 $(\'#sign_up\').lightbox_me({centered: true, onLoad: function() { $(\'#sign_up\').find(\'input:first\').focus()}});
}

$(\'#try-1\').click(function(e) {
	$("#sign_up").lightbox_me({centered: true, onLoad: function() {
		$("#sign_up").find("input:first").focus();
	}});
	
	e.preventDefault();
});


$(\'table tr:nth-child(even)\').addClass(\'stripe\');
});');

echo '<pre>';
print_r(Yii::app()->errorHandler->error);

$ch->registerCssFile("$bu/css/lightbox.css",CClientScript::POS_HEAD);
?>
<!--matter-->
   <div class="matter_con margin_10">
   		<div class="matter_desc">
            
            <h1>Error 404 | Nothing found!</h1>
            <div class="error_desc">Sorry, but you are looking for something that is not here.</div>
            <img src="<?php echo $bu; ?>/images/404.png" alt="Eror 404" />
        </div>
   </div>
<!--end matter-->

<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->user_id=>array('view','id'=>$model->user_id),
	'Update',
);


?>

<h1>Update User <?php //echo $model->user_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model,'roles'=>$roles)); ?>
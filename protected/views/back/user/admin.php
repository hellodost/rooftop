<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List User', 'url'=>array('index')),
	array('label'=>'Create User', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('user-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Users</h1>

<?php Helpers::getMsg();?>

<?php $this->widget('GridView', array(
	'id'=>'user-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		array(
		'header'=>'ID',
          	'name' => 'user_id',
			'value' => '$data->user_id',  
			'htmlOptions'=>array('width'=>'50px'),
			'filter' => false,
        ),
		array(
		'header'=>'Username',
          	'name' => 'username',
			'value' => '$data->username',  
			'filter' => true,
        ),
		
		'firstname',
		'lastname',
		array(	'header'=>'Role',
          	'name' => 'role',
			'value' => 'User::model()->getRoleName($data->role)',  
			'filter' => array('2'=>'Site User','3'=>'Subscriber'),
        ),
		array(	'header'=>'Status',
          	'name' => 'status',
			'value' => '($data->status==1)?"Active":"Inactive"',  
			'filter' => array('1'=>'Active','0'=>'Inactive'),
        ),
		/*
		'status',
		'created',
		'created_by',
		'last_login',
		*/
		array(
			'class'=>'GridButton',
			'template'=>'{active}{inactive}{update}{delete}',
			  'buttons'=>array
				(
					'active' => array
					(
						'visible'=>'($data->status==1) && ($data->user_id!=Yii::app()->user->admin_user_id)',
					),
					'inactive' => array
					(
						'visible'=>'($data->status<1) && ($data->user_id!=Yii::app()->user->admin_user_id)',
					),
					'delete' => array
					(
						'visible'=>'$data->user_id!=Yii::app()->user->admin_user_id',
					),
				),
			
		),
	),
)); ?>

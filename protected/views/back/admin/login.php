   
<div id="box">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

<?php echo $form->errorSummary($model); ?>

	<p class="main">
		<label>Username</label>
        
		<?php echo $form->textField($model,'email'); ?>
		<?php //echo $form->error($model,'username'); ?>
	
		<label>Password</label>
		<?php echo $form->passwordField($model,'password'); ?>
		<?php //echo $form->error($model,'password'); ?>

		</p>


	<p class="space">
		<span><?php echo $form->checkBox($model,'rememberMe'); ?>Remember me</span>
		<?php //echo $form->label($model,'rememberMe'); ?>
		<?php //echo $form->error($model,'rememberMe'); ?>

		<?php echo CHtml::submitButton('Login',array('class'=>'login')); ?>
	</p>

<?php $this->endWidget(); ?>
</div>
                            
           

<?php 
Yii::import('zii.widgets.grid.CButtonColumn');
class GridButton extends CButtonColumn {
		
	
 
    public $template = '{active}{inactive}{email}{update}{delete}{view}';
	public $deleteButtonImageUrl;
	public $emailButtonImageUrl;
	public $emailButtonUrl='Yii::app()->controller->createUrl("email",array("id"=>$data->primaryKey))';
	public $emailButtonLabel='Email';
	public $emailButtonOptions=array('class'=>'email');
	
	public $activeButtonImageUrl;
	public $activeButtonUrl='Yii::app()->controller->createUrl("active",array("id"=>$data->primaryKey))';
	public $activeButtonLabel='Active';
	public $activeButtonOptions=array('class'=>'active');

	public $inactiveButtonImageUrl;
	public $inactiveButtonUrl='Yii::app()->controller->createUrl("inactive",array("id"=>$data->primaryKey))';
	public $inactiveButtonLabel='Inactive';
	public $inactiveButtonOptions=array('class'=>'inactive');
	
		
	protected function initDefaultButtons()
	{
		$this->activeButtonImageUrl=Yii::app()->theme->baseUrl.'/images/active_16x16.png';
			$this->inactiveButtonImageUrl=Yii::app()->theme->baseUrl.'/images/inactive_16x16.png';
			$this->emailButtonImageUrl=Yii::app()->theme->baseUrl.'/images/email_16x16.png';
			$this->viewButtonImageUrl=Yii::app()->theme->baseUrl.'/images/view_16x16.png';
			$this->updateButtonImageUrl=Yii::app()->theme->baseUrl.'/images/edit_16x16.png';
			$this->deleteButtonImageUrl=Yii::app()->theme->baseUrl.'/images/delete_16x16.png';
			$this->deleteConfirmation=Yii::t('zii','Are you sure you want to delete this item?');

foreach(array('active','inactive','email','view','update','delete') as $id)
		{
			$button=array(
				'label'=>$this->{$id.'ButtonLabel'},
				'url'=>$this->{$id.'ButtonUrl'},
				'imageUrl'=>$this->{$id.'ButtonImageUrl'},
				'options'=>$this->{$id.'ButtonOptions'},
			);
			if(isset($this->buttons[$id]))
				$this->buttons[$id]=array_merge($button,$this->buttons[$id]);
			else
				$this->buttons[$id]=$button;
		}

		if(!isset($this->buttons['delete']['click']))
		{
			if(is_string($this->deleteConfirmation))
				$confirmation="if(!confirm(".CJavaScript::encode($this->deleteConfirmation).")) return false;";
			else
				$confirmation='';

			if(Yii::app()->request->enableCsrfValidation)
			{
				$csrfTokenName = Yii::app()->request->csrfTokenName;
				$csrfToken = Yii::app()->request->csrfToken;
				$csrf = "\n\t\tdata:{ '$csrfTokenName':'$csrfToken' },";
			}
			else
				$csrf = '';

			if($this->afterDelete===null)
				$this->afterDelete='function(){}';

			$this->buttons['delete']['click']=<<<EOD
function() {
	$confirmation
	var th = this,
		afterDelete = $this->afterDelete;
	jQuery('#{$this->grid->id}').yiiGridView('update', {
		type: 'POST',
		url: jQuery(this).attr('href'),$csrf
		success: function(data) {
			jQuery('#{$this->grid->id}').yiiGridView('update');
			afterDelete(th, true, data);
		},
		error: function(XHR) {
			return afterDelete(th, false, XHR);
		}
	});
	return false;
}
EOD;
		}
	}

    }?>
<?php
Yii::import('zii.widgets.grid.CGridView');

class GridView extends CGridView
{
      public function init()
    {
        $this->cssFile = Yii::app()->theme->baseUrl . '/css/gridview.css';
		
        parent::init();
    }
	
}
?>
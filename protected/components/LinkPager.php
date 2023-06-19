<?php
//Yii::import('web.widgets.pagers.CLinkPager');

class LinkPager extends CLinkPager
{
      public function init()
    {
        $this->cssFile = Yii::app()->theme->baseUrl . '/css/pager.css';
        //$this->firstPageLabel='First';
      
		
        parent::init();
    }
	
}
?>
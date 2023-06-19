<?php

class ReportController extends Controller
{

	
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			//'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('@'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('japply','lip','tip','sp','reportman','reportwild','reporthouse','reportKrishi','search','manacc'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}
	
	public function actionIndex()
	{
		$this->render('index');
	}
        
        public function actionJapply()
	{
		$this->render('japply');
	}
        
         public function actionTip()
	{
		$this->render('tip');
	}
        
         public function actionLip()
	{
		$this->render('lip');
	}
        
         public function actionCip()
	{
		$this->render('cip');
	}
	
	public function actionReportman()
	{
		$model=FManLoss::model()->findAll();
		$this->render('reportman',array('model'=>$model));
	}
	
	public function actionManacc()
	{
		$model=FManAcc::model()->findAll();
		$this->render('manacc',array('model'=>$model));
	}
	
	public function actionReporthouse()
	{
		$model=FHouseLoss::model()->findAll();
		$this->render('reporthouse',array('model'=>$model));
	}
        
        public function actionReportkrishi()
	{
		$model=FKrishiLoss::model()->findAll();
		$this->render('reportkrishi',array('model'=>$model));
	}
	
	public function actionReportwild()
	{
		$model=FWildLoss::model()->findAll();
		$this->render('reportwild',array('model'=>$model));
	}
	public function actionReportother()
	{
		$model=FOtherLoss::model()->findAll();
		$this->render('reportother',array('model'=>$model));
	}
	
	public function actionSearch()
	{
		$msg='';
		if(isset($_POST['caseno']))
		{
		
		$sqlm="SELECT * FROM f_man_loss WHERE case_no='".$_POST['caseno']."' " ;
		$man=FManLoss::model()->findAllBySql($sqlm);
		if(!empty($man))
		$this->render('reportman',array('model'=>$man));
		
		$sqlw="SELECT * FROM f_wild_loss WHERE case_no='".$_POST['caseno']."' " ;
		$wild=FWildLoss::model()->findAllBySql($sqlw);
		if(!empty($wild))
		$this->render('reportwild',array('model'=>$wild));
		
		$sqlo="SELECT * FROM f_other_loss WHERE case_no='".$_POST['caseno']."' " ;
		$other=FOtherLoss::model()->findAllBySql($sqlo);
		if(!empty($other))
		$this->render('reportother',array('model'=>$other));
		
		if(empty($other)&&empty($wild)&&empty($man))
		{
		$msg='<font color="#FF0000">आपके द्वारा दर्ज केस संख्या मान्य नहीं है. </font>';
		$this->render('search',array('msg'=>$msg));
		}

		}else				
		$this->render('search',array('msg'=>$msg));
		
	}

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}
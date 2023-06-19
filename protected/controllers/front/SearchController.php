<?php

class SearchController extends Controller
{
	public $layout='//layouts/site_main';
	
	public function actionJobsearch()
	{
		$this->render('jobsearch');
	}
	
	public function actionPeoplesearch()
	{
		$this->layout='//layouts/recruiter_main';
		
		$this->render('people_search');
	}

	public function actionIndex()
	{
		$this->render('index');
	}

	public function actionAdvance()
	{
		$this->render('advance');
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
	*/

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
}
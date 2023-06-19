<?php

class UserController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/main';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
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
				'actions'=>array('sendmail'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array(''),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete','create','update','active','inactive'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new User(registration);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
$roles = array(
   
    '2' => 'Job Seeker', 
    '3'=> 'Employer',
	
);
$model->status=1;	
		if(isset($_POST['User']))
		{
			$model->attributes=$_POST['User'];
			if($model->save())
			{
				$econtent=EmailTemplates::model()->findByPk(1);
				$message = $econtent->content;
				$searchtext  = array('{username}', '{password}', '{firstname}', '{lastname}');
				$replace = array($_POST['User']['username'], $_POST['User']['password'], $_POST['User']['firstname'], $_POST['User']['lastname']);
				
				$message= str_replace($searchtext, $replace,$message);
				$msgbody= $this->renderPartial('//emailTemplates/emailtemplate', array('emailcontent'=>$message),true);
				//$mailer = Yii::createComponent('application.extensions.mailer.EMailer');
				Yii::app()->mailer->IsMail(true);
				Yii::app()->mailer->From = 'alankarcool@phptrooper.com';
				Yii::app()->mailer->AddAddress($_POST['User']['email']);
				Yii::app()->mailer->FromName = 'Admin';
				Yii::app()->mailer->CharSet = 'UTF-8';
				Yii::app()->mailer->Subject = $econtent->subject;
				Yii::app()->mailer->IsHTML(true);
				Yii::app()->mailer->Body = $msgbody;
				Yii::app()->mailer->Send();
				
				Yii::app()->user->setFlash('success', "Record Has Been Inserted");
				$this->redirect(array('admin'));
			}
		}

		$this->render('create',array(
			'model'=>$model,'roles'=>$roles
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		
		$model=$this->loadModel($id);
$model->setScenario('upate_profile');
$roles = array(
   
    '2' => 'Job Seeker', 
    '3'=> 'Employer',
	
);
if(!isset($_POST['User']))
		{
$model->password='';
		}
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
				
		if(isset($_POST['User']))
		{
			//$model->attributes=$_POST['User'];
			
			if(!empty($_POST['User']['password']))
			{
				$model->password=$_POST['User']['password'];
			}
			else
			{
			$model->password='';	
				}
			$model->username=$_POST['User']['username'];
			$model->firstname=$_POST['User']['firstname'];
			$model->lastname=$_POST['User']['lastname'];
			$model->email=$_POST['User']['email'];
			$model->status=$_POST['User']['status'];
			$model->role=$_POST['User']['role'];
				if($model->save())
			{
				Yii::app()->user->setFlash('success', "Record Has Been Updated");
				$this->redirect(array('admin'));
			}
		}

		$this->render('update',array(
			'model'=>$model,'roles'=>$roles
		));
	}
	


	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('User');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new User('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['User']))
			$model->attributes=$_GET['User'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=User::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='user-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
	
		 /*
	 *To change status to active
	 */
	public function actionActive($id)
	{
		$model=new User;
		$status=0;
		$changestatus=$model->updateAll(array( 'status' => $status ), 'user_id = '.$id );
		if($changestatus){
			Yii::app()->user->setFlash('success', "Status Has Been Changed Successfully");
				$this->redirect(array('admin'));
			
			}
		
	}
	
	 /*
	 *To change status to inactive
	 */
	public function actionInactive($id)
	{
		$model=new User;
		$status=1;
		$changestatus=$model->updateAll(array( 'status' => $status ), 'user_id = '.$id );
		if($changestatus){
			Yii::app()->user->setFlash('success', "Status Has Been Changed Successfully");
				$this->redirect(array('admin'));
			
			}
		
	}
	
	public function actionSendmail()
	{
		
$message = 'Hello World!';
Yii::app()->mailer->IsMail();
Yii::app()->mailer->From = 'alankarcool@phptrooper.com';
Yii::app()->mailer->FromName = 'Wei';
Yii::app()->mailer->IsMail();
Yii::app()->mailer->AddAddress('alankar.singh1985@gmail.com');
Yii::app()->mailer->Subject = 'Yii rulez!';
Yii::app()->mailer->Body = $message;

Yii::app()->mailer->IsHTML(true);
echo "<pre>";
print_r(Yii::app()->mailer);
if(Yii::app()->mailer->Send())
	echo "Mail send";
else
	echo "Mail not send".print_r(error_get_last(), true);	
		
		}
}

<?php

class UserController extends Controller
{

	public $layout='//layouts/jobseeker_main';

	// Uncomment the following methods and override them if needed
	
	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('signin', 'signup', 'confirm', 'verify', 'sanpshot'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('summery', 'education', 'experiance', 'skill', 'basic_info', 'resume', 'summery', 'myaccount'),
				'users'=>array('@'),
				'expression'=>'isset($user->role) && ($user->role==="joobseeker")',
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}
	
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
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
	
	public function actionIndex()
	{
		$this->render('index');
	}
	
	public function actionConfirm()
	{
		$this->render('confirm');
	}
	
	public function actionSignup()
	{
		$this->pageTitle  = 'MAXAUX.COM - Sign up';
		$user = new User('signup');
		if(isset($_POST['Signup']))
		{
			$fullname = $_POST['name'];
			$password = $_POST['password'];
			$email = $_POST['email'];
			
			$user->fullname = $fullname;
			$exp = explode(" ",$fullname);
			if(count($exp)==2)
			{
				$user->firstname = $exp[0];
				$user->lastname = $exp[1];
			}
			else
			{
				$user->firstname = $exp[0];
				$user->middle = $exp[1];
				$user->lastname = $exp[2];
			}
			$user->email = $email;
			$user->username = $email;
			$user->password = $password;
			$user->cpassword = $_POST['cpassword'];
			$user->role = 2;
			$user->status = 0;
			//$dt = date('H').'-'.date('i').'-'.date('s').'-'.date('m').'-'.date('d').'-'.date('Y');
			//$user->created = "$dt";
			$user->created_by = 0;
			$user->verify_code = strtoupper(md5(strtotime(now)));
			$user->rememberMe = $_POST['rememberMe'];;
			if($user->save())
			{
				
				$userid = Yii::app()->db->getLastInsertId();
				$user_aft_ins = User::model()->findByPk($userid);
				$user_aft_ins->password = md5($password);
				$user_aft_ins->save();
				
				// Email ID
				$to = $email;
				
				// subject
				$subject = 'Activate Your account to Maxaux';
				
				$sitepath = 'http://www.way4goals.com/maxaux';
				//$sitepath = 'http://localhost/cms/';
				$code = $user->verify_code;
				
				// message
				$message = "
				<html>
				<head>
				  <title>Activate Your account to Maxaux</title>
				</head>
				<body>
				  <p>Hello Ashu, </p>
				  <table>
					<tr>
					  <th align=\"left\">Congratulations! You've just created an account to enable Maxaux.</th>
					</tr>
					<tr>
					  <td>But you're not finished yet.</td>
					</tr>
					<tr>
					  <td>To activate your account and confirm ownership of this email address, click the link below and re-enter your login information on the following page:</td>
					</tr>
					<tr>
					  <td><a href=\"$sitepath/user/verify/$code\">Activate</a></td>
					</tr>
					<tr>
					  <td>Remember to confirm your email address today, so you can start using your new account.</td>
					</tr>
					<tr>
					  <td>Sincerely</td>
					</tr>
					<tr>
					  <td>Maxaux Team</td>
					</tr>
				  </table>
				</body>
				</html>";
				
				// To send HTML mail, the Content-type header must be set
				$headers  = 'MIME-Version: 1.0' . "\r\n";
				$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
				
				// Additional headers
				$headers .= "To: $fullname <$email>" . "\r\n";
				//$headers .= "From: Maxaux Team <ashutosh2801@gmail.com>" . "\r\n";
				
				//echo $to.'<br />'.$subject.'<br />'.$message;
				// Mail it
				//if(mail($to, $subject, $message, $headers))
				//$this->redirect("confirm");
			}
		}
		
		$this->render('signup', array('user'=>$user));
	}


	public function actionVerify($code)
	{
		$this->pageTitle  = 'MAXAUX.COM - Verify';
		
		$user = User::model()->findByAttributes(array('verify_code'=>$code));
		if(count($user)>0)
		{
			$user1 = User::model()->findByAttributes(array('verify_code'=>$code, 'status'=>1));
			if(count($user1)>0)
			{
				Yii::app()->user->setFlash("title","Error!");
				Yii::app()->user->setFlash("error","Your account has been already activated!");
			}
			else
			{
				//$user2 = User::model()->findByPk($user->user_id);
				$user->status = 1;
				if($user->save())
				{
					Yii::app()->user->setFlash("title","Success!");
					Yii::app()->user->setFlash("success","Your account has been activated.");
				}
			}
		}
		else
		{
			Yii::app()->user->setFlash("title","Error!");
			Yii::app()->user->setFlash("error","Invalid verification code!");
		}
		$this->render('verify');
	}
	
	
	/**
	 * Displays the login page
	 */
	 

	public function actionSignin()
	{
		$this->pageTitle  = 'MAXAUX.COM - Sign in';
		
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
			$this->redirect('myaccount');
				//$this->redirect(Yii::app()->user->returnUrl);
		}
		// display the login form
		$this->render('signin',array('model'=>$model));
	}
	
	public function actionSanpshot()
	{
		$this->pageTitle = 'User Sanpshot';

		$this->render('sanpshot');
	}

		
	public function actionSummery()
	{
		$this->pageTitle = ucfirst(Yii::app()->user->front_firstname) . ' Summery';

		$this->render('summery');
	}
	
	public function actionMyaccount()
	{
		$this->pageTitle = ucfirst(Yii::app()->user->front_firstname) . ' Account';

		$this->render('myaccount');
	}
	
	public function actionEducation()
	{
		$this->pageTitle = ucfirst(Yii::app()->user->front_firstname) . ' Educations';
		
		$education = new JobseekerEducation;
		$user = new User;
		if(isset($_POST['JobseekerEducation']))
		{
			$education->attributes=$_POST['JobseekerEducation'];
			if($education->validate())
			{
				$this->refresh();
			}
		}
		$this->render('education', array("Education"=>$education, "User"=>$user));
	}

	public function actionExperiance()
	{
		$this->pageTitle = ucfirst(Yii::app()->user->front_firstname) . ' Experiances';

		$this->render('experiance');
	}

	public function actionSkill()
	{
		$this->pageTitle = ucfirst(Yii::app()->user->front_firstname) . ' Skills';

		$this->render('skill');
	}

	public function actionBasic_info()
	{
		$this->pageTitle = ucfirst(Yii::app()->user->front_firstname) . ' Basic information';
		$basic=User::model()->findByAttributes(array('user_id'=>Yii::app()->user->front_user_id));

		if(isset($_POST['basicUpdate']))
		{
			$basic=User::model()->findByAttributes(array('user_id'=>Yii::app()->user->front_user_id));
			$basic->fullname=$_POST['fullname'];
			$basic->gender=$_POST['gender'];
			$basic->birthday=$_POST['mm']."/".$_POST['dd']."/".$_POST['yy'];
			$basic->relation_status=$_POST['maritalStatus'];
			$basic->update();
		}
		
		if(isset($_POST['contactUpdate']))
		{
			$basic=User::model()->findByAttributes(array('user_id'=>Yii::app()->user->front_user_id));
			$basic->permanent_address=$_POST['paddress'];
			$basic->current_location=$_POST['clocation'];
			$basic->preferred_location=$_POST['plocation'];
			$basic->mobile_phones=$_POST['omobile'];
			$basic->other_email=$_POST['oemail'];
			$basic->update();
		}
		$this->render('basic_info',array('basic'=>$basic));
	}

	public function actionResume()
	{
		$this->pageTitle = ucfirst(Yii::app()->user->front_firstname) . ' Resume';

		$this->render('resume');
	}

	
}
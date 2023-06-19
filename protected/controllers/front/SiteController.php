<?php

class SiteController extends Controller {

    public $layout = '//layouts/main';

    /**
     * Declares class-based actions.
     */
    public function actions() {
        return array(
            // captcha action renders the CAPTCHA image displayed on the contact page
            'captcha' => array(
                'class' => 'CCaptchaAction',
                'backColor' => 0xFFFFFF,
            ),
            // page action renders "static" pages stored under 'protected/views/site/pages'
            // They can be accessed via: index.php?r=site/page&view=FileName
            'page' => array(
                'class' => 'CViewAction',
            ),
        );
    }

    /**
     * This is the default 'index' action that is invoked
     * when an action is not explicitly requested by users.
     */
    public function actionIndex() {
        //renders the view file 'protected/views/site/index.php'
        // using the default layout 'protected/views/layouts/main.php'
        $this->pageTitle = 'Welcome :: Parvartiya Maha Parishad';

        
        $this->render('index');
    }

    public function actionAbout() {
        
		$this->pageTitle = 'About Us :: Parvartiya Maha Parishad';
		$this->render('about');
    }

       
    public function actionSignup() {
        $model = new Userregistration;
        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Userregistration'])) {

            $model->attributes = $_POST['Userregistration'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->user_id));
        }

        $this->render('signup', array('model' => $model));
    }

    public function actionForgotPassword() {
        $this->render('forgotpassword');
    }


    public function actionServices() {
        $this->render('services');
    }
         
//	
//	public function actionContact() {
//        $model = new ContactUs;
//        
//        $headers = "MIME-Version: 1.0" . "\r\n";
//        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
//
//// More headers
//        $headers .= 'From: <pratap.bisht7@gmail.com>' . "\r\n";
//        
//        $msg='';
//        if (isset($_POST['ContactUs'])) {
//            $model->attributes = $_POST['ContactUs'];
//            $model->month = date('m');
//          $model->year = date('Y');
//
//            if ($model->save()) {
//
//               $msg = "Thanks for contacting with us. We will get you shortly.";
//
//// user mail code 
//                mail($model->email, "Thanks for Contacting With Us", $model->message, $headers);
//                
//                //admin mail code
//                
//                 mail("pratap.bisht7@gmail.com", "New Contact Request", $model->message, $headers);
//
//            }
//            else
//                $msg="Some error occured. Please try again";
//        }
//
//        $this->render('contact',array('model'=>$model,'msg'=>$msg));
//    }
      
		
	public function actionNews() {
        $this->render('news');
    }
	
    public function actionContact() {
        $this->render('contact');
    }
	
	
    public function actionGallery() {
        $this->render('gallery');
    } 
    
     public function actionMember() {
        $this->render('member');
    } 
    

   
  
    public function actionError() {
        if ($error = Yii::app()->errorHandler->error) {
            if (Yii::app()->request->isAjaxRequest)
                echo $error['message'];
            else
                $this->render('error', $error);
        }
    }

   
    /**
     * Displays the loginn page
     */
    public function actionLogin() {
        $this->layout = "main";

        $model = new UserRegistration('login');

        // if it is ajax validation request
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'userregistration-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }

        // collect user input data
        if (isset($_POST['UserRegistration'])) {
            $model->attributes = $_POST['UserRegistration'];
            // validate user input and redirect to the previous page if valid
            if ($model->login()) {
                $log = new LoginLog;
                $log->login_id = Yii::app()->user->user_id;
                $log->ip_address = $_SERVER['REMOTE_ADDR'];
                $log->log_device = $_SERVER['HTTP_USER_AGENT'];
                $log->save();
                $this->redirect(Yii::app()->user->returnUrl);
            }
        }
        // display the login form
        $this->render('login', array('model' => $model));
    }

    public function actionRegistration() {
        $this->render('registration');
    }
    
    public function actionFestival() {
        $this->render('festival');
    }

    /**
     * Logs out the current user and redirect to homepage.
     */
    public function actionLogout() {
        Yii::app()->user->logout();
        $this->redirect(Yii::app()->homeUrl);
    }

    public function actionPrivacy() {
        $this->pageTitle = 'Affection Music Records - Privacy Policy';
        $this->render('privacy');
    }

    public function actionTerms() {
        $this->pageTitle = 'Affection Music Records - Terms and Conditions';
        $this->render('terms');
    }

}

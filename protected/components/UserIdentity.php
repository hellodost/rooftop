<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	private $_id;
	public function authenticate()
	{
		//$users=array(
			// username => password
		//	'demo'=>'demo',
		//	'admin'=>'admin',
		//);
		//print_r($this);
		$user=UserRegistration::model()->findByAttributes(array('Email_ID'=>$this->username,'Password'=>$this->password));
	
		if ($user===null)
		{
			// No user found!
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		}
		else if ($user->Password !== $this->password )
		{
			// Invalid password!
			$this->errorCode=self::ERROR_PASSWORD_INVALID;	
		}
		else
		{
		 // Okay!
		$this->errorCode=self::ERROR_NONE;
		// Store the role in a session:
		
		$this->setState('front_email', $user->Email_ID);
		
		
	   $this->_id = $user->User_ID;
	   }
		return !$this->errorCode;
	}
	
	public function getId()
	{
		return $this->_id;
	}
	/*public function authenticate()
	{
		$users=array(
			// username => password
			'demo'=>'demo',
			'admin'=>'admin',
		);
		if(!isset($users[$this->username]))
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		else if($users[$this->username]!==$this->password)
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		else
			$this->errorCode=self::ERROR_NONE;
		return !$this->errorCode;
	}*/
}
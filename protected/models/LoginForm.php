<?php

/**
 * LoginForm class.
 * LoginForm is the data structure for keeping
 * user login form data. It is used by the 'login' action of 'SiteController'.
 */
class LoginForm extends CFormModel
{
	public $username;
	public $password;
	public $rememberMe;
	private $_identity;

	/**
	 * Declares the validation rules.
	 * The rules state that username and password are required,
	 * and password needs to be authenticated.
	 */
	public function rules()
	{
		return array(
			// username and password are required
			array('username, password', 'required'),
			// rememberMe needs to be a boolean
			array('rememberMe', 'boolean'),
            array('username', 'length', 'max'=>32),
			// password needs to be authenticated
			array('password', 'authenticate'),
			array('username, password', 'safe'),
		);
	}

	/**
	 * Declares attribute labels.
	 */
	public function attributeLabels()
	{
		return array(
			'username' => Yii::t('attribute', 'Username'),
			'password' => Yii::t('attribute', 'Password'),
			'rememberMe' => Yii::t('attribute', 'Remember me next time'),
		);
	}

	/**
	 * Authenticates the password.
	 * This is the 'authenticate' validator as declared in rules().
	 */
	public function authenticate($attribute,$params)
	{
		// we only want to authenticate when no input errors
		if(!$this->hasErrors())
		{
			$this->_identity=new UserIdentity($this->username,$this->password);
			$this->_identity->authenticate();

			switch($this->_identity->errorCode)
			{
				case UserIdentity::ERROR_NONE:
					Yii::app()->user->login($this->_identity);
					break;
				case UserIdentity::ERROR_USERNAME_INVALID:
					$this->addError('username', Yii::t('phrase', 'Username is incorrect.'));
					break;
				default: //UserIdentity::ERROR_PASSWORD_INVALID
					$this->addError('password', Yii::t('phrase', 'Password is incorrect.'));
					break;				
			}
		}
	}

	/**
	 * Logs in the user using the given username and password in the model.
	 * @return boolean whether login is successful
	 */
	public function login()
	{
		if($this->_identity===null)
		{
			$this->_identity=new UserIdentity($this->username,$this->password);
			$this->_identity->authenticate();
		}
		if($this->_identity->errorCode===UserIdentity::ERROR_NONE)
		{
			$duration=$this->rememberMe ? 3600*24*30 : 0; // 30 days
			Yii::app()->user->login($this->_identity,$duration);
			return true;
		}
		else
			return false;
	}
}

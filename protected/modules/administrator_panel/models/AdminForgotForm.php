<?php

/**
 * LoginForm class.
 * LoginForm is the data structure for keeping
 * user login form data. It is used by the 'login' action of 'SiteController'.
 */
class AdminForgotForm extends CFormModel
{
	/*public $username;
	public $password;
	public $subject;
	public $body;*/
	public $email;

//	private $_identity;

	/**
	 * Declares the validation rules.
	 * The rules state that username and password are required,
	 * and password needs to be authenticated.
	 */
	public function rules()
	{
		return array(
			// username and password are required
			array('email', 'required'),
			// email has to be a valid email address
			array('email', 'email'),
			// 
			/*array('username, password, subject, body', 'safe'),
			// password needs to be authenticated
			array('password', 'authenticate'),*/
		);
	}

	/**
	 * Declares attribute labels.
	 */
	public function attributeLabels()
	{
		return array(
			'email'=>'email',
		);
	}
}

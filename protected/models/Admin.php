<?php
class Admin extends EMongoDocument
{
	public $username;
	public $password;
	public $realname;
	public $email;
	public $status;

	public static function model($className = __CLASS__){
		return parent::model($className);
	}
	public function rules()
	{
		return array(
				array('username,password,email,realname,status','required'),
				array('email','email'),
				//array('username','unique','caseSensitive'=>false),不知道为什么不行
				array('status', 'in', 'range' => array(0, 1))
				
				
		);
	}
	public function attributeLabels()
	{
		return array(
				'username'=>'username',
				'password'=>'password',
		);
	}
	public function getCollectionName()
	{
		return 'admin';
	}

}
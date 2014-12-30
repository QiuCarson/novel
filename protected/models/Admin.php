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
	/*
	public function primaryKey()
	{
		return '_id'; // Model field name, by default the _id field is used
	}*/
	public function indexes()
	{
		return array(
				'index1_name'=>array(
						'key'=>array(
								'username'=>EMongoCriteria::SORT_ASC
								//'field_name.embeded_field'=>EMongoCriteria::SORT_DESC
						),
						'unique'=>true,
				)
		);
	}
	public function rules()
	{
		return array(
				array('username,email,realname,status','required'),
				array('password','required','on'=>'add'),
				array('email','email'),
				//array('username','unique'),
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
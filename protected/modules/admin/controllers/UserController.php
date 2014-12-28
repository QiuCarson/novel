<?php
class UserController extends Controller
{
	
	public function actionIndex()
	{
		$this->render('index');
	}
	public function actionAdd()
	{
		$model=new Admin();
		$model->status = 1;
		$model->attributes=Yii::app()->request->getParam('Admin');
		if(Yii::app()->request->getParam('Admin') && $model->validate())
		{
			$get=Yii::app()->request->getParam('Admin');
			$model->password=md5($get['password']);
			if($model->save())
			{
				$this->redirect('user/index');
			}
		}
		$this->render('add',array('model'=>$model));
	}

}
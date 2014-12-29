<?php
class UserController extends Controller
{
	
	public function actionIndex()
	{
		$criteria = new EMongoCriteria;
		#$criteria->order = 'username desc'; //按什么字段来排序
		$model=Admin::model();
		$count = $model->count($criteria);//count() 函数计算数组中的单元数目或对象中的属性个数。
		$pager = new CPagination($count);
		$pager ->pageSize = 12; //每页显示的行数
		$criteria->limit($pager ->pageSize);
		$criteria->offset($pager->getCurrentPage()*$pager ->pageSize);
		$list = $model->findAll($criteria);//查询所有的数据
		
		
		$this->render('index',array('list'=>$list,'pages'=>$pager));
		
		
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
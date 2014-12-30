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
				Yii::app()->user->setFlash('success', '添加成功');
				$this->redirect(array('user/index'));
			}
			else
			{
				Yii::app()->user->setFlash('error', '修改失败');
			}
		}
		$this->render('add',array('model'=>$model));
	}
	public function actionDel($id)
	{
		
		$result = Admin::model()->deleteByPk(new MongoID($id));
    	if($result !== true)
    	{	
    		Yii::app()->user->setFlash('success', '删除成功');
		}
		else
		{
			Yii::app()->user->setFlash('error', '删除失败');
		}
		$this->redirect(array('user/index'));
	}
	
	public function actionEdit($_id)
	{
		$model=Admin::model();
		$adminModel=$model->findByPk(new MongoID($_id));
		$get=Yii::app()->request->getParam('Admin');
		$adminModel->attributes=$get;
		if($get && $adminModel->validate())
		{
			$get=Yii::app()->request->getParam('Admin');
			
			if(!empty($get['password']))
			{	
				$adminModel->password=md5($get['password']);
			}
			if($adminModel->save())
			{
				Yii::app()->user->setFlash('success', '修改成功');
				$this->redirect(array('user/index'));
			}
			else
			{
				Yii::app()->user->setFlash('error', '修改失败');
				$this->redirect(array('user/index'));
			}
		}
		$adminModel->password='';
		$this->render('edit',array('model'=>$adminModel));
	}
}
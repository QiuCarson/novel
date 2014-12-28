<?php 
class LoginController extends Controller
{
	public function actions(){
		return array(
				'captcha'	=> array(
						'class'	=> 'system.web.widgets.captcha.CCaptchaAction',
						'height' => 36,
						'width'	 => 80,
						'minLength'=> 4,
						'maxLength'=> 4
	
				),
	
		);
	}
	public function actionLogin()
	{		
		
		$loginForm=new LoginForm();
		if(isset($_POST['LoginForm']))
		{
			$loginForm->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($loginForm->validate() && $loginForm->login())
				$this->redirect(array('default/index'));
		}
		$this->render('login',array('loginForm'=>$loginForm));
	}
}
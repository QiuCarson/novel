<!DOCTYPE html>
<html>
<head>
    <title>后台管理系统</title>
	<meta charset="UTF-8">
   <link rel="stylesheet" type="text/css" href="<?php echo $this->module->assetsUrl; ?>/admin/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $this->module->assetsUrl; ?>/admin/css/bootstrap-responsive.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $this->module->assetsUrl; ?>/admin/css/style.css" />
    <script type="text/javascript" src="<?php echo $this->module->assetsUrl; ?>/admin/js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo $this->module->assetsUrl; ?>/admin/js/bootstrap.js"></script>
    <style type="text/css">
        body {
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #f5f5f5;
        }

        .form-signin {
            max-width: 300px;
            padding: 19px 29px 29px;
            margin: 0 auto 20px;
            background-color: #fff;
            border: 1px solid #e5e5e5;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
            -webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, .05);
            -moz-box-shadow: 0 1px 2px rgba(0, 0, 0, .05);
            box-shadow: 0 1px 2px rgba(0, 0, 0, .05);
        }

        .form-signin .form-signin-heading,
        .form-signin .checkbox {
            margin-bottom: 10px;
        }

        .form-signin input[type="text"],
        .form-signin input[type="password"] {
            font-size: 16px;
            height: auto;
            margin-bottom: 15px;
            padding: 7px 9px;
        }

    </style>  
</head>
<body>
<div class="container">
<?php 
$form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
	'htmlOptions'=>array(
			'class'=>'form-signin'
)	
)); ?>
   <!--   <form class="form-signin" method="post" action="../index.html">-->
        <h2 class="form-signin-heading">登录系统</h2>
        <?php echo $form->textField($loginForm,'username',array(
        			'class'=>'input-block-level',
        			'placeholder'=>'用户名')); ?>
        <?php echo $form->error($loginForm,'username'); ?>
        
        <?php echo $form->passwordField($loginForm,'password',array(
					'class'=>'input-block-level',
					'placeholder'=>'密码'
		)); ?>
		<?php echo $form->error($loginForm,'password'); ?>
		
		<?php echo $form->textField($loginForm,'verifyCode',array(
        			'class'=>'input-medium',
        			'placeholder'=>'验证码')); ?>
        <?php echo $form->error($loginForm,'verifyCode'); ?>
        <?php $this->widget('CCaptcha',array(
        			'showRefreshButton'=>false,
        			'clickableImage'=>true,
        			'imageOptions'=>array(
        					'alt'=>'点击换图',
        					'title'=>'点击换图',
        					'style'=>'cursor:pointer'))); ?>
        <p><button class="btn btn-large btn-primary" type="submit">登录</button></p>
  <?php $this->endWidget(); ?>

</div>
</body>
</html>
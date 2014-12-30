<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="<?php echo $this->module->assetsUrl; ?>/admin/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $this->module->assetsUrl; ?>/admin/css/bootstrap-responsive.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $this->module->assetsUrl; ?>/admin/css/style.css" />
    <script type="text/javascript" src="<?php echo $this->module->assetsUrl; ?>/admin/js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo $this->module->assetsUrl; ?>/admin/js/jquery.sorted.js"></script>
    <script type="text/javascript" src="<?php echo $this->module->assetsUrl; ?>/admin/js/bootstrap.js"></script>
    <script type="text/javascript" src="<?php echo $this->module->assetsUrl; ?>/admin/js/ckform.js"></script>
    <script type="text/javascript" src="<?php echo $this->module->assetsUrl; ?>/admin/js/common.js"></script>

 

    <style type="text/css">
        body {
            padding-bottom: 40px;
        }
        .sidebar-nav {
            padding: 9px 0;
        }

        @media (max-width: 980px) {
            /* Enable use of floated navbar text */
            .navbar-text.pull-right {
                float: none;
                padding-left: 5px;
                padding-right: 5px;
            }
        }
 

    </style>
</head>
<body>
<?php 
$form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
	'htmlOptions'=>array(
			'class'=>'definewidth m20'
)	
)); ?>
<?php echo $form->hiddenField($model,'_id'); ?>
<table class="table table-bordered table-hover definewidth m10">
    <tr>
        <td width="10%" class="tableleft">登录名</td>
        <td><?php echo $form->textField($model,'username'); ?><?php echo $form->error($model,'username'); ?></td>
    </tr>
    <tr>
        <td class="tableleft">密码</td>
        <td><?php echo $form->passwordField($model,'password'); ?><?php echo $form->error($model,'password'); ?></td>
    </tr>
    <tr>
        <td class="tableleft">真实姓名</td>
        <td><?php echo $form->textField($model,'realname'); ?><?php echo $form->error($model,'realname'); ?></td>
    </tr>
    <tr>
        <td class="tableleft">邮箱</td>
        <td><?php echo $form->emailField($model,'email'); ?><?php echo $form->error($model,'email'); ?></td>
    </tr>
    <tr>
        <td class="tableleft">状态</td>
        <td>
        	<?php echo $form->radioButtonList($model,'status',
        			array(1=>'启用',0=>' 禁用'),
        			array('template'=>'<span style="display:inline-block;">{input}</span> <span style="display:inline-block;width:60px;">{label}</span>','separator'=>'')); ?>	
             
          <?php echo $form->error($model,'status'); ?>   
        </td>
    </tr>
   
    <tr>
        <td class="tableleft"></td>
        <td>
            <button type="submit" class="btn btn-primary" type="button">保存</button> &nbsp;&nbsp;<a href="<?php echo $this->createUrl("index")?>"><span class="btn btn-success" >返回列表</span></a>
        </td>
    </tr>
</table>
 <?php $this->endWidget(); ?>
</body>
</html>

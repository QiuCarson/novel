<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="UTF-8">
   
 <link href="<?php echo $this->module->assetsUrl; ?>/admin/css/bootstrap.min.css" rel="stylesheet">
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
<form class="form-inline definewidth m20" action="index.html" method="get">    
    用户名称：
    <input type="text" name="key" id="username"class="abc input-default" placeholder="" value="">&nbsp;&nbsp;  
    <button type="submit" class="btn btn-primary">查询</button>&nbsp;&nbsp; <a href="<?php echo $this->createUrl('add')?>"><span type="button" class="btn btn-success" id="addnew">新增用户</span></a>
</form>
<table class="table table-bordered table-hover definewidth m10">
    <thead>
    <tr>
        <th>用户名称</th>
        <th>真实姓名</th>
        <th>邮件</th>
        <th>状态</th>
        <th>操作</th>
        
    </tr>
    </thead>
    <?php foreach ($list as $val){?>
	     <tr>
            <td><?php echo $val->username;?></td>
            <td><?php echo $val->realname;?></td>
            <td><?php echo $val->email;?></td>
            <td><?php echo $val->status?"启用":"禁用";?></td>
            <td>
                <a class="btn btn-small btn-info" href="<?php echo $this->createUrl("edit",array("id"=>$val->_id))?>">编辑</a>
                <a class="btn btn-danger" href="<?php echo $this->createUrl("del",array("id"=>$val->_id))?>" onclick="javascript:return del();">删除</a>                
            </td>
        </tr>
        <?php }?>	
</table>
<div class="row">
<?php 
			$this->widget('CLinkPager', array(
				'header'	=>	false,
				'htmlOptions'=>array('class'=>'pagination pull-right page'),
				'firstPageLabel'	=> '首页',
				'lastPageLabel'	=> '末页',
				'prevPageLabel'	=> '上一页',
				'nextPageLabel'	=> '下一页',
				'pages'			=> $pages,
				'maxButtonCount'=> 5,
				'firstPageCssClass'=>false,
				'lastPageCssClass'=>false,
				'previousPageCssClass'=>false,
				'nextPageCssClass'=>false,
				'internalPageCssClass'=>false,
				'hiddenPageCssClass'=>'disabled',
				'selectedPageCssClass'=>'active'

				));
			
			
			
			
		 ?>
</div>
</body>
</html>
<script>


	function del()
	{
		if(confirm("确定要删除吗？"))
		{
			return true;	
		
		}
		return false;
	}
</script>
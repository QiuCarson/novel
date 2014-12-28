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
<form class="form-inline definewidth m20" action="index.html" method="get">    
    用户名称：
    <input type="text" name="key" id="username"class="abc input-default" placeholder="" value="">&nbsp;&nbsp;  
    <button type="submit" class="btn btn-primary">查询</button>&nbsp;&nbsp; <a href="<?php echo $this->createUrl('add')?>"><span type="button" class="btn btn-success" id="addnew">新增用户</span></a>
</form>
<table class="table table-bordered table-hover definewidth m10">
    <thead>
    <tr>
        <th>用户id</th>
        <th>用户名称</th>
        <th>真实姓名</th>
        <th>最后登录时间</th>
        <th>操作</th>
    </tr>
    </thead>
	     <tr>
            <td>2</td>
            <td>admin</td>
            <td>管理员</td>
            <td></td>
            <td>
                <a href="edit.html">编辑</a>                
            </td>
        </tr>	
</table>
</body>
</html>
<script>
    $(function () {
		$('#addnew').click(function(){
				window.location.href="add.html";
		 });

    });

	function del(id)
	{
		
		
		if(confirm("确定要删除吗？"))
		{
		
			var url = "index.html";
			
			window.location.href=url;		
		
		}
	
	
	
	
	}
</script>
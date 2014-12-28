<!DOCTYPE HTML>
<html>
<head>
    <title>后台管理系统</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="<?php echo $this->module->assetsUrl; ?>/admin/css/dpl-min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $this->module->assetsUrl; ?>/admin/css/bui-min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $this->module->assetsUrl; ?>/admin/css/main-min.css" rel="stylesheet" type="text/css" />
</head>
<body>

<div class="header">

    <div class="dl-title">
        <!--<img src="/chinapost/Public/assets/img/top.png">-->
    </div>

    <div class="dl-log">欢迎您，<span class="dl-log-user">root</span><a href="/chinapost/index.php?m=Public&a=logout" title="退出系统" class="dl-log-quit">[退出]</a>
    </div>
</div>
<div class="content">
    <div class="dl-main-nav">
        <div class="dl-inform"><div class="dl-inform-title"><s class="dl-inform-icon dl-up"></s></div></div>
        <ul id="J_Nav"  class="nav-list ks-clear">
            <li class="nav-item dl-selected"><div class="nav-item-inner nav-home">系统管理</div></li>		<li class="nav-item dl-selected"><div class="nav-item-inner nav-order">业务管理</div></li>

        </ul>
    </div>
    <ul id="J_NavContent" class="dl-tab-conten">

    </ul>
</div>
<script type="text/javascript" src="<?php echo $this->module->assetsUrl; ?>/admin/js/jquery-1.8.1.min.js"></script>
<script type="text/javascript" src="<?php echo $this->module->assetsUrl; ?>/admin/js/bui-min.js"></script>
<script type="text/javascript" src="<?php echo $this->module->assetsUrl; ?>/admin/js/common/main-min.js"></script>
<script type="text/javascript" src="<?php echo $this->module->assetsUrl; ?>/admin/js/config-min.js"></script>
<script>
<?php 
$baner="[
{id:'1',menu:[
	{text:'系统管理',items:[
		{id:'4',text:'用户管理',href:'".$this->createUrl('user/index')."'},
		{id:'6',text:'菜单设置',href:'Menu/index.html'}
		]
	}]
},
{id:'7',homePage : '9',
	menu:[
	{text:'小说管理',items:[
		{id:'9',text:'查询业务',href:'Node/index.html'}]
	}]
}
]";
?>
    BUI.use('<?php echo $this->createUrl('main')?>',function(){
        
    	  var config =   <?php echo $baner;?>;
     //  var config = [{id:'1',menu:[{text:'系统管理',items:[{id:'3',text:'角色管理',href:'Role/index.html'},{id:'4',text:'用户管理',href:'User/index.html'},{id:'6',text:'菜单管理',href:'Menu/index.html'}]}]},{id:'7',homePage : '9',menu:[{text:'业务管理',items:[{id:'9',text:'查询业务',href:'Node/index.html'}]}]}];
        new PageUtil.MainPage({
            modulesConfig : config
        });
    });
</script>

</body>
</html>
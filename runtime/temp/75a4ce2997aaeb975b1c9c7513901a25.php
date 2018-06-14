<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:60:"D:\www\edu\public/../application/index\view\index\index.html";i:1511637859;s:60:"D:\www\edu\public/../application/index\view\public\base.html";i:1511557853;s:60:"D:\www\edu\public/../application/index\view\public\meta.html";i:1511474915;s:62:"D:\www\edu\public/../application/index\view\public\header.html";i:1511667001;s:60:"D:\www\edu\public/../application/index\view\public\menu.html";i:1512397564;s:62:"D:\www\edu\public/../application/index\view\public\footer.html";i:1511474745;}*/ ?>
<!--_meta 作为公共模版分离出去-->
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="Bookmark" href="favicon.ico" >
    <link rel="Shortcut Icon" href="favicon.ico" />
    <!--[if lt IE 9]>
    <script type="text/javascript" src="__STATIC__/lib/html5.js"></script>
    <script type="text/javascript" src="__STATIC__/lib/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="__STATIC__/static/h-ui/css/H-ui.min.css" />
    <link rel="stylesheet" type="text/css" href="__STATIC__/static/h-ui.admin/css/H-ui.admin.css" />
    <link rel="stylesheet" type="text/css" href="__STATIC__/lib/Hui-iconfont/1.0.8/iconfont.css" />
    <link rel="stylesheet" type="text/css" href="__STATIC__/static/h-ui.admin/skin/default/skin.css" />
    <link rel="stylesheet" type="text/css" href="__STATIC__/static/h-ui.admin/css/style.css" />
    <!--<link rel="stylesheet" type="text/css" href="__STATIC__/static/h-ui/css/H-ui.min.css" />-->
    <!--<link rel="stylesheet" type="text/css" href="__STATIC__/static/h-ui.admin/css/H-ui.admin.css" />-->
    <!--<link rel="stylesheet" type="text/css" href="__STATIC__/lib/Hui-iconfont/1.0.8/iconfont.css" />-->
    <!--<link rel="stylesheet" type="text/css" href="__STATIC__/static/h-ui.admin/skin/default/skin.css" id="skin" />-->
    <!--<link rel="stylesheet" type="text/css" href="__STATIC__/static/h-ui.admin/css/style.css" />-->
    <!--[if IE 6]>
    <script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
    <script>DD_belatedPNG.fix('*');</script>
    <![endif]-->
    <!--/meta 作为公共模版分离出去-->


<title><?php echo (isset($title) && ($title !== '')?$title:'页面标题'); ?></title>
<meta name="keywords" content="<?php echo (isset($keywords) && ($keywords !== '')?$keywords:'页面关键字'); ?>">
<meta name="description" content="<?php echo (isset($dsc) && ($dsc !== '')?$dsc:'页面描述'); ?>">


</head>
<body>


<!--_header 作为公共模版分离出去-->
<header class="navbar-wrapper">
    <div class="navbar navbar-fixed-top">
        <div class="container-fluid cl"> <a class="logo navbar-logo f-l mr-10 hidden-xs" href="/aboutHui.shtml">教学管理系统</a> <a class="logo navbar-logo-m f-l mr-10 visible-xs" href="/aboutHui.shtml">H-ui</a>
            <span class="logo navbar-slogan f-l mr-10 hidden-xs">v1.0</span>
            <a aria-hidden="false" class="nav-toggle Hui-iconfont visible-xs" href="javascript:;">&#xe667;</a>
            <nav class="nav navbar-nav">
                <ul class="cl">
                    <li class="dropDown dropDown_hover"><a href="javascript:;" class="dropDown_A"><i class="Hui-iconfont">&#xe600;</i> 新增 <i class="Hui-iconfont">&#xe6d5;</i></a>
                        <ul class="dropDown-menu menu radius box-shadow">
                            <li><a href="javascript:;" onclick="article_add('添加资讯','article-add.html')"><i class="Hui-iconfont">&#xe616;</i> 资讯</a></li>
                            <li><a href="javascript:;" onclick="picture_add('添加资讯','picture-add.html')"><i class="Hui-iconfont">&#xe613;</i> 图片</a></li>
                            <li><a href="javascript:;" onclick="product_add('添加资讯','product-add.html')"><i class="Hui-iconfont">&#xe620;</i> 产品</a></li>
                            <li><a href="javascript:;" onclick="member_add('添加用户','member-add.html','','510')"><i class="Hui-iconfont">&#xe60d;</i> 用户</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <nav id="Hui-userbar" class="nav navbar-nav navbar-userbar hidden-xs">
                <ul class="cl">
                    <?php if(\think\Session::get('user_info.role') == '1'): ?>
                    <li>超级管理员</li>
                    <?php else: ?>
                    <li>管理员</li>
                    <?php endif; ?>
                    <li class="dropDown dropDown_hover"> <a href="#" class="dropDown_A"><?php echo session('user_info.name'); ?> <i class="Hui-iconfont">&#xe6d5;</i></a>
                        <ul class="dropDown-menu menu radius box-shadow">
                            <!--<li><a href="javascript:;" onClick="myselfinfo()">个人信息</a></li>-->
                            <!--<li><a href="#">切换账户</a></li>-->
                            <li><a href="<?php echo url('user/logout'); ?>">退出</a></li>
                        </ul>
                    </li>
                    <li id="Hui-skin" class="dropDown right dropDown_hover"> <a href="javascript:;" class="dropDown_A" title="换肤"><i class="Hui-iconfont" style="font-size:18px">&#xe62a;</i></a>
                        <ul class="dropDown-menu menu radius box-shadow">
                            <li><a href="javascript:;" data-val="default" title="默认（黑色）">默认（黑色）</a></li>
                            <li><a href="javascript:;" data-val="blue" title="蓝色">蓝色</a></li>
                            <li><a href="javascript:;" data-val="green" title="绿色">绿色</a></li>
                            <li><a href="javascript:;" data-val="red" title="红色">红色</a></li>
                            <li><a href="javascript:;" data-val="yellow" title="黄色">黄色</a></li>
                            <li><a href="javascript:;" data-val="orange" title="橙色">橙色</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>
<!--/_header 作为公共模版分离出去-->



<!--_menu 作为公共模版分离出去-->
<aside class="Hui-aside">

    <div class="menu_dropdown bk_2">
        <dl id="menu-article">
            <dt><i class="Hui-iconfont">&#xe60d;</i> 学生管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a href="<?php echo url('student/studentList'); ?>" title="学生列表">学生列表</a></li>
                </ul>
            </dd>
        </dl>
        <dl id="menu-picture">
            <dt><i class="Hui-iconfont">&#xe62d;</i> 教师管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a href="<?php echo url('teacher/teacherList'); ?>" title="教师列表">教师列表</a></li>
                </ul>
            </dd>
        </dl>
        <dl id="menu-product">
            <dt><i class="Hui-iconfont">&#xe616;</i> 班级管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a href="<?php echo url('grade/gradeList'); ?>" title="班级列表">班级列表</a></li>
                </ul>
            </dd>
        </dl>
        <dl id="menu-comments">
            <dt><i class="Hui-iconfont">&#xe62e;</i> 管理员管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a href="<?php echo url('user/adminList'); ?>" title="管理员列表">管理员列表</a></li>
                </ul>
            </dd>
        </dl>
    </div>
</aside>
<div class="dislpayArrow hidden-xs"><a class="pngfix" href="javascript:void(0);" onClick="displaynavbar(this)"></a></div>
<!--/_menu 作为公共模版分离出去-->



<section class="Hui-article-box">
	<nav class="breadcrumb"><i class="Hui-iconfont"></i> <a href="/" class="maincolor">首页</a> 
		<span class="c-999 en">&gt;</span>
		<span class="c-666">运行环境</span>
		<a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
	<div class="Hui-article">
		<article class="cl pd-20">
			<p class="f-20 text-success">学生课程教学管理系统</p>
			<p>登录次数：<?php echo \think\Session::get('user_info.login_count'); ?></p>
			<p>上次登录IP：<?php echo \think\Request::instance()->ip(); ?> 上次登录时间：<?php echo date("Y-m-d H:i:s",\think\Session::get('user_info.login_time')); ?></p>
			<table class="table table-border table-bordered table-bg mt-20">
				<thead>
					<tr>
						<th colspan="2" scope="col">服务器信息</th>
			        </tr>
		        </thead>
				<tbody>
					<tr>
						<th width="30%">服务器计算机名</th>
						<td><span id="lbServerName"><?php echo \think\Request::instance()->host(); ?></span></td>
					</tr>
					<tr>
						<td>服务器IP地址</td>
						<td><?php echo \think\Request::instance()->ip(); ?></td>
					</tr>
					<tr>
						<td>服务器域名</td>
						<td><?php echo \think\Request::instance()->domain(); ?></td>
					</tr>
					<tr>
						<td>当前PHP版本</td>
						<td><?php echo PHP_VERSION; ?></td>
					</tr>
					<tr>
						<td>服务器版本 </td>
						<td><?php echo PHP_OS; ?></td>
					</tr>
					<tr>
						<td>当前请求URL</td>
						<td><?php echo \think\Request::instance()->url(true); ?></td>
					</tr>
					<tr>
						<td>当前Session数量 </td>
						<td><?php echo count($_SESSION); ?></td>
					</tr>
					<tr>
						<td>当前SessionID </td>
						<td><?php echo session_id(); ?></td>
					</tr>
		</tbody>
	</table>
</article>
		<footer class="footer">
			<p>前端：开源框架H-ui-admin</p>
			<p>后端：thinkphp5(MVC框架)</p>
			<p>Copyright © 2017 wjx. All rights reserved.</p>
		</footer>
</div>
</section>


<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="__STATIC__/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="__STATIC__/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="__STATIC__/static/h-ui/js/H-ui.js"></script>
<script type="text/javascript" src="__STATIC__/static/h-ui.admin/js/H-ui.admin.page.js"></script>
<!--<script type="text/javascript" src="__STATIC__/lib/jquery/1.9.1/jquery.min.js"></script>-->
<!--<script type="text/javascript" src="__STATIC__/lib/layer/2.4/layer.js"></script>-->
<!--<script type="text/javascript" src="__STATIC__/static/h-ui/js/H-ui.js"></script>-->
<!--<script type="text/javascript" src="__STATIC__/static/h-ui.admin/js/H-ui.admin.page.js"></script>-->
<!--/_footer /作为公共模版分离出去-->



</body>
</html>
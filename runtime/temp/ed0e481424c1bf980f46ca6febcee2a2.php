<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:69:"D:\www\edu\public/../application/index\view\teacher\teacher_list.html";i:1512313817;s:60:"D:\www\edu\public/../application/index\view\public\base.html";i:1511557853;s:60:"D:\www\edu\public/../application/index\view\public\meta.html";i:1511474915;s:62:"D:\www\edu\public/../application/index\view\public\header.html";i:1511667001;s:60:"D:\www\edu\public/../application/index\view\public\menu.html";i:1512397564;s:62:"D:\www\edu\public/../application/index\view\public\footer.html";i:1511474745;}*/ ?>
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


<title><?php echo (isset($title) && ($title !== '')?$title:"标题"); ?></title>
<meta name="keywords" content="<?php echo (isset($keywords) && ($keywords !== '')?$keywords:'关键字'); ?>">
<meta name="description" content="<?php echo (isset($desc) && ($desc !== '')?$desc:'描述'); ?>">


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
    <nav class="breadcrumb">
        <i class="Hui-iconfont">&#xe67f;</i>
        <a href="<?php echo url('index/index'); ?>">首页</a> <span class="c-gray en">&gt;</span>
        教师管理 <span class="c-gray en">&gt;</span>
        教师列表<a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
    <div class="Hui-article">
        <article class="cl pd-20">

            <div class="cl pd-5 bg-1 bk-gray mt-20">
				<span class="l">
					<a href="javascript:;" onclick="unDelete()" class="btn btn-danger radius">
						<i class="Hui-iconfont">&#xe6e2;</i>
						批量恢复
					</a>
					<a href="javascript:;" onclick="member_add('添加教师','<?php echo url("teacher/teacherAdd"); ?>','','510')" class="btn btn-primary radius">
						<i class="Hui-iconfont">&#xe600;</i>
						添加教师
                    </a>
				</span>
                <span class="r">共有数据：<strong><?php echo $count; ?></strong> 条</span>
            </div>
            <div class="mt-20">
                <table class="table table-border table-bordered table-hover table-bg table-sort">
                    <thead>
                    <tr class="text-c">
                        <th width="50">ID</th>
                        <th width="50">姓名</th>
                        <th width="40">学历</th>
                        <th width="70">毕业学校</th>
                        <th width="90">手机号</th>
                        <th width="120">入职时间</th>
                        <th width="180">负责班级</th>
                        <th width="70">状态</th>
                        <th width="100">操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if(is_array($teacherList) || $teacherList instanceof \think\Collection || $teacherList instanceof \think\Paginator): $i = 0; $__LIST__ = $teacherList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <tr class="text-c">

                        <td><?php echo $vo['id']; ?></td>
                        <td><?php echo $vo['name']; ?></td>
                        <td><?php echo $vo['degree']; ?></td>
                        <td><?php echo $vo['school']; ?></td>
                        <td><?php echo $vo['mobile']; ?></td>
                        <td><?php echo $vo['hiredate']; ?></td>
                        <td><?php echo $vo['grade']; ?></td>

                        <td class="td-status">
                            <!--根据当前班级表中status值来确定显示内容-->
                            <?php if($vo['status'] == 1): ?>
                            <span class="label label-success radius">已启用</span>
                            <?php else: ?>
                            <span class="label radius">已停用</span>
                            <?php endif; ?>

                        </td>
                        <td class="td-manage">
                            <?php if($vo['status'] == 1): ?>
                            <a style="text-decoration:none" onClick="member_stop(this,'<?php echo $vo['id']; ?>')" href="javascript:;" title="停用">
                                <i class="Hui-iconfont">&#xe631;</i>
                            </a>
                            <?php else: ?>
                            <a style="text-decoration:none" onClick="member_start(this,'<?php echo $vo['id']; ?>')" href="javascript:;" title="启用">
                                <i class="Hui-iconfont">&#xe615;</i>
                            </a>
                            <?php endif; ?>
                            <a title="编辑" href="javascript:;" onclick="member_edit('教师编辑','<?php echo url("teacher/teacherEdit",["id"=>$vo["id"]]); ?>','','510')" class="ml-5" style="text-decoration:none">
                            <i class="Hui-iconfont">&#xe6df;</i>
                            </a>
                            <a title="删除" href="javascript:;" onclick="member_del(this,'<?php echo $vo['id']; ?>')" class="ml-5" style="text-decoration:none">
                                <i class="Hui-iconfont">&#xe6e2;</i>
                            </a>
                        </td>
                    </tr>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                    </tbody>
                </table>
            </div>
        </article>
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



<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="__STATIC__/lib/My97DatePicker/4.8/WdatePicker.js"></script>
<script type="text/javascript" src="__STATIC__/lib/datatables/1.10.0/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="__STATIC__/lib/laypage/1.2/laypage.js"></script>
<script type="text/javascript">
    $(function(){

        $('.table-sort tbody').on( 'click', 'tr', function () {
            if ( $(this).hasClass('selected') ) {
                $(this).removeClass('selected');
            }
            else {
                table.$('tr.selected').removeClass('selected');
                $(this).addClass('selected');
            }
        });
    });
    /*用户-添加*/
    function member_add(title,url,w,h){
        layer_show(title,url,w,h);
    }
    /*用户-查看*/
    function member_show(title,url,id,w,h){
        layer_show(title,url,w,h);
    }
    /*用户-停用*/
    function member_stop(obj,id){
        layer.confirm('确认要停用吗？',function(index){
            //此处请求后台程序，下方是成功后的前台处理……
            $.get("<?php echo url('teacher/setStatus'); ?>",{id:id});

            $(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="member_start(this,id)" href="javascript:;" title="启用"><i class="Hui-iconfont">&#xe6e1;</i></a>');
            $(obj).parents("tr").find(".td-status").html('<span class="label label-defaunt radius">已停用</span>');
            $(obj).remove();
            layer.msg('已停用!',{icon: 5,time:1000});
        });
    }

    /*用户-启用*/
    function member_start(obj,id){
        layer.confirm('确认要启用吗？',function(index){
            //此处请求后台程序，下方是成功后的前台处理……
            $.get("<?php echo url('teacher/setStatus'); ?>",{id:id});

            $(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="member_stop(this,id)" href="javascript:;" title="停用"><i class="Hui-iconfont">&#xe631;</i></a>');
            $(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">已启用</span>');
            $(obj).remove();
            layer.msg('已启用!',{icon: 6,time:1000});
        });
    }
    /*用户-编辑*/
    function member_edit(title,url,w,h){
        $.get(url); //执行控制器中的编辑操作
        layer_show(title,url,w,h);
    }

    /*用户-删除*/
    function member_del(obj,id) {
        $.get("<?php echo url('teacher/deleteTeacher'); ?>", {id: id});
        layer.confirm('确认要删除吗？', function (index) {
            $(obj).parents("tr").remove();
            layer.msg('已删除!', {icon: 1, time: 1000});
        });
    }

    //批量恢复(原模板中没有,自己动手,丰衣足食)
    function unDelete() {
        layer.confirm('确认要恢复吗？', function () {
            $.get("<?php echo url('teacher/unDelete'); ?>");

            layer.msg('已恢复!', {icon: 1, time: 1000}); //消息弹层1秒后消失
            window.location.reload(); //重新加载页面,显示所有数据
        });

    }
</script>
<!--/请在上方写此页面业务相关的脚本-->

</body>
</html>
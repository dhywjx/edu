<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:65:"D:\www\edu\public/../application/index\view\grade\grade_edit.html";i:1512272191;s:60:"D:\www\edu\public/../application/index\view\public\base.html";i:1511557853;s:60:"D:\www\edu\public/../application/index\view\public\meta.html";i:1511474915;s:62:"D:\www\edu\public/../application/index\view\public\footer.html";i:1511474745;}*/ ?>
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
<meta name="description" content="<?php echo (isset($dsc) && ($dsc !== '')?$dsc:'描述'); ?>">


</head>
<body>






<article class="cl pd-20">


    <form action="" method="post" class="form form-horizontal" id="form-grade-edit">
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>班级：</label>
            <div class="formControls col-xs-8 col-sm-9">

                <input  type="text" class="input-text" value="<?php echo $grade_info['name']; ?>" placeholder="" id="name" name="name">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>学制：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" autocomplete="off" value="<?php echo $grade_info['length']; ?>"  placeholder="学制" id="length" name="length">
            </div>
        </div>

        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>学费：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" placeholder="学费" name="price" id="price" value="<?php echo $grade_info['price']; ?>">
            </div>
        </div>

        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3"><span class="c-red"></span>授课教师：</label>
            <div class="formControls col-xs-8 col-sm-9">

                <input type="text" class="input-text disabled readonly "  readonly placeholder="授课教师" name="teacher" id="teacher" value="<?php echo $grade_info['teacher']; ?>" >
            </div>
        </div>



        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3">启用状态：</label>
            <div class="formControls col-xs-8 col-sm-9"> <span class="select-box" style="width:150px;">
				<select class="select" name="status" size="1">
					<?php if($grade_info['status'] == '已开课'): ?>
					<option value="1" selected>已开课</option>
					<option value="0" >已停课</option>
					<?php else: ?>
					<option value="1" >已开课</option>
					<option value="0" selected>已停课</option>
					<?php endif; ?>

				</select>
				</span>
            </div>
        </div>


        <!--将当前记录的id做为隐藏域发送到服务器-->
        <input type="hidden" value="<?php echo $grade_info['id']; ?>" name="id">

        <div class="row cl">
            <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
                <input class="btn btn-primary radius disabled" type="button" value="&nbsp;&nbsp;提交&nbsp;&nbsp;" id="submit" >
            </div>
        </div>
    </form>


</article>


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
<script type="text/javascript" src="__STATIC__/lib/jquery.validation/1.14.0/jquery.validate.js"></script>
<script type="text/javascript" src="__STATIC__/lib/jquery.validation/1.14.0/validate-methods.js"></script>
<script type="text/javascript" src="__STATIC__/lib/jquery.validation/1.14.0/messages_zh.js"></script>




<script>

    $(function(){
        //当用户修改了输入框内容时才触发
        $("form").children().change(function(){
            $("#submit").removeClass('disabled');
        });


        //ajax方式提交当前表单数据
        $("#submit").on("click", function(event){
            $.ajax({
                type: "POST",
                url: "<?php echo url('grade/doEdit'); ?>",
                data: $("#form-grade-edit").serialize(),
                dataType: "json",
                success: function(data){
                    if (data.status == 1) {
                        alert(data.message);
                        layer_close();
                    } else {
                        alert(data.message);

                    }
                }
            });

        })



    })
</script>

</body>
</html>
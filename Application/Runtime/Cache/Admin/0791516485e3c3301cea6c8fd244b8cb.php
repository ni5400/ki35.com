<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" conten="width=device-width,initial-scale=1">
    <title>三五青年</title>
    <link href="/./Application/Admin/View/static/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/./Application/Admin/View/static/css/base.css" rel="stylesheet" type="text/css" />
    <script language="JavaScript" src="/./Application/Admin/View/static/js/jquery.min.js"></script>
    <script language="JavaScript" src="/./Application/Admin/View/static/js/bootstrap.min.js"></script>
    <link href="/./Application/Admin/View/static/css/form.css" rel="stylesheet" type="text/css" />
</head>
<body>
<!--top-->

<div id="frame-top">
    <div class="topleft">
        <a href="main.html" target="_parent"><img src="/./Application/Admin/View/static/images/logo2.png" title="系统首页" /></a>
    </div>

    <ul class="home-nav">
        <li>
            <a href="<?php echo U('Index/index');?>"  <?php if(CONTROLLER_NAME =='Index'): ?>class="selected"<?php endif; ?>>
                <img src="/./Application/Admin/View/static/images/icon01.png" title="工作台" />
                <h2>工作台</h2>
            </a>
        </li>
        <li>
            <a href="imgtable.html"><img src="/./Application/Admin/View/static/images/icon02.png" title="模型管理" /><h2>模型管理</h2></a>
        </li>
        <li>
            <a href="imglist.html"><img src="/./Application/Admin/View/static/images/icon03.png" title="模块设计" /><h2>模块设计</h2></a>
        </li>
        <li>
            <a href="tools.html" ><img src="/./Application/Admin/View/static/images/icon04.png" title="常用工具" /><h2>常用工具</h2></a>
        </li>
        <li>
            <a href="computer.html"><img src="/./Application/Admin/View/static/images/icon05.png" title="文件管理" /><h2>文件管理</h2></a>
        </li>
        <li>
            <a href="<?php echo U('Setting/index');?>"  <?php if(CONTROLLER_NAME =='Setting'): ?>class="selected"<?php endif; ?> /><img src="/./Application/Admin/View/static/images/icon06.png" title="系统设置" /><h2>系统设置</h2></a>
        </li>
    </ul>

    <div class="topright">
        <ul>
            <li><span><img src="/./Application/Admin/View/static/images/help.png" title="帮助"  class="helpimg"/></span><a href="#">帮助</a></li>
            <li><a href="#">关于</a></li>
            <li><a href="<?php echo U('Login/login_out');?>" target="_parent">退出</a></li>
        </ul>

        <div class="user">
            <span><?php echo ($_SESSION['admin_auth']['user_byname']); ?></span>
            <i>消息</i>
            <b>5</b>
        </div>

    </div>
</div>


<!--top.end-->
<!--main.start-->
<div id="frame-main">
    <!--main.left.start-->
    <div id="frame-left">
        
<div class="lefttop"><i class="icon-cogs"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></i>　系统设置</div>
<dl class="leftmenu">
    <dd>
        <div class="dh-title">
            <i class="icon-cogs"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span></i>
            基本设置
        </div>
        <ul class="menuson" style="display: none">
            <li><i class="icon-cogs"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span></i><a href="index.html" >基本设置</a></li>
            <li><i class="icon-cogs"><span class="glyphicon glyphicon-retweet" aria-hidden="true"></span></i><a href="right.html" >SEO优化</a></li>
            <li><i class="icon-cogs"><span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span></i><a href="imgtable.html" >服务器优化</a></li>
            <li><i class="icon-cogs"><span class="glyphicon glyphicon-phone" aria-hidden="true"></span></i><a href="form.html" >安全中心</a></li>
            <li><i class="icon-cogs"><span class="glyphicon glyphicon-tasks" aria-hidden="true"></span></i><a href="form.html" >图片处理</a></li>
            <li><i class="icon-cogs"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></i><a href="form.html" >邮件发送</a></li>
            <li><i class="icon-cogs"><span class="glyphicon glyphicon-comment" aria-hidden="true"></span></i><a href="form.html" >验证码设置</a></li>
            <li><i class="icon-cogs"><span class="glyphicon glyphicon-picture" aria-hidden="true"></span></i><a href="form.html" >水印设置</a></li>
        </ul>
    </dd>
    <dd>
        <div class="dh-title">
            <i class="icon-cogs"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></i>
            管理员设置
        </div>
        <ul class="menuson" style="display: block">
            <li <?php if(ACTION_NAME =='manager'): ?>class="active"<?php endif; ?> >
                <a href="<?php echo U('Setting/manager');?>">
                    <i class="icon-cogs">
                        <span class="glyphicon glyphicon-tasks"></span>
                    </i>管理员列表
                </a>
            </li>
            <li <?php if(ACTION_NAME =='manager_add'): ?>class="active"<?php endif; ?> >
                <a href="<?php echo U('Setting/manager_add');?>">
                    <i class="icon-cogs">
                        <span class="glyphicon glyphicon-plus"></span>
                    </i>新增管理员
                </a>
            </li>
            <li  <?php if(ACTION_NAME =='role'): ?>class="active"<?php endif; ?>  >
                <a href="<?php echo U('Setting/role');?>">
                    <i class="icon-cogs"><span class="glyphicon glyphicon-list"></span></i>
                    角色列表
                </a>
            </li>
            <li <?php if(ACTION_NAME =='role_add'): ?>class="active"<?php endif; ?>>
                <a href="<?php echo U('Setting/role_add');?>">
                    <i class="icon-cogs"><span class="glyphicon glyphicon-edit"></span>
                    </i>新增角色
                </a>
            </li>
            <li <?php if(ACTION_NAME =='node'): ?>class="active"<?php endif; ?>>
            <a href="<?php echo U('Setting/node');?>">
                <i class="icon-cogs"><span class="glyphicon glyphicon-th-list"></span>
                </i>节点管理
            </a>
            </li>
            <li <?php if(ACTION_NAME =='node_add'): ?>class="active"<?php endif; ?>>
            <a href="<?php echo U('Setting/node_add');?>">
                <i class="icon-cogs"><span class="glyphicon glyphicon-plus-sign"></span>
                </i>新增节点
            </a>
            </li>
        </ul>
    </dd>
    <dd>
        <div class="dh-title">
            <i class="icon-cogs"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></i>
            会员管理
        </div>
        <ul class="menuson">
            <li><a href="#"><i class="icon-cogs"><span class="glyphicon glyphicon-align-center"></span></i>管理员列表</a></li>
            <li><a href="#"><i class="icon-cogs"><span class="glyphicon glyphicon-align-right"></span></i>新增管理员</a></li>
            <li><a href="#"><i class="icon-cogs"><span class="glyphicon glyphicon-list"></span></i>角色管理</a></li>
            <li><a href="#"><i class="icon-cogs"><span class="glyphicon glyphicon-edit"></span></i>新增角色</a></li>
        </ul>
    </dd>
    <dd>
        <div class="dh-title">
            <i class="icon-cogs"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span></i>
            其它设置
        </div>
        <ul class="menuson">
            <li><a href="#"><i class="icon-cogs"><span class="glyphicon glyphicon-align-center"></span></i>管理员列表</a></li>
            <li><a href="#"><i class="icon-cogs"><span class="glyphicon glyphicon-align-right"></span></i>新增管理员</a></li>
            <li><a href="#"><i class="icon-cogs"><span class="glyphicon glyphicon-list"></span></i>角色管理</a></li>
            <li><a href="#"><i class="icon-cogs"><span class="glyphicon glyphicon-edit"></span></i>新增角色</a></li>
            <li><a href="#"><i class="icon-cogs"><span class="glyphicon glyphicon-map-marker"></span></i>新增角色</a></li>
        </ul>
    </dd>
</dl>

</div>
    <!--main.left.edn-->
    <!--main.right.begin-->
    <div id="frame-right">

    <div class="place">
        <div class="w-nav"  data-toggle="tooltip" data-placement="top" title="点击隐藏菜单，试试吧"><i class="icon-cogs"><span class="glyphicon glyphicon-th-list"></span></i></div>
        <ul class="placeul" style="color: #CCC;">
            <li><a href="">首页</a> ／ <a href="#">登陆页面</a></li>
        </ul>
    </div>
    <div class="mainindex">
        

<div class="form_title"><i class="icon-cogs"><span class="glyphicon glyphicon-th-list"></span></i>节点管理</div>
<div class="form_con">
    <div class="alert alert-warning alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>谨慎操作！</strong> 权限方案，请勿删除已有节点，否则可能造成系统错误 <br/>
        <strong>模块</strong>对应的ThinkPHP分组即MODULE_NAME <br/>
        <strong>控制器</strong>对应的ThinkPHP的 CONTROLLER_NAME <br/>
        <strong>操作名</strong>对应的ThinkPHP的ACTION_NAME <br/>
    </div>
    <!--模块开始-->
    <div class="form_title"><i class="icon-cogs"><span class="glyphicon glyphicon-th-list"></span></i>后台模块</div>
    <div class="form_con bottom10" style="background: #F1F1F1">
        <!--方法开始-->
        <div class="form_title form_title2"><i class="icon-cogs"><span class="glyphicon glyphicon-th-list"></span></i>后台首页</div>
        <div class="form_con2 bottom10" >
            <div class="role-list">
                <li>
                    生成首页
                    <button class="btn btn-sm btn-success"><i class="glyphicon glyphicon-pencil"></i></button>
                    <button class="btn btn-sm btn-danger btn-remove"><i class="glyphicon glyphicon-trash"></i></button>
                </li>
                <li>
                    生成首页
                    <button class="btn btn-sm btn-success"><i class="glyphicon glyphicon-pencil"></i></button>
                    <button class="btn btn-sm btn-danger btn-remove"><i class="glyphicon glyphicon-trash"></i></button>
                </li>
                <li>
                    生成首页
                    <button class="btn btn-sm btn-success"><i class="glyphicon glyphicon-pencil"></i></button>
                    <button class="btn btn-sm btn-danger btn-remove"><i class="glyphicon glyphicon-trash"></i></button>
                </li>
                <li>
                    生成首页
                    <button class="btn btn-sm btn-success"><i class="glyphicon glyphicon-pencil"></i></button>
                    <button class="btn btn-sm btn-danger btn-remove"><i class="glyphicon glyphicon-trash"></i></button>
                </li>
                <li>
                    生成首页
                    <button class="btn btn-sm btn-success"><i class="glyphicon glyphicon-pencil"></i></button>
                    <button class="btn btn-sm btn-danger btn-remove"><i class="glyphicon glyphicon-trash"></i></button>
                </li>
                <li>
                    生成首页
                    <button class="btn btn-sm btn-success"><i class="glyphicon glyphicon-pencil"></i></button>
                    <button class="btn btn-sm btn-danger btn-remove"><i class="glyphicon glyphicon-trash"></i></button>
                </li>
                <li>
                    生成首页
                    <button class="btn btn-sm btn-success"><i class="glyphicon glyphicon-pencil"></i></button>
                    <button class="btn btn-sm btn-danger btn-remove"><i class="glyphicon glyphicon-trash"></i></button>
                </li>
                <li>
                    生成首页
                    <button class="btn btn-sm btn-success"><i class="glyphicon glyphicon-pencil"></i></button>
                    <button class="btn btn-sm btn-danger btn-remove"><i class="glyphicon glyphicon-trash"></i></button>
                </li>
                <li>
                    生成首页
                    <button class="btn btn-sm btn-success"><i class="glyphicon glyphicon-pencil"></i></button>
                    <button class="btn btn-sm btn-danger btn-remove"><i class="glyphicon glyphicon-trash"></i></button>
                </li>
            </div>
        </div>
        <!--一个节点-->
        <div class="form_title form_title2"><i class="icon-cogs"><span class="glyphicon glyphicon-th-list"></span></i>后台首页</div>
        <div class="form_con2 bottom10" >
            <div class="role-list">
                <li>
                    生成首页
                    <button class="btn btn-sm btn-success"><i class="glyphicon glyphicon-pencil"></i></button>
                    <button class="btn btn-sm btn-danger btn-remove"><i class="glyphicon glyphicon-trash"></i></button>
                </li>
                <li>生成首页
                    <button class="btn btn-sm btn-success"><i class="glyphicon glyphicon-pencil"></i></button>
                    <button class="btn btn-sm btn-danger btn-remove"><i class="glyphicon glyphicon-trash"></i></button>
                </li>
                <li>生成首页
                    <button class="btn btn-sm btn-success"><i class="glyphicon glyphicon-pencil"></i></button>
                    <button class="btn btn-sm btn-danger btn-remove"><i class="glyphicon glyphicon-trash"></i></button>
                </li>
                <li>生成首页
                    <button class="btn btn-sm btn-success"><i class="glyphicon glyphicon-pencil"></i></button>
                    <button class="btn btn-sm btn-danger btn-remove"><i class="glyphicon glyphicon-trash"></i></button>
                </li>
                <li>生成首页
                    <button class="btn btn-sm btn-success"><i class="glyphicon glyphicon-pencil"></i></button>
                    <button class="btn btn-sm btn-danger btn-remove"><i class="glyphicon glyphicon-trash"></i></button>
                </li>
                <li>生成首页
                    <button class="btn btn-sm btn-success"><i class="glyphicon glyphicon-pencil"></i></button>
                    <button class="btn btn-sm btn-danger btn-remove"><i class="glyphicon glyphicon-trash"></i></button>
                </li>
                <li>生成首页
                    <button class="btn btn-sm btn-success"><i class="glyphicon glyphicon-pencil"></i></button>
                    <button class="btn btn-sm btn-danger btn-remove"><i class="glyphicon glyphicon-trash"></i></button>
                </li>
                <li>生成首页
                    <button class="btn btn-sm btn-success"><i class="glyphicon glyphicon-pencil"></i></button>
                    <button class="btn btn-sm btn-danger btn-remove"><i class="glyphicon glyphicon-trash"></i></button>
                </li>
            </div>
        </div>
        <!--一个结点结束-->
    </div>
    <!--模块结束-->



    <!--模块开始-->
    <div class="form_title"><i class="icon-cogs"><span class="glyphicon glyphicon-th-list"></span></i>前台模块</div>
    <div class="form_con">
        <!--模椟-->
        <div class="form_title form_title2"><i class="icon-cogs"><span class="glyphicon glyphicon-th-list"></span></i>后台首页</div>
        <div class="form_con2 bottom10" >
            <div class="role-list">
                <li>
                    生成首页
                    <button class="btn btn-sm btn-success"><i class="glyphicon glyphicon-pencil"></i></button>
                    <button class="btn btn-sm btn-danger btn-remove"><i class="glyphicon glyphicon-trash"></i></button>
                </li>
                <li>生成首页
                    <button class="btn btn-sm btn-success"><i class="glyphicon glyphicon-pencil"></i></button>
                    <button class="btn btn-sm btn-danger btn-remove"><i class="glyphicon glyphicon-trash"></i></button>
                </li>
                <li>生成首页
                    <button class="btn btn-sm btn-success"><i class="glyphicon glyphicon-pencil"></i></button>
                    <button class="btn btn-sm btn-danger btn-remove"><i class="glyphicon glyphicon-trash"></i></button>
                </li>
                <li>生成首页
                    <button class="btn btn-sm btn-success"><i class="glyphicon glyphicon-pencil"></i></button>
                    <button class="btn btn-sm btn-danger btn-remove"><i class="glyphicon glyphicon-trash"></i></button>
                </li>
                <li>生成首页
                    <button class="btn btn-sm btn-success"><i class="glyphicon glyphicon-pencil"></i></button>
                    <button class="btn btn-sm btn-danger btn-remove"><i class="glyphicon glyphicon-trash"></i></button>
                </li>
                <li>生成首页
                    <button class="btn btn-sm btn-success"><i class="glyphicon glyphicon-pencil"></i></button>
                    <button class="btn btn-sm btn-danger btn-remove"><i class="glyphicon glyphicon-trash"></i></button>
                </li>
                <li>生成首页
                    <button class="btn btn-sm btn-success"><i class="glyphicon glyphicon-pencil"></i></button>
                    <button class="btn btn-sm btn-danger btn-remove"><i class="glyphicon glyphicon-trash"></i></button>
                </li>
                <li>生成首页
                    <button class="btn btn-sm btn-success"><i class="glyphicon glyphicon-pencil"></i></button>
                    <button class="btn btn-sm btn-danger btn-remove"><i class="glyphicon glyphicon-trash"></i></button>
                </li>
            </div>
        </div>
        <!--一个节点-->
        <div class="form_title form_title2"><i class="icon-cogs"><span class="glyphicon glyphicon-th-list"></span></i>后台首页</div>
        <div class="form_con2 bottom10" >
            <div class="role-list">
                <li>
                    生成首页
                    <button class="btn btn-sm btn-success"><i class="glyphicon glyphicon-pencil"></i></button>
                    <button class="btn btn-sm btn-danger btn-remove"><i class="glyphicon glyphicon-trash"></i></button>
                </li>
                <li>生成首页
                    <button class="btn btn-sm btn-success"><i class="glyphicon glyphicon-pencil"></i></button>
                    <button class="btn btn-sm btn-danger btn-remove"><i class="glyphicon glyphicon-trash"></i></button>
                </li>
                <li>生成首页
                    <button class="btn btn-sm btn-success"><i class="glyphicon glyphicon-pencil"></i></button>
                    <button class="btn btn-sm btn-danger btn-remove"><i class="glyphicon glyphicon-trash"></i></button>
                </li>
                <li>生成首页
                    <button class="btn btn-sm btn-success"><i class="glyphicon glyphicon-pencil"></i></button>
                    <button class="btn btn-sm btn-danger btn-remove"><i class="glyphicon glyphicon-trash"></i></button>
                </li>
                <li>生成首页
                    <button class="btn btn-sm btn-success"><i class="glyphicon glyphicon-pencil"></i></button>
                    <button class="btn btn-sm btn-danger btn-remove"><i class="glyphicon glyphicon-trash"></i></button>
                </li>
                <li>生成首页
                    <button class="btn btn-sm btn-success"><i class="glyphicon glyphicon-pencil"></i></button>
                    <button class="btn btn-sm btn-danger btn-remove"><i class="glyphicon glyphicon-trash"></i></button>
                </li>
                <li>生成首页
                    <button class="btn btn-sm btn-success"><i class="glyphicon glyphicon-pencil"></i></button>
                    <button class="btn btn-sm btn-danger btn-remove"><i class="glyphicon glyphicon-trash"></i></button>
                </li>
                <li>生成首页
                    <button class="btn btn-sm btn-success"><i class="glyphicon glyphicon-pencil"></i></button>
                    <button class="btn btn-sm btn-danger btn-remove"><i class="glyphicon glyphicon-trash"></i></button>
                </li>
            </div>
        </div>
        <!--一个结点结束-->
    </div>
    <!--模块结束-->




</div>
<!--dialog-->
<script>
    $('.btn-remove').click(function(){
        $('#my-modal').modal('show');
        $('.true-remove').click(function(){
//            $.ajax({
//                url : ThinkPHP['MODULE'] + '/Topic/ajaxCount',
//                type : 'POST',
//                data : {
//
//                },
//                success: function(data, response, status){
//                    window.count = parseInt(data);
//                }
//            });
            $('#my-modal').modal('hide');
            alert('删除成功');
            $('.modal-body').html('删除成功');
            $('#error-dialog').modal('show');
            setTimeout(function(){
                $('.modal-body').html('...');
                $('#error-dialog').modal('hide');
            },2000);

        })
    })


</script>


    </div>
</div>

    <!--main.right.end-->
</div>
<!--main.end-->
<script type="text/javascript">
    $(function(){
        //导航切换
        $(".menuson li").click(function(){
            $(".menuson li.active").removeClass("active")
            $(this).addClass("active");
        });
        //左侧侧导
        $('.dh-title').click(function(){
            var $ul = $(this).next('ul');
            $('dd').find('ul').slideUp();
            if($ul.is(':visible')){
                $(this).next('ul').slideUp();
            }else{
                $(this).next('ul').slideDown();
            }
        });
        //点击按扭隐藏左侧菜单
        $('.w-nav').click(function(){
           if( $('#frame-left').is(":hidden")){
               $('#frame-left').show();
               $('#frame-right').css('padding-left','187px');
            }else{
                $('#frame-left').hide();
               $('#frame-right').css('padding-left','0');
            }
        });
        $("[data-toggle='tooltip']").tooltip(); //隐藏菜单按扭提示
    })
</script>
</body>
</html>
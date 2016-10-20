<!DOCTYPE html>
<html class="no-js">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1,user-scalable=no">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <!-- 启用360浏览器的极速模式(webkit) -->
    <meta name="renderer" content="webkit">
    <!-- 避免IE使用兼容模式 -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- 针对手持设备优化，主要是针对一些老的不识别viewport的浏览器，比如黑莓 -->
    <meta name="HandheldFriendly" content="true">
    <!-- 微软的老式浏览器 -->
    <meta name="MobileOptimized" content="320">
    <!-- uc强制竖屏 -->
    <meta name="screen-orientation" content="portrait">
    <!-- QQ强制竖屏 -->
    <meta name="x5-orientation" content="portrait">
    <!-- UC强制全屏 -->
    <meta name="full-screen" content="yes">
    <!-- QQ强制全屏 -->
    <meta name="x5-fullscreen" content="true">
    <!-- UC应用模式 -->
    <meta name="browsermode" content="application">
    <!-- QQ应用模式 -->
    <meta name="x5-page-mode" content="app">
    <!-- windows phone 点击无高光 -->
    <meta name="msapplication-tap-highlight" content="no">
    <!-- 适应移动端end -->
    <title>修改个人资料</title>
    <link rel="stylesheet" type="text/css" href="public/css/xcConfirm.css"/>
    <script src="public/js/jquery-1.9.1.js" type="text/javascript" charset="utf-8"></script>
    <script src="public/js/xcConfirm.js" type="text/javascript" charset="utf-8"></script>
    <link rel="stylesheet" href="app/views/user/css/index.css"/>
</head>
<body>
<div id="user-b">
    <!--html5 nav-->
    <nav class="j-nav navbar">
        <div class="logo fl">
            <a href="index.php?c=User&a=mymain"></a>
        </div>
        <span class="user-title">修改个人资料</span>
    </nav>
    <section class="m-component-user" id="m-user">
        <div class="m-user-avatar text-center">
            <span class="avatarPic"><img style="display: inline;" class="lazy img-circle" src="public/user/user_pic/a.jpg"></span>
            <div class="user_btn">
                <span style="color: green" id="namenick">{{name.nickname}}</span>
            </div>
        </div>
        <ul class="m-user-content">
            <li>
                <div class="m-user-item">
                    <a href="index.php?c=user&a=updateuserpic" class="user-set">我的头像</a>
                </div>
                <div class="m-user-item">
                    <a href="#" class="user-set" id="user_name">会员名</a><!--index.php?c=user&a=updateuser_name-->
                </div>
                <div class="m-user-item">
                    <a href="#" class="user- set" id="usernick">erhuo昵称</a>
                </div>
                <div class="m-user-item">
                    <a href="index.php?c=user&a=updateuser_sex" class="user-set">性别</a>
                </div>
                <!--<div class="m-user-item">
                    <a href="index.php?c=user&a=updateuser_sex" class="user-set">我的收款码</a>
                </div>-->
            </li>
            <li class="m-user-footer">
                粤ICP备8888888 北京·北京
            </li>
        </ul>
    </section>
    <!--footer begin-->

    <!--footer end-->
</div>
</body>
<script>
    $(function(){
        $('#usernick').click(function(){
            var txt=  "新的昵称";
            window.wxc.xcConfirm(txt, window.wxc.xcConfirm.typeEnum.input,{
                btn: parseInt("0011",2),
                onOk:function(v){
                    console.log(v);
                }
            });
        })
        $('#user_name').click(function(){
            alert('用户名暂时不支持修改');exit();
        })
    })
</script>
</html>
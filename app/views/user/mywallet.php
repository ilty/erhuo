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
    <title>我的钱包</title>
    <link rel="stylesheet" href="app/views/user/css/index.css"/>
</head>
<body>
<div id="user-b">
    <!--html5 nav-->
    <nav class="j-nav navbar">
        <div class="logo fl">
            <a href="index.php?c=User&a=mymain"></a>
        </div>
        <span class="user-title">我的钱包</span>
    </nav>
    <section class="m-component-user" id="m-user">
        <div class="m-user-avatar text-center">
            <span class="avatarPic"><img style="display: inline;" class="lazy img-circle" src="public/user/user_pic/a.jpg"></span>
            <div class="user_btn">
                <span style="color: #fd5501">{{user.nickname}}</span>
            </div>
        </div>
        <div class="head_list">
            <ul class="m-user-list">
                <li><a href="#"><span class="bar"></span><span style="color: #fd5501">￥{{balance}}</span><br>余额</a></li>
                <li><a href="index.php?c=user&a=Recharge"><span class="bar"></span><span></span><br>充值</a></li>
                <li><a href="index.php?c=user&a=Withdrawals"><span class="bar"></span><span></span><br>提现</a></li>
            </ul>
        </div>
        <ul class="m-user-content">
            <li>
                <div class="m-user-item">
                    <a href="user/orders/index.html" class="user-order">邀请好友得大礼包</a>
                </div>
            </li>
            <li>
                <div class="m-user-item">
                    <a href="index.php?c=user&a=mywallet" class="user-site">账户余额</a>
                </div>
                <div class="m-user-item">
                    <a href="user/coupon/index.html" class="user-site">管理收货地址</a>
                </div>
                <div class="m-user-item">
                    <a href="index.php?c=user&a=updateuser" class="user-set">完善个人信息</a>
                </div>
                <div class="m-user-item">
                    <div class="user-score"><span class="pull-right">13021978295</span>联系客服</div>
                </div>
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
</html>
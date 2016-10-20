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
	<title>个人主页</title>
    <link rel="stylesheet" href="app/views/user/css/index.css"/>
</head>
<body>
	<div id="user-b">
		<!--html5 nav-->
		<nav class="j-nav navbar">

			<span class="user-title">个人中心</span>

	    </nav>
		<section class="m-component-user" id="m-user">
	        <div class="m-user-avatar text-center">
	            <span class="avatarPic"><img style="display: inline;" class="lazy img-circle" src="public/user/user_pic/a.jpg"></span>
	            <div class="user_btn">
                    <span style="color: green">{{user.nickname}}</span>
	            </div>
	        </div>
	        
	        <div class="head_list">
	        	<ul class="m-user-list">
	        		<!--<li><span>￥0.00</span><br>账户余额</li>-->
	        		<li><a href="myrelease"><span class="bar"></span><span>{{myreleases}}</span><br>我发布的</a></li>
	        		<li><a href="myorder.html"><span class="bar"></span><span>0</span><br>我买的</a></li>
	        		<li><a href="myorder.html"><span class="bar"></span><span>0</span><br>我卖的</a></li>
	        	</ul>
	        </div>
	        <ul class="m-user-content">
	            <li>
	                <div class="m-user-item">
	                   <a href="user/orders/index.html" class="user-order">邀请好友得大礼包</a>
	                </div>
	                <div class="m-user-item">
	                   <a href="#" class="user-coupon">我的订单</a>
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
                    <div class="m-user-item">
                        <a href="index.php?c=user&a=loginout" class="user-set">退出</a>
                    </div>
	            </li>
	            <li class="m-user-footer">
	            粤ICP备8888888 北京·北京
	            </li>
	        </ul>
	    </section>
	    <!--footer begin-->
        <footer class="footer">
            <nav>
                <ul>
                    <li><a href="http://www.softhearted.site/mvcThree/index/index" class="nav-controller"><div class="fb-home"></div>首页</a></li>
                    <li><a href="http://www.softhearted.site/mvcThree/classify/all_class    " class="nav-controller"><div class="fb-group"></div>分类</a></li>
                    <li><a href="myorder.html" class="nav-controller"><div class="fb-list"></div>消息</a></li>
                    <li><a href="javascript:void(0);" class="nav-controller active"><div class="fb-user"></div>个人中心</a></li>
                </ul>
            </nav>
        </footer>
	    <!--footer end-->
	</div>
</body>
</html>
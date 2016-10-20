<?php

/* user/main.php */
class __TwigTemplate_3c019fbc7e2031b1e649655002660ea0b5aa9ecc1f7945d635fc94e5fb967f67 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html class=\"no-js\">
<head>
  <meta charset=\"UTF-8\">
  <meta name=\"viewport\" content=\"width=device-width,initial-scale=1.0,maximum-scale=1,user-scalable=no\">
  <meta name=\"renderer\" content=\"webkit\">
  <meta http-equiv=\"Cache-Control\" content=\"no-siteapp\"/>
  <!-- 启用360浏览器的极速模式(webkit) -->
  <meta name=\"renderer\" content=\"webkit\">
  <!-- 避免IE使用兼容模式 -->
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <!-- 针对手持设备优化，主要是针对一些老的不识别viewport的浏览器，比如黑莓 -->
  <meta name=\"HandheldFriendly\" content=\"true\">
  <!-- 微软的老式浏览器 -->
  <meta name=\"MobileOptimized\" content=\"320\">
  <!-- uc强制竖屏 -->
  <meta name=\"screen-orientation\" content=\"portrait\">
  <!-- QQ强制竖屏 -->
  <meta name=\"x5-orientation\" content=\"portrait\">
  <!-- UC强制全屏 -->
  <meta name=\"full-screen\" content=\"yes\">
  <!-- QQ强制全屏 -->
  <meta name=\"x5-fullscreen\" content=\"true\">
  <!-- UC应用模式 -->
  <meta name=\"browsermode\" content=\"application\">
  <!-- QQ应用模式 -->
  <meta name=\"x5-page-mode\" content=\"app\">
  <!-- windows phone 点击无高光 -->
  <meta name=\"msapplication-tap-highlight\" content=\"no\">
  <!-- 适应移动端end -->
\t<title>个人主页</title>
    <link rel=\"stylesheet\" href=\"app/views/user/css/index.css\"/>
</head>
<body>
\t<div id=\"user-b\">
\t\t<!--html5 nav-->
\t\t<nav class=\"j-nav navbar\">

\t\t\t<span class=\"user-title\">个人中心</span>

\t    </nav>
\t\t<section class=\"m-component-user\" id=\"m-user\">
\t        <div class=\"m-user-avatar text-center\">
\t            <span class=\"avatarPic\"><img style=\"display: inline;\" class=\"lazy img-circle\" src=\"public/user/user_pic/a.jpg\"></span>
\t            <div class=\"user_btn\">
                    <span style=\"color: green\">";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "nickname", array()), "html", null, true);
        echo "</span>
\t            </div>
\t        </div>
\t        
\t        <div class=\"head_list\">
\t        \t<ul class=\"m-user-list\">
\t        \t\t<!--<li><span>￥0.00</span><br>账户余额</li>-->
\t        \t\t<li><a href=\"myrelease\"><span class=\"bar\"></span><span>";
        // line 53
        echo twig_escape_filter($this->env, (isset($context["myreleases"]) ? $context["myreleases"] : null), "html", null, true);
        echo "</span><br>我发布的</a></li>
\t        \t\t<li><a href=\"myorder.html\"><span class=\"bar\"></span><span>0</span><br>我买的</a></li>
\t        \t\t<li><a href=\"myorder.html\"><span class=\"bar\"></span><span>0</span><br>我卖的</a></li>
\t        \t</ul>
\t        </div>
\t        <ul class=\"m-user-content\">
\t            <li>
\t                <div class=\"m-user-item\">
\t                   <a href=\"user/orders/index.html\" class=\"user-order\">邀请好友得大礼包</a>
\t                </div>
\t                <div class=\"m-user-item\">
\t                   <a href=\"#\" class=\"user-coupon\">我的订单</a>
\t                </div>
\t            </li>
\t            <li>
\t            \t<div class=\"m-user-item\">
\t                   <a href=\"index.php?c=user&a=mywallet\" class=\"user-site\">账户余额</a>
\t                </div>
                    <div class=\"m-user-item\">
                        <a href=\"user/coupon/index.html\" class=\"user-site\">管理收货地址</a>
                    </div>
\t                <div class=\"m-user-item\">
\t                   <a href=\"index.php?c=user&a=updateuser\" class=\"user-set\">完善个人信息</a>
\t                </div>
\t                <div class=\"m-user-item\">
\t                   <div class=\"user-score\"><span class=\"pull-right\">13021978295</span>联系客服</div>
\t                </div>
                    <div class=\"m-user-item\">
                        <a href=\"index.php?c=user&a=loginout\" class=\"user-set\">退出</a>
                    </div>
\t            </li>
\t            <li class=\"m-user-footer\">
\t            粤ICP备8888888 北京·北京
\t            </li>
\t        </ul>
\t    </section>
\t    <!--footer begin-->
        <footer class=\"footer\">
            <nav>
                <ul>
                    <li><a href=\"http://www.softhearted.site/mvcThree/index/index\" class=\"nav-controller\"><div class=\"fb-home\"></div>首页</a></li>
                    <li><a href=\"http://www.softhearted.site/mvcThree/classify/all_class    \" class=\"nav-controller\"><div class=\"fb-group\"></div>分类</a></li>
                    <li><a href=\"myorder.html\" class=\"nav-controller\"><div class=\"fb-list\"></div>消息</a></li>
                    <li><a href=\"javascript:void(0);\" class=\"nav-controller active\"><div class=\"fb-user\"></div>个人中心</a></li>
                </ul>
            </nav>
        </footer>
\t    <!--footer end-->
\t</div>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "user/main.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 53,  66 => 46,  19 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html class=\"no-js\">
<head>
  <meta charset=\"UTF-8\">
  <meta name=\"viewport\" content=\"width=device-width,initial-scale=1.0,maximum-scale=1,user-scalable=no\">
  <meta name=\"renderer\" content=\"webkit\">
  <meta http-equiv=\"Cache-Control\" content=\"no-siteapp\"/>
  <!-- 启用360浏览器的极速模式(webkit) -->
  <meta name=\"renderer\" content=\"webkit\">
  <!-- 避免IE使用兼容模式 -->
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <!-- 针对手持设备优化，主要是针对一些老的不识别viewport的浏览器，比如黑莓 -->
  <meta name=\"HandheldFriendly\" content=\"true\">
  <!-- 微软的老式浏览器 -->
  <meta name=\"MobileOptimized\" content=\"320\">
  <!-- uc强制竖屏 -->
  <meta name=\"screen-orientation\" content=\"portrait\">
  <!-- QQ强制竖屏 -->
  <meta name=\"x5-orientation\" content=\"portrait\">
  <!-- UC强制全屏 -->
  <meta name=\"full-screen\" content=\"yes\">
  <!-- QQ强制全屏 -->
  <meta name=\"x5-fullscreen\" content=\"true\">
  <!-- UC应用模式 -->
  <meta name=\"browsermode\" content=\"application\">
  <!-- QQ应用模式 -->
  <meta name=\"x5-page-mode\" content=\"app\">
  <!-- windows phone 点击无高光 -->
  <meta name=\"msapplication-tap-highlight\" content=\"no\">
  <!-- 适应移动端end -->
\t<title>个人主页</title>
    <link rel=\"stylesheet\" href=\"app/views/user/css/index.css\"/>
</head>
<body>
\t<div id=\"user-b\">
\t\t<!--html5 nav-->
\t\t<nav class=\"j-nav navbar\">

\t\t\t<span class=\"user-title\">个人中心</span>

\t    </nav>
\t\t<section class=\"m-component-user\" id=\"m-user\">
\t        <div class=\"m-user-avatar text-center\">
\t            <span class=\"avatarPic\"><img style=\"display: inline;\" class=\"lazy img-circle\" src=\"public/user/user_pic/a.jpg\"></span>
\t            <div class=\"user_btn\">
                    <span style=\"color: green\">{{user.nickname}}</span>
\t            </div>
\t        </div>
\t        
\t        <div class=\"head_list\">
\t        \t<ul class=\"m-user-list\">
\t        \t\t<!--<li><span>￥0.00</span><br>账户余额</li>-->
\t        \t\t<li><a href=\"myrelease\"><span class=\"bar\"></span><span>{{myreleases}}</span><br>我发布的</a></li>
\t        \t\t<li><a href=\"myorder.html\"><span class=\"bar\"></span><span>0</span><br>我买的</a></li>
\t        \t\t<li><a href=\"myorder.html\"><span class=\"bar\"></span><span>0</span><br>我卖的</a></li>
\t        \t</ul>
\t        </div>
\t        <ul class=\"m-user-content\">
\t            <li>
\t                <div class=\"m-user-item\">
\t                   <a href=\"user/orders/index.html\" class=\"user-order\">邀请好友得大礼包</a>
\t                </div>
\t                <div class=\"m-user-item\">
\t                   <a href=\"#\" class=\"user-coupon\">我的订单</a>
\t                </div>
\t            </li>
\t            <li>
\t            \t<div class=\"m-user-item\">
\t                   <a href=\"index.php?c=user&a=mywallet\" class=\"user-site\">账户余额</a>
\t                </div>
                    <div class=\"m-user-item\">
                        <a href=\"user/coupon/index.html\" class=\"user-site\">管理收货地址</a>
                    </div>
\t                <div class=\"m-user-item\">
\t                   <a href=\"index.php?c=user&a=updateuser\" class=\"user-set\">完善个人信息</a>
\t                </div>
\t                <div class=\"m-user-item\">
\t                   <div class=\"user-score\"><span class=\"pull-right\">13021978295</span>联系客服</div>
\t                </div>
                    <div class=\"m-user-item\">
                        <a href=\"index.php?c=user&a=loginout\" class=\"user-set\">退出</a>
                    </div>
\t            </li>
\t            <li class=\"m-user-footer\">
\t            粤ICP备8888888 北京·北京
\t            </li>
\t        </ul>
\t    </section>
\t    <!--footer begin-->
        <footer class=\"footer\">
            <nav>
                <ul>
                    <li><a href=\"http://www.softhearted.site/mvcThree/index/index\" class=\"nav-controller\"><div class=\"fb-home\"></div>首页</a></li>
                    <li><a href=\"http://www.softhearted.site/mvcThree/classify/all_class    \" class=\"nav-controller\"><div class=\"fb-group\"></div>分类</a></li>
                    <li><a href=\"myorder.html\" class=\"nav-controller\"><div class=\"fb-list\"></div>消息</a></li>
                    <li><a href=\"javascript:void(0);\" class=\"nav-controller active\"><div class=\"fb-user\"></div>个人中心</a></li>
                </ul>
            </nav>
        </footer>
\t    <!--footer end-->
\t</div>
</body>
</html>";
    }
}

<?php

/* user/withdrawals.php */
class __TwigTemplate_8f7b618ffa4bafe49dd0beed0816f1e66ff524422934c864b9c97e15e4b04448 extends Twig_Template
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
    <script src=\"app/views/user/js/jq.js\"></script>
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
    <title>提现</title>
    <link rel=\"stylesheet\" href=\"app/views/user/css/index.css\"/>
</head>
<body>
<div id=\"user-b\">
    <!--html5 nav-->
    <nav class=\"j-nav navbar\">
        <div class=\"logo fl\">
            <a href=\"index.php?c=user&a=mywallet\"></a>
        </div>
        <span class=\"user-title\">提现</span>

    </nav>
    <section class=\"m-component-user\" id=\"m-user\">
        <div class=\"m-user-avatar text-center\">
            <table>
                <tr>
                    <td>申请提现金额</td>
                    <input type=\"hidden\" class=\"name\" value=\"";
        // line 50
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "\">
                    <input type=\"hidden\" class=\"balance\" value=\"";
        // line 51
        echo twig_escape_filter($this->env, (isset($context["balance"]) ? $context["balance"] : null), "html", null, true);
        echo "\">
                    <td><input type=\"text\" placeholder=\"提现金额小于余额\" name=\"tx\" class=\"fa\"></td>
                    <td><input type=\"button\" class=\"ti\" value=\"提现\"/></td>
                </tr>
            </table>

            <div class=\"user_btn\">
                <span style=\"color: red\">*向二货提现,1-3个工作日内到账*</span>
            </div>
        </div>

    </section>
    <!--footer begin-->

    <!--footer end-->
</div>
</body>
<script>
    \$(function(){
        \$('.ti').click(function(){
            var name=\$('.name').val();
            var balance=\$('.balance').val();
            var fa=\$('.fa').val();
            if(fa<10){
                alert('提现必须大于10');
                return false;
            }
            if(fa>balance){
                alert('提现不得大于余额');
                return false;
            }
            \$.post(\"index.php?c=user&a=withdrawalsdo\",{fa:fa},function(data){ ////用户发起提现
                if(data!=0){
                    alert('提现成功,1-3日到账');
                }
            });
        })
    })
</script>
</html>";
    }

    public function getTemplateName()
    {
        return "user/withdrawals.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 51,  70 => 50,  19 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html class=\"no-js\">
<head>
    <meta charset=\"UTF-8\">
    <script src=\"app/views/user/js/jq.js\"></script>
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
    <title>提现</title>
    <link rel=\"stylesheet\" href=\"app/views/user/css/index.css\"/>
</head>
<body>
<div id=\"user-b\">
    <!--html5 nav-->
    <nav class=\"j-nav navbar\">
        <div class=\"logo fl\">
            <a href=\"index.php?c=user&a=mywallet\"></a>
        </div>
        <span class=\"user-title\">提现</span>

    </nav>
    <section class=\"m-component-user\" id=\"m-user\">
        <div class=\"m-user-avatar text-center\">
            <table>
                <tr>
                    <td>申请提现金额</td>
                    <input type=\"hidden\" class=\"name\" value=\"{{name}}\">
                    <input type=\"hidden\" class=\"balance\" value=\"{{balance}}\">
                    <td><input type=\"text\" placeholder=\"提现金额小于余额\" name=\"tx\" class=\"fa\"></td>
                    <td><input type=\"button\" class=\"ti\" value=\"提现\"/></td>
                </tr>
            </table>

            <div class=\"user_btn\">
                <span style=\"color: red\">*向二货提现,1-3个工作日内到账*</span>
            </div>
        </div>

    </section>
    <!--footer begin-->

    <!--footer end-->
</div>
</body>
<script>
    \$(function(){
        \$('.ti').click(function(){
            var name=\$('.name').val();
            var balance=\$('.balance').val();
            var fa=\$('.fa').val();
            if(fa<10){
                alert('提现必须大于10');
                return false;
            }
            if(fa>balance){
                alert('提现不得大于余额');
                return false;
            }
            \$.post(\"index.php?c=user&a=withdrawalsdo\",{fa:fa},function(data){ ////用户发起提现
                if(data!=0){
                    alert('提现成功,1-3日到账');
                }
            });
        })
    })
</script>
</html>";
    }
}

<?php

/* login/login.php */
class __TwigTemplate_9d249b9a1cc49c9e837122e714e39af7599135bf4f3d57b9bbe6de39f17879b1 extends Twig_Template
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
<html>
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link href=\"public/css/style.css\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"public/css/sweetalert.css\"/>
    <script>var __links = document.querySelectorAll('a');function __linkClick(e) { parent.window.postMessage(this.href, '*');} ;for (var i = 0, l = __links.length; i < l; i++) {if ( __links[i].getAttribute('data-t') == '_blank' ) { __links[i].addEventListener('click', __linkClick, false);}}</script>
    <script>\$(document).ready(function(c) {
            \$('.alert-close').on('click', function(c){
                \$('.message').fadeOut('slow', function(c){
                    \$('.message').remove();
                });
            });
        });
    </script>
    <title></title>
    <style>
        .demo{width:300px; margin:60px auto 10px auto}
        @media only screen and (min-width: 420px) {
            .demo{width:500px; margin:60px auto 10px auto}
        }
        body {
            margin: 50px 0;
            text-align: center;
        }
        .inp {
            border: 1px solid gray;
            padding: 0 10px;
            width: 200px;
            height: 30px;
            font-size: 18px;
        }
        .btn {
            border: 1px solid gray;
            width: 100px;
            height: 30px;
            font-size: 18px;
            cursor: pointer;
        }
        #embed-captcha {
            width: 300px;
            margin: 0 auto;
        }
        .show {
            display: block;
        }
        .hide {
            display: none;
        }
        #notice {
            color: red;
        }
        /* 以下遮罩层为demo.用户可自行设计实现 */
        #mask {
            display: none;
            position: fixed;
            text-align: center;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            overflow: auto;
        }
        /* 可自行设计实现captcha的位置大小 */
        .popup-mobile {
            position: relative;
        }
        #popup-captcha-mobile {
            position: fixed;
            display: none;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            -webkit-transform: translate(-50%, -50%);
            z-index: 9999;
        }
    </style>
</head>
<body>

<!-- 引入封装了failback的接口--initGeetest -->
<script src=\"http://static.geetest.com/static/tools/gt.js\"></script>
<script type=\"text/javascript\" src=\"public/js/jquery.js\"></script>
<script type=\"text/javascript\" src=\"public/js/sweetalert.min.js\"></script>
<!-- 若是https，使用以下接口 -->
<!-- <script src=\"https://code.jquery.com/jquery-1.12.3.min.js\"></script> -->
<!-- <script src=\"https://static.geetest.com/static/tools/gt.js\"></script> -->


<div class=\"message warning\">
    <div class=\"inset\">
        <div class=\"login-head\">
            <h1>登陆</h1>
            <div class=\"alert-close\"> </div>
        </div>
        <li style=\"list-style-type:none;\">
            <a href=\"#\" class=\" icon user\" style=\"float: left\"></a><input type=\"text\"  name=\"name\" id=\"username3\" value=\"\">
        </li>
        <div class=\"clear\"> </div>
        <li style=\"list-style-type:none;\">
            <a href=\"#\" class=\"icon lock\" style=\"float: left \"></a><input type=\"password\" name=\"pwd\" id=\"password3\" value=\"\">
        </li>
        <div class=\"clear\"> </div>
        <div class=\"submit\">
            <input  id=\"popup-submit-mobile\" type=\"submit\" value=\"登陆\">
            <h4><a href=\"#\">Lost your Password ?</a></h4> <h4><a href=\"index.php?c=user&a=register\">新用户</a></h4>
        </div>
    </div>

    <div id=\"mask\"></div>
    <div id=\"popup-captcha-mobile\"></div>

    <script>
        \$(\"#mask\").click(function () {
            \$(\"#mask, #popup-captcha-mobile\").hide();
        });
        \$(\"#popup-submit-mobile\").click(function () {
            \$(\"#mask, #popup-captcha-mobile\").show();
        });
        var handlerPopupMobile = function (captchaObj) {
            // 将验证码加到id为captcha的元素里
            captchaObj.appendTo(\"#popup-captcha-mobile\");
            //拖动验证成功后两秒(可自行设置时间)自动发生跳转等行为
            captchaObj.onSuccess(function () {
                var validate = captchaObj.getValidate();
                \$.ajax({
                    url: \"index.php?c=login&a=logindo\", // 进行二次验证
                    type: \"post\",
                    dataType: \"json\",
                    data: {
                        // 二次验证所需的三个值
                        type: \"mobile\",
                        username: \$('#username3').val(),
                        password: \$('#password3').val(),
                        geetest_challenge: validate.geetest_challenge,
                        geetest_validate: validate.geetest_validate,
                        geetest_seccode: validate.geetest_seccode
                    },
                    success: function (data) {
                        if (data && (data.status === \"success\")) {
                            //swal(\"Good!\", \"恭喜您登录成功\", \"success\");
                            swal({
                                title: \"Good!\",
                                text: \"恭喜您登录成功!\",
                                type: \"success\",
                                confirmButtonText: \"Cool\"
                            });
                            \$('.confirm').click(function(){
                                window.location.href='index.php?c=User&a=mymain'
                            })
                        } else {
                            swal(\"OMG!\", \"用户名或者密码错误！\", \"error\");
                            \$('.confirm').click(function(){
                                window.location.href='index.php?c=login&a=login'
                            })
                        }
                    }
                });
            });
            // 更多接口参考：http://www.geetest.com/install/sections/idx-client-sdk.html
        };
        \$.ajax({
            // 获取id，challenge，success（是否启用failback）
            url: \"../lity/app/views/login/web/StartCaptchaServlet.php?type=mobile&t=\" + (new Date()).getTime(), // 加随机数防止缓存
            type: \"get\",
            dataType: \"json\",
            success: function (data) {
                // 使用initGeetest接口
                // 参数1：配置参数
                // 参数2：回调，回调的第一个参数验证码对象，之后可以使用它做appendTo之类的事件
                initGeetest({
                    gt: data.gt,
                    challenge: data.challenge,
                    offline: !data.success // 表示用户后台检测极验服务器是否宕机，一般不需要关注
                    // 更多配置参数请参见：http://www.geetest.com/install/sections/idx-client-sdk.html#config
                }, handlerPopupMobile);
            }
        });
    </script>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "login/login.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link href=\"public/css/style.css\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"public/css/sweetalert.css\"/>
    <script>var __links = document.querySelectorAll('a');function __linkClick(e) { parent.window.postMessage(this.href, '*');} ;for (var i = 0, l = __links.length; i < l; i++) {if ( __links[i].getAttribute('data-t') == '_blank' ) { __links[i].addEventListener('click', __linkClick, false);}}</script>
    <script>\$(document).ready(function(c) {
            \$('.alert-close').on('click', function(c){
                \$('.message').fadeOut('slow', function(c){
                    \$('.message').remove();
                });
            });
        });
    </script>
    <title></title>
    <style>
        .demo{width:300px; margin:60px auto 10px auto}
        @media only screen and (min-width: 420px) {
            .demo{width:500px; margin:60px auto 10px auto}
        }
        body {
            margin: 50px 0;
            text-align: center;
        }
        .inp {
            border: 1px solid gray;
            padding: 0 10px;
            width: 200px;
            height: 30px;
            font-size: 18px;
        }
        .btn {
            border: 1px solid gray;
            width: 100px;
            height: 30px;
            font-size: 18px;
            cursor: pointer;
        }
        #embed-captcha {
            width: 300px;
            margin: 0 auto;
        }
        .show {
            display: block;
        }
        .hide {
            display: none;
        }
        #notice {
            color: red;
        }
        /* 以下遮罩层为demo.用户可自行设计实现 */
        #mask {
            display: none;
            position: fixed;
            text-align: center;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            overflow: auto;
        }
        /* 可自行设计实现captcha的位置大小 */
        .popup-mobile {
            position: relative;
        }
        #popup-captcha-mobile {
            position: fixed;
            display: none;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            -webkit-transform: translate(-50%, -50%);
            z-index: 9999;
        }
    </style>
</head>
<body>

<!-- 引入封装了failback的接口--initGeetest -->
<script src=\"http://static.geetest.com/static/tools/gt.js\"></script>
<script type=\"text/javascript\" src=\"public/js/jquery.js\"></script>
<script type=\"text/javascript\" src=\"public/js/sweetalert.min.js\"></script>
<!-- 若是https，使用以下接口 -->
<!-- <script src=\"https://code.jquery.com/jquery-1.12.3.min.js\"></script> -->
<!-- <script src=\"https://static.geetest.com/static/tools/gt.js\"></script> -->


<div class=\"message warning\">
    <div class=\"inset\">
        <div class=\"login-head\">
            <h1>登陆</h1>
            <div class=\"alert-close\"> </div>
        </div>
        <li style=\"list-style-type:none;\">
            <a href=\"#\" class=\" icon user\" style=\"float: left\"></a><input type=\"text\"  name=\"name\" id=\"username3\" value=\"\">
        </li>
        <div class=\"clear\"> </div>
        <li style=\"list-style-type:none;\">
            <a href=\"#\" class=\"icon lock\" style=\"float: left \"></a><input type=\"password\" name=\"pwd\" id=\"password3\" value=\"\">
        </li>
        <div class=\"clear\"> </div>
        <div class=\"submit\">
            <input  id=\"popup-submit-mobile\" type=\"submit\" value=\"登陆\">
            <h4><a href=\"#\">Lost your Password ?</a></h4> <h4><a href=\"index.php?c=user&a=register\">新用户</a></h4>
        </div>
    </div>

    <div id=\"mask\"></div>
    <div id=\"popup-captcha-mobile\"></div>

    <script>
        \$(\"#mask\").click(function () {
            \$(\"#mask, #popup-captcha-mobile\").hide();
        });
        \$(\"#popup-submit-mobile\").click(function () {
            \$(\"#mask, #popup-captcha-mobile\").show();
        });
        var handlerPopupMobile = function (captchaObj) {
            // 将验证码加到id为captcha的元素里
            captchaObj.appendTo(\"#popup-captcha-mobile\");
            //拖动验证成功后两秒(可自行设置时间)自动发生跳转等行为
            captchaObj.onSuccess(function () {
                var validate = captchaObj.getValidate();
                \$.ajax({
                    url: \"index.php?c=login&a=logindo\", // 进行二次验证
                    type: \"post\",
                    dataType: \"json\",
                    data: {
                        // 二次验证所需的三个值
                        type: \"mobile\",
                        username: \$('#username3').val(),
                        password: \$('#password3').val(),
                        geetest_challenge: validate.geetest_challenge,
                        geetest_validate: validate.geetest_validate,
                        geetest_seccode: validate.geetest_seccode
                    },
                    success: function (data) {
                        if (data && (data.status === \"success\")) {
                            //swal(\"Good!\", \"恭喜您登录成功\", \"success\");
                            swal({
                                title: \"Good!\",
                                text: \"恭喜您登录成功!\",
                                type: \"success\",
                                confirmButtonText: \"Cool\"
                            });
                            \$('.confirm').click(function(){
                                window.location.href='index.php?c=User&a=mymain'
                            })
                        } else {
                            swal(\"OMG!\", \"用户名或者密码错误！\", \"error\");
                            \$('.confirm').click(function(){
                                window.location.href='index.php?c=login&a=login'
                            })
                        }
                    }
                });
            });
            // 更多接口参考：http://www.geetest.com/install/sections/idx-client-sdk.html
        };
        \$.ajax({
            // 获取id，challenge，success（是否启用failback）
            url: \"../lity/app/views/login/web/StartCaptchaServlet.php?type=mobile&t=\" + (new Date()).getTime(), // 加随机数防止缓存
            type: \"get\",
            dataType: \"json\",
            success: function (data) {
                // 使用initGeetest接口
                // 参数1：配置参数
                // 参数2：回调，回调的第一个参数验证码对象，之后可以使用它做appendTo之类的事件
                initGeetest({
                    gt: data.gt,
                    challenge: data.challenge,
                    offline: !data.success // 表示用户后台检测极验服务器是否宕机，一般不需要关注
                    // 更多配置参数请参见：http://www.geetest.com/install/sections/idx-client-sdk.html#config
                }, handlerPopupMobile);
            }
        });
    </script>
</body>
</html>
";
    }
}

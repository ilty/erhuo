<?php

/* user/register.php */
class __TwigTemplate_4cad8e9845f2cda494a6137640458ce17237a543dd33698f5877a168be61d2f3 extends Twig_Template
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
        echo "<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\" />
    <title>注册二货</title>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"app/views/user/css/kuaizhuce.css\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"app/views/user/css/font-awesome.min.css\"/>
    <script src=\"app/views/user/js/jq.js\"></script>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
</head>
<body>
<div class=\"wrap\">
    <header>
        <div class=\"left\"><a href=\"index.php?c=login&a=login\"><i class=\"fa fa-angle-left fa-5x\"></i><p>关闭</p></a></div>
        <div class=\"right\"><h1>二货注册</h1></div>
    </header>
    <section>
        <div class=\"sec1\">
            <i class=\"fa fa-user fa-5x\"></i>
            <input type=\"text\" class=\"name\" placeholder=\"|  请输入您的用户名\t\" />
        </div>
        <div class=\"sec1_2\">
            <i class=\"fa fa-unlock-alt fa-5x\"></i>
            <input type=\"text\" name=\"pwd\" class=\"pwd1\" placeholder=\"|  请输入密码\t\" />
        </div>
        <div class=\"sec1\">
            <i class=\"fa fa-unlock-alt fa-5x\"></i>
            <input type=\"text\" class=\"pwd2\" placeholder=\"|  请再次输入您的密码\t\" />
        </div>
        <div class=\"sec1\">
            <i class=\"fa fa-mobile fa-5x\"></i>
            <input type=\"text\" class=\"tel\" placeholder=\"|  请输入您的手机号\t\" />
        </div>
        <div class=\"sec1_3\">
            <img src=\"app/views/user/img/kuaizhuce/images/img1_03.png\"/>
            <input type=\"text\"  placeholder=\"|  请输短信验证码\" class=\"inp\" />
            <input type=\"button\" id=\"btn\" value=\"免费获取验证码\" style=\"
  width: 25%;
  height: 2.8rem;
  border: none;
  color: white;
  border-radius: 1rem;
  background: #fd5501;
  position: absolute;
  top: 0.6rem;
  right: 1.2rem;\" onclick=\"settime(this)\" />
        </div>
        <div class=\"sec2_1\">
            <input type=\"checkbox\" class=\"ty\"><p>我同意，<a href=\"#\"><span>《二货协议》</a></span></p>
        </div>
        <div class=\"sec2\">
            <p class=\"ppp\"></p>
            <a href=\"#\"><button class=\"zhu\">注册</button></a>
        </div>
        <div class=\"sec3\">
            <ul>
                <li>已有账号，<a href=\"index.php?c=login&a=login\"><span>去登录</a></span></li>
            </ul>
        </div>
    </section>
</div>
</body>
<script>
    var countdown=60;
    function settime(obj) {
        if(countdown == 59){
            fayzm();
        }
        if (countdown == 0) {
            obj.removeAttribute(\"disabled\");
            obj.value=\"免费获取验证码\";
            countdown = 60;
            return;
        } else {
            obj.setAttribute(\"disabled\", true);
            obj.value=\"重新发送(\" + countdown + \")\";
            countdown--;
        }
        setTimeout(function() {settime(obj)},1000)
    }
    function fayzm(){
        var tel=\$('.tel').val();
        \$.post(\"index.php?c=user&a=yzm\", {tel:tel},
            function(data){
                if(data.success=='1'){
                    alert('验证码已发送，请注意查收');
                }
            },'json');
    }
    \$(function(){
        \$('.zhu').click(function(){
            var name=\$('.name').val();
            var pwd1=\$('.pwd1').val();
            var pwd2=\$('.pwd2').val();
            var tel=\$('.tel').val();
            var inp=\$('.inp').val();
            var yzm=\$('.yzm').val();
            if(name==\"\"){
                \$('.ppp').html('用户名不能为空').fadeIn(\"slow\",1);
            }else{
                if(!pwd1.match(/^\\w{6,}\$/)){
                    \$('.ppp').html('密码必须大于6位').fadeIn(\"slow\",1);
                }else{
                    if(pwd1 !=pwd2){
                        \$('.ppp').html('2次输入密码不一致').fadeIn(\"slow\",1);
                    }else{
                        if(!tel.match(/^[1][3][0-9]{9}\$/)){
                            \$('.ppp').html('手机号格式不正确').fadeIn(\"slow\",1);
                        }else{
                            if(!inp.match(/^[0-9]{4}\$/)){
                                \$('.ppp').html('验证码格式不正确').fadeIn(\"slow\",1);
                            }
                            if(\$(\".ty\").attr(\"checked\")===false){
                                alert('请选择')
                            }
                            \$.post(\"index.php?c=user&a=registerdo\", { name:name,pwd:pwd1,tel:tel,yzm:inp},function(data){
                                if(data=='yzmno'){
                                    \$('.ppp').html('验证码不正确').fadeIn(\"slow\",1);
                                }
                                if(data != '0'){
                                    alert('注册成功');location.href='www.lity.site/lity/index.php?c=login&a=login';
                                }
                            });
                        }
                    }
                }
            }

        })
    })
</script>
</html>";
    }

    public function getTemplateName()
    {
        return "user/register.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSource()
    {
        return "<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\" />
    <title>注册二货</title>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"app/views/user/css/kuaizhuce.css\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"app/views/user/css/font-awesome.min.css\"/>
    <script src=\"app/views/user/js/jq.js\"></script>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
</head>
<body>
<div class=\"wrap\">
    <header>
        <div class=\"left\"><a href=\"index.php?c=login&a=login\"><i class=\"fa fa-angle-left fa-5x\"></i><p>关闭</p></a></div>
        <div class=\"right\"><h1>二货注册</h1></div>
    </header>
    <section>
        <div class=\"sec1\">
            <i class=\"fa fa-user fa-5x\"></i>
            <input type=\"text\" class=\"name\" placeholder=\"|  请输入您的用户名\t\" />
        </div>
        <div class=\"sec1_2\">
            <i class=\"fa fa-unlock-alt fa-5x\"></i>
            <input type=\"text\" name=\"pwd\" class=\"pwd1\" placeholder=\"|  请输入密码\t\" />
        </div>
        <div class=\"sec1\">
            <i class=\"fa fa-unlock-alt fa-5x\"></i>
            <input type=\"text\" class=\"pwd2\" placeholder=\"|  请再次输入您的密码\t\" />
        </div>
        <div class=\"sec1\">
            <i class=\"fa fa-mobile fa-5x\"></i>
            <input type=\"text\" class=\"tel\" placeholder=\"|  请输入您的手机号\t\" />
        </div>
        <div class=\"sec1_3\">
            <img src=\"app/views/user/img/kuaizhuce/images/img1_03.png\"/>
            <input type=\"text\"  placeholder=\"|  请输短信验证码\" class=\"inp\" />
            <input type=\"button\" id=\"btn\" value=\"免费获取验证码\" style=\"
  width: 25%;
  height: 2.8rem;
  border: none;
  color: white;
  border-radius: 1rem;
  background: #fd5501;
  position: absolute;
  top: 0.6rem;
  right: 1.2rem;\" onclick=\"settime(this)\" />
        </div>
        <div class=\"sec2_1\">
            <input type=\"checkbox\" class=\"ty\"><p>我同意，<a href=\"#\"><span>《二货协议》</a></span></p>
        </div>
        <div class=\"sec2\">
            <p class=\"ppp\"></p>
            <a href=\"#\"><button class=\"zhu\">注册</button></a>
        </div>
        <div class=\"sec3\">
            <ul>
                <li>已有账号，<a href=\"index.php?c=login&a=login\"><span>去登录</a></span></li>
            </ul>
        </div>
    </section>
</div>
</body>
<script>
    var countdown=60;
    function settime(obj) {
        if(countdown == 59){
            fayzm();
        }
        if (countdown == 0) {
            obj.removeAttribute(\"disabled\");
            obj.value=\"免费获取验证码\";
            countdown = 60;
            return;
        } else {
            obj.setAttribute(\"disabled\", true);
            obj.value=\"重新发送(\" + countdown + \")\";
            countdown--;
        }
        setTimeout(function() {settime(obj)},1000)
    }
    function fayzm(){
        var tel=\$('.tel').val();
        \$.post(\"index.php?c=user&a=yzm\", {tel:tel},
            function(data){
                if(data.success=='1'){
                    alert('验证码已发送，请注意查收');
                }
            },'json');
    }
    \$(function(){
        \$('.zhu').click(function(){
            var name=\$('.name').val();
            var pwd1=\$('.pwd1').val();
            var pwd2=\$('.pwd2').val();
            var tel=\$('.tel').val();
            var inp=\$('.inp').val();
            var yzm=\$('.yzm').val();
            if(name==\"\"){
                \$('.ppp').html('用户名不能为空').fadeIn(\"slow\",1);
            }else{
                if(!pwd1.match(/^\\w{6,}\$/)){
                    \$('.ppp').html('密码必须大于6位').fadeIn(\"slow\",1);
                }else{
                    if(pwd1 !=pwd2){
                        \$('.ppp').html('2次输入密码不一致').fadeIn(\"slow\",1);
                    }else{
                        if(!tel.match(/^[1][3][0-9]{9}\$/)){
                            \$('.ppp').html('手机号格式不正确').fadeIn(\"slow\",1);
                        }else{
                            if(!inp.match(/^[0-9]{4}\$/)){
                                \$('.ppp').html('验证码格式不正确').fadeIn(\"slow\",1);
                            }
                            if(\$(\".ty\").attr(\"checked\")===false){
                                alert('请选择')
                            }
                            \$.post(\"index.php?c=user&a=registerdo\", { name:name,pwd:pwd1,tel:tel,yzm:inp},function(data){
                                if(data=='yzmno'){
                                    \$('.ppp').html('验证码不正确').fadeIn(\"slow\",1);
                                }
                                if(data != '0'){
                                    alert('注册成功');location.href='www.lity.site/lity/index.php?c=login&a=login';
                                }
                            });
                        }
                    }
                }
            }

        })
    })
</script>
</html>";
    }
}

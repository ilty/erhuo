<?php

/* near/add.php */
class __TwigTemplate_7cc79c3213d15b25b0786ea9eaafebc1dcf98648f8290580537a3ce440401d4a extends Twig_Template
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
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<title>55社区</title>
        <meta name=\"description\" content=\"\">
        <meta name=\"keywords\" content=\"\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\">
        <meta name=\"renderer\" content=\"webkit\">
        <meta http-equiv=\"Cache-Control\" content=\"no-siteapp\" />
        <link rel=\"icon\" type=\"image/png\" href=\"theme/default/images/favicon.png\">
\t\t<link href=\"theme/css/amazeui.min.css\" rel=\"stylesheet\" type=\"text/css\" />
\t\t<link href=\"theme/css/style.css\" rel=\"stylesheet\" type=\"text/css\" />
\t\t<script src=\"public/js/jquery.js\"></script>
\t\t<script src=\"public/js/prefixfree.min.js\"></script>
    \t<script src=\"public/js/modernizr.js\"></script>
\t\t<script type=\"text/javascript\" src=\"http://api.map.baidu.com/api?v=2.0&ak=SnS6Z2pa2I3hpTTSoBKBAvN3i8zZLho9\"></script>
<style>
\t\tbody {
  text-align: center;
}

* {
  -webkit-box-sizing: border-box;
     -moz-box-sizing: border-box;
          box-sizing: border-box;
}

/* The loader container */
.out{
\t\t position: absolute; top: 0px; filter: alpha(opacity=60); background-color: #777;     
           z-index: 100; left: 0px;     
           opacity:0.5; -moz-opacity:0.5;    
           height:100%;
           width:100%;
}
.loader {
  position: absolute;
  top: 50%;
  left: 50%;

  width: 200px;
  height: 200px;

  margin-top: -100px;
  margin-left: -100px;


  perspective: 100px;
  transform-type: preserve-3d;

  animation: loader 6s cubic-bezier(0,0,1,1) infinite;



}

/* Loader animation */
@keyframes loader {
  0% {
    transform: rotateX(30deg) rotateZ(0deg);
  }
  100% {
    transform: rotateX(30deg) rotateZ(-360deg);
  }
}

/* The dot */
.dot {
  position: absolute;
  top: 50%;
  left: 50%;
  z-index: 10;

  width: 20px;
  height: 20px;

  margin-top: -90px;
  margin-left: -10px;

  border-radius: 10px;

  background-color: #1e3f57;

  transform-type: preserve-3d;
  transform-origin: 50% 90px;
  transform: rotateZ(30deg);

  animation: dot1 1.5s cubic-bezier(.6,0,.4,1) infinite;
}

.dot:nth-child(2) {
  transform: rotateZ(15deg);
  animation-name: dot2;
  animation-delay: 150ms;
  background-color: #2d556d;
}

.dot:nth-child(3) {
  transform: rotateZ(0deg);
  animation-name: dot3;
  animation-delay: 300ms;
  background-color: #447891;
}

.dot:nth-child(4) {
  transform: rotateZ(-15deg);
  animation-name: dot4;
  animation-delay: 450ms;
  background-color: #5998b2;
}

.dot:nth-child(5) {
  transform: rotateZ(-30deg);
  animation-name: dot5;
  animation-delay: 600ms;
  background-color: #6bb2cd;
}

/* Dot animations */
@keyframes dot1 {
  0% {
    transform: rotateZ(30deg) rotateX(10deg);
  }
  95%, 100% {
    transform: rotateZ(390deg) rotateX(10deg);
  }
}

@keyframes dot2 {
  0% {
    transform: rotateZ(15deg) rotateX(10deg);
  }
  95%, 100% {
    transform: rotateZ(375deg) rotateX(10deg);
  }
}

@keyframes dot3 {
  0% {
    transform: rotateZ(0deg) rotateX(10deg);
  }
  95%, 100% {
    transform: rotateZ(360deg) rotateX(10deg);
  }
}

@keyframes dot4 {
  0% {
    transform: rotateZ(-15deg) rotateX(10deg);
  }
  95%, 100% {
    transform: rotateZ(345deg) rotateX(10deg);
  }
}

@keyframes dot5 {
  0% {
    transform: rotateZ(-30deg) rotateX(10deg);
  }
  95%, 100% {
    transform: rotateZ(330deg) rotateX(10deg);
  }
}
</style>

\t\t
\t</head>
\t<body>
\t\t<header data-am-widget=\"header\" class=\"am-header am-header-default sq-head \">
\t\t\t<div class=\"am-header-left am-header-nav\">
\t\t\t\t<a href=\"javascript:history.back()\" class=\"\">
\t\t\t\t\t<i class=\"am-icon-chevron-left\"></i>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<h1 class=\"am-header-title\">
  \t            <a href=\"\" class=\"\">建立鱼塘</a>
            </h1>
\t    </header>
\t    <div style=\"height: 49px;\"></div>
\t    <form id='myform' action=\"index.php?c=near&a=save\" method=\"post\" enctype=\"multipart/form-data\">
\t    <div class=\"whitebar\">
\t    <div data-am-widget=\"tabs\" class=\"am-tabs am-tabs-d2\">
\t\t\t     
\t\t\t      <div style=\"height: 49px;\"></div>
\t\t\t      
\t\t\t      <div class=\"am-tabs-bd\">
\t\t\t      
\t\t\t          <div data-tab-panel-0 class=\"am-tab-panel am-active\">
                            <div class=\"intergral\">
\t\t\t\t\t\t    \t<input required type=\"text\"  placeholder=\"请输入鱼塘名\" class=\"login-password\" name=\"near_name\" id='name'>
\t\t\t\t\t\t    \t<input required type=\"text\"  placeholder=\"请输入塘主昵称\" class=\"login-name\" name=\"near_owner\" id=\"nickname\">
\t\t\t\t\t\t    \t<textarea required placeholder=\"鱼塘说明\" class=\"integ-text\" style=\"margin-top:15px;\" name=\"near_desc\" id='desc'></textarea>
\t\t\t\t\t\t    \t<input type=\"file\" required class=\"login-name\" style=\"margin-top:15px;\" name=\"near_image\"/ id='image'>
\t\t\t\t\t\t    \t<input type=\"submit\" class=\"login-btn\" value=\"提交\" id=\"add\"/>
\t\t\t\t\t\t    </div>
\t\t\t          </div>
\t\t\t          
\t\t\t      </div>
\t\t\t      
        </div>
\t   </div>
\t  </form>
\t  <div class=\"out\" style=\"display:none;\">
\t  \t
<div class=\"loader\" >
  <div class=\"dot\"></div>
  <div class=\"dot\"></div>
  <div class=\"dot\"></div>
  <div class=\"dot\"></div>
  <div class=\"dot\"></div>
</div>

\t  </div>
\t  
\t 

<script src=\"theme/js/amazeui.min.js\"></script>


\t</body>
</html>
<script>
\t\$(function(){
\t\t\$('#add').on('click',function(evt){
\t\t\tevt.preventDefault();\t
\t\t\tif(!\$('#name').val() || !\$('#nickname').val() || !\$('#desc').val() || !\$('#image').val())
\t\t\t{
\t\t\t\talert('请将信息填写完整');
\t\t\t\treturn ;
\t\t\t}
\t\t\t\$('.out').show();
\t\t\tvar data = new FormData(\$('#myform')[0]);
\t\t\t//获取经纬度
\t\t\tif (navigator.geolocation){
                  navigator.geolocation.getCurrentPosition(showPosition);
              }
             
             function showPosition(position){  
                var x = position.coords.longitude;
                var y = position.coords.latitude;
                var map = new BMap.Map(\"allmap\");
                var point = new BMap.Point(x,y);
                var geoc = new BMap.Geocoder();
                geoc.getLocation(point, function(rs){
                      var addComp = rs.addressComponents;
                      var dizhi = addComp.province + \", \" + addComp.city + \", \" + addComp.district + \", \" + addComp.street + \", \" + addComp.streetNumber;
               \t\t  data.append('near_address',dizhi);
               \t\t  data.append('near_long',x);                
\t\t\t\t\t\tdata.append('near_lat',y);
\t\t\t\t\t\t\$.ajax({
\t\t\t\t\t\t\t'url':'index.php?c=near&a=save',
\t\t\t\t\t\t\t'data':data,
\t\t\t\t\t\t\t'type':'post',
\t\t\t\t\t\t\t'contentType': false, //必须false才会避开jQuery对 formdata 的默认处理 XMLHttpRequest会对 formdata 进行正确的处理 
\t\t\t    \t\t\t'processData': false,
\t\t\t\t\t\t\tsuccess:function(msg){
\t\t\t\t\t\t\t\t\$('.out').hide();
\t\t\t\t\t\t\t\talert(msg)
\t\t\t\t\t\t\t\t//location.href = 'index.php?c=near&a/mynear';

\t\t\t\t\t\t\t}
\t\t\t\t\t})
                });
\t\t\t\t
            }
\t\t})
\t})
</script>
";
    }

    public function getTemplateName()
    {
        return "near/add.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<title>55社区</title>
        <meta name=\"description\" content=\"\">
        <meta name=\"keywords\" content=\"\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\">
        <meta name=\"renderer\" content=\"webkit\">
        <meta http-equiv=\"Cache-Control\" content=\"no-siteapp\" />
        <link rel=\"icon\" type=\"image/png\" href=\"theme/default/images/favicon.png\">
\t\t<link href=\"theme/css/amazeui.min.css\" rel=\"stylesheet\" type=\"text/css\" />
\t\t<link href=\"theme/css/style.css\" rel=\"stylesheet\" type=\"text/css\" />
\t\t<script src=\"public/js/jquery.js\"></script>
\t\t<script src=\"public/js/prefixfree.min.js\"></script>
    \t<script src=\"public/js/modernizr.js\"></script>
\t\t<script type=\"text/javascript\" src=\"http://api.map.baidu.com/api?v=2.0&ak=SnS6Z2pa2I3hpTTSoBKBAvN3i8zZLho9\"></script>
<style>
\t\tbody {
  text-align: center;
}

* {
  -webkit-box-sizing: border-box;
     -moz-box-sizing: border-box;
          box-sizing: border-box;
}

/* The loader container */
.out{
\t\t position: absolute; top: 0px; filter: alpha(opacity=60); background-color: #777;     
           z-index: 100; left: 0px;     
           opacity:0.5; -moz-opacity:0.5;    
           height:100%;
           width:100%;
}
.loader {
  position: absolute;
  top: 50%;
  left: 50%;

  width: 200px;
  height: 200px;

  margin-top: -100px;
  margin-left: -100px;


  perspective: 100px;
  transform-type: preserve-3d;

  animation: loader 6s cubic-bezier(0,0,1,1) infinite;



}

/* Loader animation */
@keyframes loader {
  0% {
    transform: rotateX(30deg) rotateZ(0deg);
  }
  100% {
    transform: rotateX(30deg) rotateZ(-360deg);
  }
}

/* The dot */
.dot {
  position: absolute;
  top: 50%;
  left: 50%;
  z-index: 10;

  width: 20px;
  height: 20px;

  margin-top: -90px;
  margin-left: -10px;

  border-radius: 10px;

  background-color: #1e3f57;

  transform-type: preserve-3d;
  transform-origin: 50% 90px;
  transform: rotateZ(30deg);

  animation: dot1 1.5s cubic-bezier(.6,0,.4,1) infinite;
}

.dot:nth-child(2) {
  transform: rotateZ(15deg);
  animation-name: dot2;
  animation-delay: 150ms;
  background-color: #2d556d;
}

.dot:nth-child(3) {
  transform: rotateZ(0deg);
  animation-name: dot3;
  animation-delay: 300ms;
  background-color: #447891;
}

.dot:nth-child(4) {
  transform: rotateZ(-15deg);
  animation-name: dot4;
  animation-delay: 450ms;
  background-color: #5998b2;
}

.dot:nth-child(5) {
  transform: rotateZ(-30deg);
  animation-name: dot5;
  animation-delay: 600ms;
  background-color: #6bb2cd;
}

/* Dot animations */
@keyframes dot1 {
  0% {
    transform: rotateZ(30deg) rotateX(10deg);
  }
  95%, 100% {
    transform: rotateZ(390deg) rotateX(10deg);
  }
}

@keyframes dot2 {
  0% {
    transform: rotateZ(15deg) rotateX(10deg);
  }
  95%, 100% {
    transform: rotateZ(375deg) rotateX(10deg);
  }
}

@keyframes dot3 {
  0% {
    transform: rotateZ(0deg) rotateX(10deg);
  }
  95%, 100% {
    transform: rotateZ(360deg) rotateX(10deg);
  }
}

@keyframes dot4 {
  0% {
    transform: rotateZ(-15deg) rotateX(10deg);
  }
  95%, 100% {
    transform: rotateZ(345deg) rotateX(10deg);
  }
}

@keyframes dot5 {
  0% {
    transform: rotateZ(-30deg) rotateX(10deg);
  }
  95%, 100% {
    transform: rotateZ(330deg) rotateX(10deg);
  }
}
</style>

\t\t
\t</head>
\t<body>
\t\t<header data-am-widget=\"header\" class=\"am-header am-header-default sq-head \">
\t\t\t<div class=\"am-header-left am-header-nav\">
\t\t\t\t<a href=\"javascript:history.back()\" class=\"\">
\t\t\t\t\t<i class=\"am-icon-chevron-left\"></i>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<h1 class=\"am-header-title\">
  \t            <a href=\"\" class=\"\">建立鱼塘</a>
            </h1>
\t    </header>
\t    <div style=\"height: 49px;\"></div>
\t    <form id='myform' action=\"index.php?c=near&a=save\" method=\"post\" enctype=\"multipart/form-data\">
\t    <div class=\"whitebar\">
\t    <div data-am-widget=\"tabs\" class=\"am-tabs am-tabs-d2\">
\t\t\t     
\t\t\t      <div style=\"height: 49px;\"></div>
\t\t\t      
\t\t\t      <div class=\"am-tabs-bd\">
\t\t\t      
\t\t\t          <div data-tab-panel-0 class=\"am-tab-panel am-active\">
                            <div class=\"intergral\">
\t\t\t\t\t\t    \t<input required type=\"text\"  placeholder=\"请输入鱼塘名\" class=\"login-password\" name=\"near_name\" id='name'>
\t\t\t\t\t\t    \t<input required type=\"text\"  placeholder=\"请输入塘主昵称\" class=\"login-name\" name=\"near_owner\" id=\"nickname\">
\t\t\t\t\t\t    \t<textarea required placeholder=\"鱼塘说明\" class=\"integ-text\" style=\"margin-top:15px;\" name=\"near_desc\" id='desc'></textarea>
\t\t\t\t\t\t    \t<input type=\"file\" required class=\"login-name\" style=\"margin-top:15px;\" name=\"near_image\"/ id='image'>
\t\t\t\t\t\t    \t<input type=\"submit\" class=\"login-btn\" value=\"提交\" id=\"add\"/>
\t\t\t\t\t\t    </div>
\t\t\t          </div>
\t\t\t          
\t\t\t      </div>
\t\t\t      
        </div>
\t   </div>
\t  </form>
\t  <div class=\"out\" style=\"display:none;\">
\t  \t
<div class=\"loader\" >
  <div class=\"dot\"></div>
  <div class=\"dot\"></div>
  <div class=\"dot\"></div>
  <div class=\"dot\"></div>
  <div class=\"dot\"></div>
</div>

\t  </div>
\t  
\t 

<script src=\"theme/js/amazeui.min.js\"></script>


\t</body>
</html>
<script>
\t\$(function(){
\t\t\$('#add').on('click',function(evt){
\t\t\tevt.preventDefault();\t
\t\t\tif(!\$('#name').val() || !\$('#nickname').val() || !\$('#desc').val() || !\$('#image').val())
\t\t\t{
\t\t\t\talert('请将信息填写完整');
\t\t\t\treturn ;
\t\t\t}
\t\t\t\$('.out').show();
\t\t\tvar data = new FormData(\$('#myform')[0]);
\t\t\t//获取经纬度
\t\t\tif (navigator.geolocation){
                  navigator.geolocation.getCurrentPosition(showPosition);
              }
             
             function showPosition(position){  
                var x = position.coords.longitude;
                var y = position.coords.latitude;
                var map = new BMap.Map(\"allmap\");
                var point = new BMap.Point(x,y);
                var geoc = new BMap.Geocoder();
                geoc.getLocation(point, function(rs){
                      var addComp = rs.addressComponents;
                      var dizhi = addComp.province + \", \" + addComp.city + \", \" + addComp.district + \", \" + addComp.street + \", \" + addComp.streetNumber;
               \t\t  data.append('near_address',dizhi);
               \t\t  data.append('near_long',x);                
\t\t\t\t\t\tdata.append('near_lat',y);
\t\t\t\t\t\t\$.ajax({
\t\t\t\t\t\t\t'url':'index.php?c=near&a=save',
\t\t\t\t\t\t\t'data':data,
\t\t\t\t\t\t\t'type':'post',
\t\t\t\t\t\t\t'contentType': false, //必须false才会避开jQuery对 formdata 的默认处理 XMLHttpRequest会对 formdata 进行正确的处理 
\t\t\t    \t\t\t'processData': false,
\t\t\t\t\t\t\tsuccess:function(msg){
\t\t\t\t\t\t\t\t\$('.out').hide();
\t\t\t\t\t\t\t\talert(msg)
\t\t\t\t\t\t\t\t//location.href = 'index.php?c=near&a/mynear';

\t\t\t\t\t\t\t}
\t\t\t\t\t})
                });
\t\t\t\t
            }
\t\t})
\t})
</script>
";
    }
}

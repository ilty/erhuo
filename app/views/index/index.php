<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>二货</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="icon" type="image/png" href="public/images/favicon.png">
    <link rel="stylesheet" href="public/css/awesome.css">
    <link href="public/css/amazeui.min.css" rel="stylesheet" type="text/css" />
    <link href="public/css/style.css" rel="stylesheet" type="text/css" />
    <script src="public/js/jquery-1.10.2.min.js"></script>
    <script src="public/js/time.js"></script>
    <script>
        $(function () {
            var elm = $('#shortbar');
            var startPos = $(elm).offset().top;
            $.event.add(window, "scroll", function () {
                var p = $(window).scrollTop();
                if (p > startPos) {
                    elm.addClass('sortbar-fixed');
                } else {
                    elm.removeClass('sortbar-fixed');
                }
            });
        });

    </script>
</head>
<body>


<!-- 内容 --><!--图片轮换-->
<div class="am-slider am-slider-default" data-am-flexslider id="demo-slider-0" style="position: relative;">
	<!-- <header data-am-widget="header" class="am-header am-header-default tm-head" id="shortbar" >
			<div class="am-header-left am-header-nav">
		        <a href="city.html" class="">
			        <img src="public/images/city.png" />
			        <p style="font-size: 12px; margin-top: -35px;">南昌</p>
			    </a>
		   </div>
			<h1 class="am-header-title1">
		        <div class="search-box">
		           <input type="text" name="title" class="index-search" placeholder="寻找你喜欢的商品......" />
		           <input type="submit" value="" class="search-icon" /> 
		        </div>
		    </h1>
			<div class="am-header-right am-header-nav">
			    
			    <a href="" class="">
		           <img src="public/images/sao.png" />
		           <p style="font-size: 12px; margin-top: -35px;">扫一扫</p>
		        </a>
			</div>
        </header> -->
  <ul class="am-slides">
    <li><img src="public/images/logo_tu.gif" /></li>
    <li><img src="public/images/rol.gif" /></li>
  </ul>
</div>
<!--导航-->
 <ul class="sq-nav">
      <li>
        <div class="am-gallery-item">
            <a href="newproduct.html" class="">
              <img src="public/images/icon.png" />
              <p>新品</p>
            </a>
        </div>
      </li>
      <li>
        <div class="am-gallery-item">
            <a href="specialprice.html" class="">
              <img src="public/images/icon1.png" />
              <p>特价</p>
            </a>
        </div>
      </li>
      <li>
        <div class="am-gallery-item">
            <a href="reserve.html" class="">
              <img src="public/images/icon2.png" />
              <p>预定</p>
            </a>
        </div>
      </li>
      <li>
        <div class="am-gallery-item">
            <a href="integral.html" class="">
              <img src="public/images/icon3.png" />
              <p>积分</p>
            </a>
        </div>
      </li>
      <li>
        <div class="am-gallery-item">
            <a href="allchips.html" class="">
              <img src="public/images/icon4.png" />
              <p>众筹</p>
            </a>
        </div>
      </li>
      <li>
        <div class="am-gallery-item">
            <a href="whitebar.html" class="">
              <img src="public/images/icon5.png" />
              <p>白条</p>
            </a>
        </div>
      </li>
      <li>
        <div class="am-gallery-item">
            <a href="news.html" class="">
              <img src="public/images/icon6.png" />
              <p>头条</p>
            </a>
        </div>
      </li>
      <li>
        <div class="am-gallery-item">
            <a href="index.php?c=classify&a=all_class" class="">
              <img src="public/images/icon7.png" />
              <p>分类</p>
            </a>
        </div>
      </li>
  </ul>
{% if data|length > 0 %}
      <ul data-am-widget="gallery" class="am-gallery pro-list am-avg-sm-3 am-avg-md-3 am-avg-lg-4 am-gallery-default"  >
        {% for user in data %} 
         <li>
	        <div class="am-gallery-item">
	            <a href="index.php?c=index&a=alone&goods_id={{ user.goods_id|e }}" class="">
	              <img src="{{ user.goods_pic.0 }}" />
	                <h3 class="am-gallery-title">{{ user.goods_name|e }}</h3>
	                <div class="am-gallery-desc">￥{{ user.goods_now|e }}</div>
	            </a>
	        </div>
	      </li>
        {% endfor %} 
        </ul>
{% endif %}
<!--底部-->
<div style="height: 55px;"></div>
<div data-am-widget="navbar" class="am-navbar am-cf am-navbar-default sq-foot am-no-layout" id="">
    <ul id='testUl' class="am-navbar-nav am-cf am-avg-sm-4">
        <li>
            <a href="index.php?c=index&a=index" class="">
                <span class="am-icon-home"></span>
                <span class="am-navbar-label">首页</span>
            </a>
        </li>
        <li>
            <a href="index.php?c=classify&a=all_class" class="">
                <span class="am-icon-th-large"></span>
                <span class="am-navbar-label">分类</span>
            </a>
        </li>

        <li>
            <a href="index.php?c=near" class="">
                <span class="am-icon-shopping-cart"></span>
                <span class="am-navbar-label">附近</span>
            </a>
        </li>
        <li>
            <a href="index.php?c=User&a=mymain" class="">
                <span class="am-icon-user"></span>
                <span class="am-navbar-label">我的55</span>
            </a>
        </li>
    </ul>
</div>

<script src="public/js/jquery.min.js"></script>
<script src="public/js/amazeui.min.js"></script>
<script>
    $(function(){
        $('#testUl li a').click(function(){
            $(this).addClass("curr").siblings().removeClass();
// $('#testUl li')	.removeClass("curr");
            // $(this).addClass("curr");
        });
    });
</script>

<script>
    $(function(){
        $("#pay").click(function(){
            alert(1)
        })
    })
</script>
</body>
</html>



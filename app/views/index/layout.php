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
   

<!-- 内容 -->
<content>
	{% block content %}
	
	{% endblock %}
</content>
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

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
    <script src="http://zaole.net/sliding.js"></script>
  <style>
    /**{
      margin: 0;
      padding: 0;
      list-style: none;
    }*/
    /*body{
        -webkit-tap-highlight-color: transparent;
        font-family: "Helvetica Neue",Helvetica,STHeiTi,Arial;
        font-size: 12px;
        background-color: #f0f0f0;
    }*/
    /*h1{
      font-size: 14px;
      font-weight: 400;
      text-align: center;
      color: #ff6600;
      padding: 0 0 20px;
    }*/
    .box{
      margin: 20px;
      padding: 20px;
      background: #fff;
      text-align: center;
    }
    input{
      margin: 0;
        padding: 0;
        width: 1px;
        opacity: 0;
        height: 1px;
        border: none;
    }
    label{
      display: block;
    }
    .ul_style{
      border: 1px solid #c8c8c8;
        font-size: 0;
        display: inline-block;
        position: relative;
        font-size: 0;
    }
    .ul_style li{
      display: inline-block;
        width: 35px;
        height: 35px;
        font-size: 24px;
        font-weight: 700;
        text-align: center;
        line-height: 40px;
        border-left: 1px solid #e6e6e6;
        vertical-align: middle;
        overflow: hidden;
    }
    ul_style li:first-child {
        border-left: none;
    }
   /* a{
        height: 30px;
        padding: 0 20px;
        border: 1px solid #0064b6;
        border-radius: 3px;
        background: #0071ce;
        color: #fff;
        font-size: 14px;
        line-height: 30px;
        text-align: center;
        display: inline-block;
        outline: 0 none;
        text-decoration: none;
        margin-top: 40px;
    }*/
    .show{
      padding: 20px;
    }
    em{
      font-style: normal;
      color: #ff6600
    }
  </style>
  </head>
  <body>
   
<header data-am-widget="header" class="am-header am-header-default sq-head ">
			<div class="am-header-left am-header-nav">
				<a href="javascript:history.back()" class="">
					<i class="am-icon-chevron-left"></i>
				</a>
			</div>
			<h1 class="am-header-title">
  	            <a href="" class="">完成支付</a>
            </h1>
	    </header>
	    <div style="height: 49px;"></div>
	    <div class="order-detail">
	    	订单提交成功，请您尽快付款：订单编号：{{data.0.order_id}}，您需要支付￥{{data.0.money}}，请您在提交订单后24小时内完成付款，否则订单将自动取消
	    </div>
      <!-- <input type="hidden" value="{{data.0.order_id}}" id="order_id"> -->
      <div style="display:none" id="order_id">{{data.0.order_id}}</div>
	    <!-- <p class="pay-style-box">请选择以下支付方式：</p>
	    <div class="pay-style"> -->
	    	<!-- <label class="am-radio am-warning">
                <input type="radio" name="radio3" value="" data-am-ucheck checked> 支付宝
            </label>
            <label class="am-radio am-warning" style="margin-top: 10px;">
                <input type="radio" name="radio3" value="" data-am-ucheck > 微信
            </label> -->
            <!-- <label class="am-radio am-warning" style="margin-top: 10px;">
                <input style="list-style:none" type="radio" name="radio3" value="" data-am-ucheck > 支付余额
            </label> -->
	    <!-- </div> -->
	    <!-- <a href="{{url}}/buy/pay/id/{{data.0.id}}" class="login-btn">确认支付</a> -->
	    <!-- <a href="javascript:void(0)" id='pay' class="login-btn">确认支付</a> -->

      <div class="box">
    <label for="ipt">
      <ul class="ul_style">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
      </ul>
    </label>
    <input type="tel" id="ipt" maxlength="6">
    <!-- <a href="javascript:void(0);">确认</a> -->
    <!-- <div class="show">您输入的密码： --><em style='display:none'></em><!-- </div> -->
  </div>
  <div class="show_pay" style="display:none"><h1>您已经支付完了！！！</h1></div>
	    <!-- <input type="button" class="login-btn" value="确认支付"> -->
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
  var order_id = $("#order_id").html()
  $(function(){
    $.ajax({
         type: "POST",
         url: "index.php?c=buy&a=check_pay",
         data: "order_id="+order_id,
         success: function(msg){
          if(msg == '1'){
            $(".box").hide()
            $(".show_pay").show()
          }
         }
      });
  })
  $('input').on('input', function (e){
    var numLen = 6;
    var pw = $('input').val();
    var list = $('li');
    $('em').text($('input').val());
    for(var i=0; i<numLen; i++){
      if(pw[i]){
        $(list[i]).text('*');
      }else{
        $(list[i]).text('');
      }
    }
    //验证密码
    var num = $('em').text();
    if(num.length==6){
      $.ajax({
         type: "POST",
         url: "index.php?c=buy&a=pay_money",
         data: "num="+num+"&order_id="+order_id,
         success: function(msg){
           if(msg == '1'){
            window.location.href="http://www.softhearted.site/mvcThree/buy/pay_seccess/order_id/"+order_id; 
           }else if(msg == '0'){
            alert('密码输入错误！！！')
           }else{
            alert('余额不足！！！')
           }
         }
      });
    }
  });
</script>
</body>
</html>
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
<header data-am-widget="header" class="am-header am-header-default sq-head hid">
			<div class="am-header-left am-header-nav">
				<a href="javascript:history.back()" class="">
					<i class="am-icon-chevron-left"></i>
				</a>
			</div>
			<h1 class="am-header-title">
  	            <a href="" class="">商品详情</a>
            </h1>
	    </header>
	    <div style="height: 49px;"></div>
        <div class="am-slider am-slider-default" data-am-flexslider id="demo-slider-0">
		  <ul class="am-slides">
		  	{% for key, val in data.0.goods_pic %}
		  		<li><img src="{{val}}" /></li>
			{% endfor %}
		  </ul>
		</div>
		<div class="detal-info">
			<p class='hid'>{{ data.0.goods_name|e }}</p>
			<h2 class='hid'>一口价：<span>￥{{ data.0.goods_now|e }}</span></h2>
		</div>
		<!-- <div class="d-amount">
        	<h4>数量：</h4>
            <div class="d-stock">
              <a class="decrease/index.html">-</a>
                <input id="num" readonly="" class="text_box" name="" type="text" value="1">
                <input id="id" type="hidden" value="644">
                <a class="increase/index.html">+</a>
               <span id="dprice" class="price" style="display:none"> 36</span>
            </div>
        </div> -->
        <div style="background: #eee; height: 10px;"></div>
        <div class="am-tabs detail-list hid" data-am-tabs>
		  <ul class="am-tabs-nav am-nav am-nav-tabs">
		    <li class="am-active"><a href="#tab1/index.php">宝贝介绍</a></li>
		    <li id='con'><a href="#tab2/index.php">宝贝评论</a></li>
		  </ul>
		
		  <div class="am-tabs-bd">
		    <div class="am-tab-panel am-fade am-in am-active detail " id="tab1" >
		            <p class='hid'>{{ data.0.goods_desc|e }}</p>
                    <!-- <img src="public/images/test11.png" /> -->
		    </div>
		    <div class="am-tab-panel am-fade detail hid" id="tab2">
		         <ul class="comment-pic" id='chan'>
		         	<li>快来留言吧！</li>
		         	<!-- <li>
		         		<div class="tit">
		         			<img src="public/images/tx.png" class="tx" />
		         			<span>songke2014</span>
		         			<i> [2016-01-01]</i>
		         		</div>
		         		<div class="comment-con">
		         			买了些给家人，都说不错！
		         		</div>
		         	</li>
		         	<li>
		         		<div class="tit">
		         			<img src="public/images/tx.png" class="tx" />
		         			<span>songke2014</span>
		         			<i> [2016-01-01]</i>
		         		</div>
		         		<div class="comment-con">
		         			买了些给家人，都说不错！
		         		</div>
		         	</li> -->
		         </ul>
		    </div>
		  </div>
		</div>
		    <!--底部-->
 <div style=" height: 55px;"></div>
 <ul class="fix-shopping">
<!-- <form id='open' action="" style="display:none">
 	<textarea id='message' placeholder="留言内容" class="bz-infor" name="message"></textarea>
 	<button class="js-btn">留言</button>
 	<input class="js-btn" type="submit" value="留言">
 </form> -->
 <input type="hidden" value="{{ data.0.goods_id|e }}" id="goods_id">
 <!-- 回复消息 -->
 <div id="open_two" style="display:none">
 	<span style="float:left" id='val'></span><textarea id='rec_message' placeholder="回复内容" class="bz-infor" name="message"></textarea>
 	<button id='rec_mess' class="js-btn">回复</button>
 </div>
 <!-- 留言 -->
 <div id="open" style="display:none">
 	<textarea id='message' placeholder="留言内容" class="bz-infor" name="message"></textarea>
 	<button id='add_mess' class="js-btn">留言</button>
 </div>
  <!-- <li><a href="index.php?c=/message/add/goods_id/{{ data.0.goods_id|e }}" class="join">留言</a></li> -->
  <li class="close"><a href="javascript:void(0)" onclick="cli()" class="join">留言</a></li>
  <li class="close"><a href="index.php?c=buy&a=commit_order&goods_id={{ data.0.goods_id|e }}" class="imm-buy">立即购买</a></li>
 </ul>

</body>
</html>
 <script>
  //购物数量加减
  $(function(){
    $('.increase').click(function(){
      var self = $(this);
      var current_num = parseInt(self.siblings('input').val());
      current_num += 1;
      self.siblings('input').val(current_num);
      update_item(self.siblings('input').data('item-id'));
    })    
    $('.decrease').click(function(){
      var self = $(this);
      var current_num = parseInt(self.siblings('input').val());
      if(current_num > 1){
        current_num -= 1;
        self.siblings('input').val(current_num);
        update_item(self.siblings('input').data('item-id'));
      }
    })
  })
  //点击显示留言板
  function cli(){
  	$('.close').hide();
  	$('#open').show();
  }
  //点击隐藏留言板
  $(".hid").click(function(){
  	$('.close').show();
  	$('#open').hide();
  	$('#open_two').hide();
  })
  //ajax留言
  $("#add_mess").click(function(){
  	var message = $("#message").val();
  	var goods_id = $("#goods_id").val();
  	$.ajax({
	   type: "POST",
	   url: "index.php?c=message&a=add",
	   data: "message="+message+"&goods_id="+goods_id,
	   success: function(msg){
	     if(msg == '1'){
	     	$('.close').show();
  			$('#open').hide();
	     }else{
	     	alert('留言失败')
	     }
	   }
	});
  })

  $("#con").click(function(){
  	var goods_id = $("#goods_id").val();
  	$.ajax({
	   // type: "POST",
	   url: "index.php?c=message&a=lists&goods_id="+goods_id,
	   // data: "goods_id="+goods_id,
	   success: function(msg){
	   	$("#chan").html(msg);
	   }
	});
  })
  //回复留言显示
  $(document).on("click",".rec",function(){
  	var user_id = $(this).attr('asd');
  	$('#val').html("@"+user_id+":")
  	$('.close').hide();
  	$('#open_two').show();
  })
  //ajax回复留言
  $("#rec_mess").click(function(){
  	var goods_id = $("#goods_id").val();
  	var val = $('#val').html()
  	var content = $('#rec_message').val()
  	$.ajax({
	   type: "POST",
	   url: "index.php?c=message&a=rec_mess",
	   data: "val="+val+"&goods_id="+goods_id+"&content="+content,
	   success: function(msg){
	   	if(msg){
	   		$('.close').show();
  			$('#open_two').hide();
	   	}else{
	   		alert("回复失败");
	   	}
	   }
	});
  })
</script>

<script src="public/js/jquery.min.js"></script>
<script src="public/js/amazeui.min.js"></script>

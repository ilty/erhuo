{% extends 'layout.html' %}

{% block content %}

    <script src="public/js/date.js"></script>
    <script src="public/js/iscroll.js"></script>
    <script type="text/javascript">
      $(function(){
        $('#beginTime').date();
        $('#endTime').date({theme:"datetime"});
      });
        </script>
	<header data-am-widget="header" class="am-header am-header-default sq-head ">
			<div class="am-header-left am-header-nav">
				<a href="javascript:history.back()" class="">
					<i class="am-icon-chevron-left"></i>
				</a>
			</div>
			<h1 class="am-header-title">
  	            <a href="" class="">确认订单</a>
            </h1>
	    </header>
	    <div style="height: 49px;"></div>
	    <h5 class="order-tit">收货人信息</h5>
	    <div class="order-name">
	    	<a href="gladdress.html">
	    		<p class="order-tele">{{user_add.0.user_name|e}}&nbsp;&nbsp;&nbsp;{{user_add.0.tel|e}}</p>
	    		<p class="order-add">{{user_add.0.address|e}}</p>
	    	</a>
	    	<i class="am-icon-angle-right"></i>
	    </div>
        <div style="background: #eee; height: 10px;"></div>
        <h5 class="order-tit">确认订单信息</h5>
        <ul class="shopcart-list" style="padding-bottom: 0; margin-top: 0;">
	    	<li>
                <img src="{{goods_info.0.goods_pic.0|e}}" class="shop-pic" />
                <div class="order-mid">
                	<div class="tit">{{goods_info.0.goods_name|e}}</div>
                	<div class="order-price">￥{{goods_info.0.goods_now|e}} <i>X1</i></div>
                </div>
	    	</li>
	    </ul>
	    <ul class="order-infor">
	    	<li class="order-infor-first">
	    		<span>商品总计：</span>
	    		<i>￥{{goods_info.0.goods_now|e}}</i>
	    	</li>
	    	<li class="order-infor-first">
	    		<span>运费：</span>
	    		<i>包邮</i>
	    	</li>
	    	<li class="order-infor-first">
	    		<a href="integral.html">积分抵费></a>
	    	</li>
	    	<li class="order-infor-first">
	    		<a href="yhq.html">选择优惠券></a>
	    	</li>
	    </ul>
	    <div style="background: #eee; height: 10px;"></div>
	    

	    <textarea placeholder="备注说明" class="bz-infor"></textarea>
	    <div style="background: #eee; height: 10px;"></div>
	    <div style="height: 55px;"></div>
	    <div class="shop-fix">
	    	<div class="order-text">
	    		应付总额：<span>￥{{goods_info.0.goods_now|e}}</span>
	    	</div>
	    	<a href="index.php?c=buy&a=buy_this&order_id={{order_id|e}}" class="js-btn">提交订单</a>
	    </div>
{% endblock %}
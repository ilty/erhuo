{% extends 'layout.html' %}

{% block content %}
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
	    <div class="add-address">
           <a href="address.html">+新建收货地址</a>
           <i class="am-icon-angle-right"></i>
        </div>
        <div style="background: #eee; height: 10px;"></div>
        <ul class="shopcart-list" style="padding-bottom: 0;">
	    	<li>
                <img src="{{ data.0.goods_pic.0 }}" class="shop-pic" />
                <div class="order-mid">
                	<div class="tit">{{ data.0.goods_name|e }}</div>
                	<div class="order-price">￥{{ data.0.goods_now|e }} <i>X1</i></div>
                </div>
	    	</li>
	    </ul>
	    <ul class="order-infor">
	    	<li class="order-infor-first">
	    		<span>商品总计：</span>
	    		<i>￥{{ data.0.goods_now|e }}</i>
	    	</li>
	    	<li class="order-infor-first">
	    		<span>运费：</span>
	    		<i>包邮</i>
	    	</li>
	    </ul>
	    <div style="background: #eee; height: 10px;"></div>
	    <textarea placeholder="备注说明" class="bz-infor"></textarea>
	    <div style="background: #eee; height: 10px;"></div>
	    <div style="height: 55px;"></div>
	    <div class="shop-fix">
	    	<div class="order-text">
	    		应付总额：<span>￥{{ data.0.goods_now|e }}</span>
	    	</div>
	    	<a href="index.php?c=buy&a=submit_order&goods_id={{ data.0.goods_id|e }}" class="js-btn">确认订单</a>
	    </div>
{% endblock %}
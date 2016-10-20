{% extends 'layout.html' %}

{% block content %}
	<header data-am-widget="header" class="am-header am-header-default sq-head ">
			<div class="am-header-left am-header-nav">
				<a href="javascript:history.back()" class="">
					<i class="am-icon-chevron-left"></i>
				</a>
			</div>
			<h1 class="am-header-title">
  	            <a href="" class="">商品分类</a>
            </h1>
	    </header>
	<div style="height: 49px;"></div>
	    <ul class="list-nav">
	    	<li class="current"><a href="">综合</a></li>
	    	<li><a href=""><i class="list-price">价格</i></li>
	    	<li><a href="">新品</a></li>
	    </ul>

	<ul class="list-pro">
		{% for user in data %} 
	    	<li>
	    		<a href="index.php?c=index&a=alone&goods_id={{ user.goods_id|e }}"><img style="float:left" height="78px" width="82px" src="{{ user.goods_pic.0|e }}" /></a>
	    		<div class="shop-list-mid" style="width: 65%;">
                	<div class="tit"><a href="index.php?c=index&a=alone&goods_id={{ user.goods_id|e }}">{{ user.goods_name|e }}</a></div>
                	<div class="am-gallery-desc">￥{{ user.goods_now|e }}</div>
                </div>
                <!-- <div class="list-cart">
	                <div class="d-stock ">
			                <a class="decrease/index.html">-</a>
			                <input id="num" readonly="" class="text_box" name="" type="text" value="0">
			                <a class="increase/index.html">+</a>
	                </div>
                </div> -->
                <!--<a href="" class="list-cart"><img src="images/cart.png" width="30"/></a>-->
	    	</li>
	    	{% endfor %}
	</ul>

{% endblock %}
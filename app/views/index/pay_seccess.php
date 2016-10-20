{% extends 'layout.html' %}

{% block content %}
	{% if user_id|length > 0 %} 
		<h1>支付成功</h1>
		点击跳转<a href="">我的订单</a>
	{% else %}
		<h1>你在逗我吗！！</h1>
	{% endif %}
{% endblock %}
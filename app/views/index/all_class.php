{% extends 'layout.html' %}

{% block content %}

<div>
	<ul data-am-widget="gallery" class="am-gallery am-avg-sm-2 am-avg-md-2 am-avg-lg-4 am-gallery-default am-no-layout">
		{% for user in data %} 
		     <li>
			    <div class="am-gallery-item">
			        <a href="index.php?c=classify&a=alone_class&id={{ user.id|e }}" class="">
			          <img style="padding-left=10px;height:100px;width:100px" height="100px" width="100px" src="public/images{{ user.goods_type_pic|e }}">
			            <h3 style="margin-left=20px" class="am-gallery-title">{{ user.goods_type|e }}</h3>
			        </a>
			    </div>
			  </li>
		{% endfor %}
	</ul>
</div> 
{% endblock %}

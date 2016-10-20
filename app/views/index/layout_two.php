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
   

<!-- 内容 -->
<content>
	{% block content %}
	
	{% endblock %}
</content>

</body>
</html>
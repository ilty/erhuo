<?php

/* index/alone.php */
class __TwigTemplate_ad394f43052d1c73f8dd73c8ed72baedbb1255951384f553ec9cb851078589fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>二货</title>
    <meta name=\"description\" content=\"\">
    <meta name=\"keywords\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\">
    <meta name=\"renderer\" content=\"webkit\">
    <meta http-equiv=\"Cache-Control\" content=\"no-siteapp\" />
    <link rel=\"icon\" type=\"image/png\" href=\"public/images/favicon.png\">
    <link href=\"public/css/amazeui.min.css\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"public/css/style.css\" rel=\"stylesheet\" type=\"text/css\" />
    <script src=\"public/js/jquery-1.10.2.min.js\"></script>
    <script src=\"public/js/time.js\"></script>
    <script>
        \$(function () {
            var elm = \$('#shortbar');
            var startPos = \$(elm).offset().top;
            \$.event.add(window, \"scroll\", function () {
                var p = \$(window).scrollTop();
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
<header data-am-widget=\"header\" class=\"am-header am-header-default sq-head hid\">
\t\t\t<div class=\"am-header-left am-header-nav\">
\t\t\t\t<a href=\"javascript:history.back()\" class=\"\">
\t\t\t\t\t<i class=\"am-icon-chevron-left\"></i>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<h1 class=\"am-header-title\">
  \t            <a href=\"\" class=\"\">商品详情</a>
            </h1>
\t    </header>
\t    <div style=\"height: 49px;\"></div>
        <div class=\"am-slider am-slider-default\" data-am-flexslider id=\"demo-slider-0\">
\t\t  <ul class=\"am-slides\">
\t\t  \t";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), 0, array()), "goods_pic", array()));
        foreach ($context['_seq'] as $context["key"] => $context["val"]) {
            // line 47
            echo "\t\t  \t\t<li><img src=\"";
            echo twig_escape_filter($this->env, $context["val"], "html", null, true);
            echo "\" /></li>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "\t\t  </ul>
\t\t</div>
\t\t<div class=\"detal-info\">
\t\t\t<p class='hid'>";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), 0, array()), "goods_name", array()));
        echo "</p>
\t\t\t<h2 class='hid'>一口价：<span>￥";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), 0, array()), "goods_now", array()));
        echo "</span></h2>
\t\t</div>
\t\t<!-- <div class=\"d-amount\">
        \t<h4>数量：</h4>
            <div class=\"d-stock\">
              <a class=\"decrease/index.html\">-</a>
                <input id=\"num\" readonly=\"\" class=\"text_box\" name=\"\" type=\"text\" value=\"1\">
                <input id=\"id\" type=\"hidden\" value=\"644\">
                <a class=\"increase/index.html\">+</a>
               <span id=\"dprice\" class=\"price\" style=\"display:none\"> 36</span>
            </div>
        </div> -->
        <div style=\"background: #eee; height: 10px;\"></div>
        <div class=\"am-tabs detail-list hid\" data-am-tabs>
\t\t  <ul class=\"am-tabs-nav am-nav am-nav-tabs\">
\t\t    <li class=\"am-active\"><a href=\"#tab1/index.php\">宝贝介绍</a></li>
\t\t    <li id='con'><a href=\"#tab2/index.php\">宝贝评论</a></li>
\t\t  </ul>
\t\t
\t\t  <div class=\"am-tabs-bd\">
\t\t    <div class=\"am-tab-panel am-fade am-in am-active detail \" id=\"tab1\" >
\t\t            <p class='hid'>";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), 0, array()), "goods_desc", array()));
        echo "</p>
                    <!-- <img src=\"public/images/test11.png\" /> -->
\t\t    </div>
\t\t    <div class=\"am-tab-panel am-fade detail hid\" id=\"tab2\">
\t\t         <ul class=\"comment-pic\" id='chan'>
\t\t         \t<li>快来留言吧！</li>
\t\t         \t<!-- <li>
\t\t         \t\t<div class=\"tit\">
\t\t         \t\t\t<img src=\"public/images/tx.png\" class=\"tx\" />
\t\t         \t\t\t<span>songke2014</span>
\t\t         \t\t\t<i> [2016-01-01]</i>
\t\t         \t\t</div>
\t\t         \t\t<div class=\"comment-con\">
\t\t         \t\t\t买了些给家人，都说不错！
\t\t         \t\t</div>
\t\t         \t</li>
\t\t         \t<li>
\t\t         \t\t<div class=\"tit\">
\t\t         \t\t\t<img src=\"public/images/tx.png\" class=\"tx\" />
\t\t         \t\t\t<span>songke2014</span>
\t\t         \t\t\t<i> [2016-01-01]</i>
\t\t         \t\t</div>
\t\t         \t\t<div class=\"comment-con\">
\t\t         \t\t\t买了些给家人，都说不错！
\t\t         \t\t</div>
\t\t         \t</li> -->
\t\t         </ul>
\t\t    </div>
\t\t  </div>
\t\t</div>
\t\t    <!--底部-->
 <div style=\" height: 55px;\"></div>
 <ul class=\"fix-shopping\">
<!-- <form id='open' action=\"\" style=\"display:none\">
 \t<textarea id='message' placeholder=\"留言内容\" class=\"bz-infor\" name=\"message\"></textarea>
 \t<button class=\"js-btn\">留言</button>
 \t<input class=\"js-btn\" type=\"submit\" value=\"留言\">
 </form> -->
 <input type=\"hidden\" value=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), 0, array()), "goods_id", array()));
        echo "\" id=\"goods_id\">
 <!-- 回复消息 -->
 <div id=\"open_two\" style=\"display:none\">
 \t<span style=\"float:left\" id='val'></span><textarea id='rec_message' placeholder=\"回复内容\" class=\"bz-infor\" name=\"message\"></textarea>
 \t<button id='rec_mess' class=\"js-btn\">回复</button>
 </div>
 <!-- 留言 -->
 <div id=\"open\" style=\"display:none\">
 \t<textarea id='message' placeholder=\"留言内容\" class=\"bz-infor\" name=\"message\"></textarea>
 \t<button id='add_mess' class=\"js-btn\">留言</button>
 </div>
  <!-- <li><a href=\"index.php?c=/message/add/goods_id/";
        // line 123
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), 0, array()), "goods_id", array()));
        echo "\" class=\"join\">留言</a></li> -->
  <li class=\"close\"><a href=\"javascript:void(0)\" onclick=\"cli()\" class=\"join\">留言</a></li>
  <li class=\"close\"><a href=\"index.php?c=buy&a=commit_order&goods_id=";
        // line 125
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), 0, array()), "goods_id", array()));
        echo "\" class=\"imm-buy\">立即购买</a></li>
 </ul>

</body>
</html>
 <script>
  //购物数量加减
  \$(function(){
    \$('.increase').click(function(){
      var self = \$(this);
      var current_num = parseInt(self.siblings('input').val());
      current_num += 1;
      self.siblings('input').val(current_num);
      update_item(self.siblings('input').data('item-id'));
    })    
    \$('.decrease').click(function(){
      var self = \$(this);
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
  \t\$('.close').hide();
  \t\$('#open').show();
  }
  //点击隐藏留言板
  \$(\".hid\").click(function(){
  \t\$('.close').show();
  \t\$('#open').hide();
  \t\$('#open_two').hide();
  })
  //ajax留言
  \$(\"#add_mess\").click(function(){
  \tvar message = \$(\"#message\").val();
  \tvar goods_id = \$(\"#goods_id\").val();
  \t\$.ajax({
\t   type: \"POST\",
\t   url: \"index.php?c=message&a=add\",
\t   data: \"message=\"+message+\"&goods_id=\"+goods_id,
\t   success: function(msg){
\t     if(msg == '1'){
\t     \t\$('.close').show();
  \t\t\t\$('#open').hide();
\t     }else{
\t     \talert('留言失败')
\t     }
\t   }
\t});
  })

  \$(\"#con\").click(function(){
  \tvar goods_id = \$(\"#goods_id\").val();
  \t\$.ajax({
\t   // type: \"POST\",
\t   url: \"index.php?c=message&a=lists&goods_id=\"+goods_id,
\t   // data: \"goods_id=\"+goods_id,
\t   success: function(msg){
\t   \t\$(\"#chan\").html(msg);
\t   }
\t});
  })
  //回复留言显示
  \$(document).on(\"click\",\".rec\",function(){
  \tvar user_id = \$(this).attr('asd');
  \t\$('#val').html(\"@\"+user_id+\":\")
  \t\$('.close').hide();
  \t\$('#open_two').show();
  })
  //ajax回复留言
  \$(\"#rec_mess\").click(function(){
  \tvar goods_id = \$(\"#goods_id\").val();
  \tvar val = \$('#val').html()
  \tvar content = \$('#rec_message').val()
  \t\$.ajax({
\t   type: \"POST\",
\t   url: \"index.php?c=message&a=rec_mess\",
\t   data: \"val=\"+val+\"&goods_id=\"+goods_id+\"&content=\"+content,
\t   success: function(msg){
\t   \tif(msg){
\t   \t\t\$('.close').show();
  \t\t\t\$('#open_two').hide();
\t   \t}else{
\t   \t\talert(\"回复失败\");
\t   \t}
\t   }
\t});
  })
</script>

<script src=\"public/js/jquery.min.js\"></script>
<script src=\"public/js/amazeui.min.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "index/alone.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 125,  167 => 123,  153 => 112,  112 => 74,  88 => 53,  84 => 52,  79 => 49,  70 => 47,  66 => 46,  19 => 1,);
    }

    public function getSource()
    {
        return "<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>二货</title>
    <meta name=\"description\" content=\"\">
    <meta name=\"keywords\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\">
    <meta name=\"renderer\" content=\"webkit\">
    <meta http-equiv=\"Cache-Control\" content=\"no-siteapp\" />
    <link rel=\"icon\" type=\"image/png\" href=\"public/images/favicon.png\">
    <link href=\"public/css/amazeui.min.css\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"public/css/style.css\" rel=\"stylesheet\" type=\"text/css\" />
    <script src=\"public/js/jquery-1.10.2.min.js\"></script>
    <script src=\"public/js/time.js\"></script>
    <script>
        \$(function () {
            var elm = \$('#shortbar');
            var startPos = \$(elm).offset().top;
            \$.event.add(window, \"scroll\", function () {
                var p = \$(window).scrollTop();
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
<header data-am-widget=\"header\" class=\"am-header am-header-default sq-head hid\">
\t\t\t<div class=\"am-header-left am-header-nav\">
\t\t\t\t<a href=\"javascript:history.back()\" class=\"\">
\t\t\t\t\t<i class=\"am-icon-chevron-left\"></i>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<h1 class=\"am-header-title\">
  \t            <a href=\"\" class=\"\">商品详情</a>
            </h1>
\t    </header>
\t    <div style=\"height: 49px;\"></div>
        <div class=\"am-slider am-slider-default\" data-am-flexslider id=\"demo-slider-0\">
\t\t  <ul class=\"am-slides\">
\t\t  \t{% for key, val in data.0.goods_pic %}
\t\t  \t\t<li><img src=\"{{val}}\" /></li>
\t\t\t{% endfor %}
\t\t  </ul>
\t\t</div>
\t\t<div class=\"detal-info\">
\t\t\t<p class='hid'>{{ data.0.goods_name|e }}</p>
\t\t\t<h2 class='hid'>一口价：<span>￥{{ data.0.goods_now|e }}</span></h2>
\t\t</div>
\t\t<!-- <div class=\"d-amount\">
        \t<h4>数量：</h4>
            <div class=\"d-stock\">
              <a class=\"decrease/index.html\">-</a>
                <input id=\"num\" readonly=\"\" class=\"text_box\" name=\"\" type=\"text\" value=\"1\">
                <input id=\"id\" type=\"hidden\" value=\"644\">
                <a class=\"increase/index.html\">+</a>
               <span id=\"dprice\" class=\"price\" style=\"display:none\"> 36</span>
            </div>
        </div> -->
        <div style=\"background: #eee; height: 10px;\"></div>
        <div class=\"am-tabs detail-list hid\" data-am-tabs>
\t\t  <ul class=\"am-tabs-nav am-nav am-nav-tabs\">
\t\t    <li class=\"am-active\"><a href=\"#tab1/index.php\">宝贝介绍</a></li>
\t\t    <li id='con'><a href=\"#tab2/index.php\">宝贝评论</a></li>
\t\t  </ul>
\t\t
\t\t  <div class=\"am-tabs-bd\">
\t\t    <div class=\"am-tab-panel am-fade am-in am-active detail \" id=\"tab1\" >
\t\t            <p class='hid'>{{ data.0.goods_desc|e }}</p>
                    <!-- <img src=\"public/images/test11.png\" /> -->
\t\t    </div>
\t\t    <div class=\"am-tab-panel am-fade detail hid\" id=\"tab2\">
\t\t         <ul class=\"comment-pic\" id='chan'>
\t\t         \t<li>快来留言吧！</li>
\t\t         \t<!-- <li>
\t\t         \t\t<div class=\"tit\">
\t\t         \t\t\t<img src=\"public/images/tx.png\" class=\"tx\" />
\t\t         \t\t\t<span>songke2014</span>
\t\t         \t\t\t<i> [2016-01-01]</i>
\t\t         \t\t</div>
\t\t         \t\t<div class=\"comment-con\">
\t\t         \t\t\t买了些给家人，都说不错！
\t\t         \t\t</div>
\t\t         \t</li>
\t\t         \t<li>
\t\t         \t\t<div class=\"tit\">
\t\t         \t\t\t<img src=\"public/images/tx.png\" class=\"tx\" />
\t\t         \t\t\t<span>songke2014</span>
\t\t         \t\t\t<i> [2016-01-01]</i>
\t\t         \t\t</div>
\t\t         \t\t<div class=\"comment-con\">
\t\t         \t\t\t买了些给家人，都说不错！
\t\t         \t\t</div>
\t\t         \t</li> -->
\t\t         </ul>
\t\t    </div>
\t\t  </div>
\t\t</div>
\t\t    <!--底部-->
 <div style=\" height: 55px;\"></div>
 <ul class=\"fix-shopping\">
<!-- <form id='open' action=\"\" style=\"display:none\">
 \t<textarea id='message' placeholder=\"留言内容\" class=\"bz-infor\" name=\"message\"></textarea>
 \t<button class=\"js-btn\">留言</button>
 \t<input class=\"js-btn\" type=\"submit\" value=\"留言\">
 </form> -->
 <input type=\"hidden\" value=\"{{ data.0.goods_id|e }}\" id=\"goods_id\">
 <!-- 回复消息 -->
 <div id=\"open_two\" style=\"display:none\">
 \t<span style=\"float:left\" id='val'></span><textarea id='rec_message' placeholder=\"回复内容\" class=\"bz-infor\" name=\"message\"></textarea>
 \t<button id='rec_mess' class=\"js-btn\">回复</button>
 </div>
 <!-- 留言 -->
 <div id=\"open\" style=\"display:none\">
 \t<textarea id='message' placeholder=\"留言内容\" class=\"bz-infor\" name=\"message\"></textarea>
 \t<button id='add_mess' class=\"js-btn\">留言</button>
 </div>
  <!-- <li><a href=\"index.php?c=/message/add/goods_id/{{ data.0.goods_id|e }}\" class=\"join\">留言</a></li> -->
  <li class=\"close\"><a href=\"javascript:void(0)\" onclick=\"cli()\" class=\"join\">留言</a></li>
  <li class=\"close\"><a href=\"index.php?c=buy&a=commit_order&goods_id={{ data.0.goods_id|e }}\" class=\"imm-buy\">立即购买</a></li>
 </ul>

</body>
</html>
 <script>
  //购物数量加减
  \$(function(){
    \$('.increase').click(function(){
      var self = \$(this);
      var current_num = parseInt(self.siblings('input').val());
      current_num += 1;
      self.siblings('input').val(current_num);
      update_item(self.siblings('input').data('item-id'));
    })    
    \$('.decrease').click(function(){
      var self = \$(this);
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
  \t\$('.close').hide();
  \t\$('#open').show();
  }
  //点击隐藏留言板
  \$(\".hid\").click(function(){
  \t\$('.close').show();
  \t\$('#open').hide();
  \t\$('#open_two').hide();
  })
  //ajax留言
  \$(\"#add_mess\").click(function(){
  \tvar message = \$(\"#message\").val();
  \tvar goods_id = \$(\"#goods_id\").val();
  \t\$.ajax({
\t   type: \"POST\",
\t   url: \"index.php?c=message&a=add\",
\t   data: \"message=\"+message+\"&goods_id=\"+goods_id,
\t   success: function(msg){
\t     if(msg == '1'){
\t     \t\$('.close').show();
  \t\t\t\$('#open').hide();
\t     }else{
\t     \talert('留言失败')
\t     }
\t   }
\t});
  })

  \$(\"#con\").click(function(){
  \tvar goods_id = \$(\"#goods_id\").val();
  \t\$.ajax({
\t   // type: \"POST\",
\t   url: \"index.php?c=message&a=lists&goods_id=\"+goods_id,
\t   // data: \"goods_id=\"+goods_id,
\t   success: function(msg){
\t   \t\$(\"#chan\").html(msg);
\t   }
\t});
  })
  //回复留言显示
  \$(document).on(\"click\",\".rec\",function(){
  \tvar user_id = \$(this).attr('asd');
  \t\$('#val').html(\"@\"+user_id+\":\")
  \t\$('.close').hide();
  \t\$('#open_two').show();
  })
  //ajax回复留言
  \$(\"#rec_mess\").click(function(){
  \tvar goods_id = \$(\"#goods_id\").val();
  \tvar val = \$('#val').html()
  \tvar content = \$('#rec_message').val()
  \t\$.ajax({
\t   type: \"POST\",
\t   url: \"index.php?c=message&a=rec_mess\",
\t   data: \"val=\"+val+\"&goods_id=\"+goods_id+\"&content=\"+content,
\t   success: function(msg){
\t   \tif(msg){
\t   \t\t\$('.close').show();
  \t\t\t\$('#open_two').hide();
\t   \t}else{
\t   \t\talert(\"回复失败\");
\t   \t}
\t   }
\t});
  })
</script>

<script src=\"public/js/jquery.min.js\"></script>
<script src=\"public/js/amazeui.min.js\"></script>
";
    }
}

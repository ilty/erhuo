<?php

/* near/mynear.php */
class __TwigTemplate_5959ad63c87748386ad9b3873502afb3da37bd9edfb095f7d65cf26ee477dcee extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
<meta name=\"viewport\" content=\"width=device-width,minimum-scale=1.0,maximum-scale=1.0\"/>
\t<meta charset=\"UTF-8\">
\t<title></title>
\t<script src=\"public/js/jquery.js\"></script>
\t<link href=\"public/jquerymobile/jquery.mobile-1.4.5.min.css\" rel=\"stylesheet\">
\t <script src=\"public/js/jquery.js\"></script>
    <script src=\"public/jquery.mobile-1.4.5.min.js\"></script>
    <style type=\"text/css\">
    \tbody{
    \t\tfont-size:12px;
    \t}
    \t.header{
    \t\twidth:100%;
    \t\theight:200px;
    \t}
\t\t.header img{
\t\t\tmargin-top:50px;
\t\t\twidth:20%;
\t\t\theight:100px;
\t\t\tfloat:left;
\t\t}
\t\t.header h5{
\t\t\tmargin-top:50px;
\t\t\tfloat:left;
\t\t}
\t\t.header p{
\t\t\tmargin-top:50px;
\t\t\tfloat:left;
      margin-left:-150px;
\t\t}
    .goods{
      margin-top:50px;
    }
    .yule{
      margin-top:20px;
    }
\t\t
    </style>
</head>
<body>
<div data-role=\"page\">

    <div data-role=\"header\">
        <input type=\"hidden\" id=\"number\" value=\"10\"/>
        <div class=\"header\"><img src=\"public/upload/";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "near_image", array()), "html", null, true);
        echo "\"/><h5>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "near_name", array()), "html", null, true);
        echo "</h5><br/><p>发布数";
        echo twig_escape_filter($this->env, (isset($context["count"]) ? $context["count"] : null), "html", null, true);
        echo "</p></div>
    </div>

    <div data-role=\"main\" class=\"ui-content\">
        ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["goods"]) ? $context["goods"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 53
            echo "        <div class=\"goods\">
            <a href=\"http://www.softhearted.site/mvcThree/index/alone/goods_id/";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "goods_id", array()), "html", null, true);
            echo "\">
                <img src=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "user_pic", array()), "html", null, true);
            echo "\" class=\"img-circle\" width=\"50px\" height=\"50px\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nickname", array()), "html", null, true);
            echo "<span style=\"float:right\">￥";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "goods_now", array()), "html", null, true);
            echo "</span><br/>
                ";
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_split_filter($this->env, $this->getAttribute($context["item"], "goods_pic", array()), ","));
            foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
                // line 57
                echo "                <img src=\"";
                echo twig_escape_filter($this->env, twig_replace_filter($context["img"], "\\", "/"), "html", null, true);
                echo "\" class=\"img-thumbnail img-responsive\" width=\"40%\" height=\"10%\">
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "                <br/>
                <p>";
            // line 60
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["item"], "goods_desc", array()), 0, 50), "html", null, true);
            echo "</p>
                <p style=\"color:orange;\">来自";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "goods_city", array()), "html", null, true);
            echo "市</p>
            </a>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "    </div>

        <div data-role=\"footer\" data-position=\"fixed\">
            <h4><a href=\"index.php?c=release\" data-transition=\"fade\" data-theme=\"\" data-icon=\"\" class=\"ui-btn\">发布</a></h4>
        </div>

</div>
</body>
</html>
<script>
\t\$(function(){
      function scrollTop(){
          return Math.max(
          //chrome
          document.body.scrollTop,
          //firefox/IE
          document.documentElement.scrollTop);
    }
    function documentHeight(){
          //现代浏览器（IE9+和其他浏览器）和IE8的document.body.scrollHeight和document.documentElement.scrollHeight都可以
          return Math.max(document.body.scrollHeight,document.documentElement.scrollHeight);
    }


  function windowHeight(){
        return (document.compatMode == \"CSS1Compat\")?
        document.documentElement.clientHeight:
        document.body.clientHeight;
  }


        \$(window).on('scroll',function(){
        if(scrollTop() + windowHeight() >= (documentHeight() - 50/*滚动响应区域高度取50px*/)){
            //再次加载10条数据
            var limit = \$('#number').val();
            if(limit<10)
            {
              return ;
            }
            else{
                \$('#number').attr('value',parseInt(limit)+10);
            }
            \$.ajax({
                    'url':'index.php?c=near&a=mynear&id='+";
        // line 108
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "id", array()), "html", null, true);
        echo ",
                    'data':'limit='+limit,
                    'type':'post',
                    success:function(msg){
                        eval(\"var data=\"+msg)

                        for(var i in data)
                        {
                              var html = \"<li><a href='index.php?c=near&a=mynear&id=\"+data[i].id+\"'><img src='public/upload/\"+data[i].near_image+\"' width='100px' height='200px'><div style='width: 70%; float: left;'><h3 class='title'>\"+data[i].near_name+\"</h3><p class='intro'>\"+data[i].near_desc+\"</p></div></a></li>\";
                            \$('.yule').append(html)
                        }                       
                    }
                  });
      }; 
    })

      })
    
</script>
</script>";
    }

    public function getTemplateName()
    {
        return "near/mynear.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 108,  128 => 65,  118 => 61,  114 => 60,  111 => 59,  102 => 57,  98 => 56,  90 => 55,  86 => 54,  83 => 53,  79 => 52,  68 => 48,  19 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html lang=\"en\">
<head>
<meta name=\"viewport\" content=\"width=device-width,minimum-scale=1.0,maximum-scale=1.0\"/>
\t<meta charset=\"UTF-8\">
\t<title></title>
\t<script src=\"public/js/jquery.js\"></script>
\t<link href=\"public/jquerymobile/jquery.mobile-1.4.5.min.css\" rel=\"stylesheet\">
\t <script src=\"public/js/jquery.js\"></script>
    <script src=\"public/jquery.mobile-1.4.5.min.js\"></script>
    <style type=\"text/css\">
    \tbody{
    \t\tfont-size:12px;
    \t}
    \t.header{
    \t\twidth:100%;
    \t\theight:200px;
    \t}
\t\t.header img{
\t\t\tmargin-top:50px;
\t\t\twidth:20%;
\t\t\theight:100px;
\t\t\tfloat:left;
\t\t}
\t\t.header h5{
\t\t\tmargin-top:50px;
\t\t\tfloat:left;
\t\t}
\t\t.header p{
\t\t\tmargin-top:50px;
\t\t\tfloat:left;
      margin-left:-150px;
\t\t}
    .goods{
      margin-top:50px;
    }
    .yule{
      margin-top:20px;
    }
\t\t
    </style>
</head>
<body>
<div data-role=\"page\">

    <div data-role=\"header\">
        <input type=\"hidden\" id=\"number\" value=\"10\"/>
        <div class=\"header\"><img src=\"public/upload/{{ info.near_image }}\"/><h5>{{ info.near_name }}</h5><br/><p>发布数{{ count }}</p></div>
    </div>

    <div data-role=\"main\" class=\"ui-content\">
        {% for item in goods %}
        <div class=\"goods\">
            <a href=\"http://www.softhearted.site/mvcThree/index/alone/goods_id/{{ item.goods_id }}\">
                <img src=\"{{ item.user_pic }}\" class=\"img-circle\" width=\"50px\" height=\"50px\">{{ item.nickname }}<span style=\"float:right\">￥{{ item.goods_now }}</span><br/>
                {% for img in item.goods_pic|split(',') %}
                <img src=\"{{ img|replace('\\\\','/') }}\" class=\"img-thumbnail img-responsive\" width=\"40%\" height=\"10%\">
                {% endfor %}
                <br/>
                <p>{{ item.goods_desc|slice(0,50) }}</p>
                <p style=\"color:orange;\">来自{{ item.goods_city }}市</p>
            </a>
        </div>
        {% endfor %}
    </div>

        <div data-role=\"footer\" data-position=\"fixed\">
            <h4><a href=\"index.php?c=release\" data-transition=\"fade\" data-theme=\"\" data-icon=\"\" class=\"ui-btn\">发布</a></h4>
        </div>

</div>
</body>
</html>
<script>
\t\$(function(){
      function scrollTop(){
          return Math.max(
          //chrome
          document.body.scrollTop,
          //firefox/IE
          document.documentElement.scrollTop);
    }
    function documentHeight(){
          //现代浏览器（IE9+和其他浏览器）和IE8的document.body.scrollHeight和document.documentElement.scrollHeight都可以
          return Math.max(document.body.scrollHeight,document.documentElement.scrollHeight);
    }


  function windowHeight(){
        return (document.compatMode == \"CSS1Compat\")?
        document.documentElement.clientHeight:
        document.body.clientHeight;
  }


        \$(window).on('scroll',function(){
        if(scrollTop() + windowHeight() >= (documentHeight() - 50/*滚动响应区域高度取50px*/)){
            //再次加载10条数据
            var limit = \$('#number').val();
            if(limit<10)
            {
              return ;
            }
            else{
                \$('#number').attr('value',parseInt(limit)+10);
            }
            \$.ajax({
                    'url':'index.php?c=near&a=mynear&id='+{{ info.id }},
                    'data':'limit='+limit,
                    'type':'post',
                    success:function(msg){
                        eval(\"var data=\"+msg)

                        for(var i in data)
                        {
                              var html = \"<li><a href='index.php?c=near&a=mynear&id=\"+data[i].id+\"'><img src='public/upload/\"+data[i].near_image+\"' width='100px' height='200px'><div style='width: 70%; float: left;'><h3 class='title'>\"+data[i].near_name+\"</h3><p class='intro'>\"+data[i].near_desc+\"</p></div></a></li>\";
                            \$('.yule').append(html)
                        }                       
                    }
                  });
      }; 
    })

      })
    
</script>
</script>";
    }
}

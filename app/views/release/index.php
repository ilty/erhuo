<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="public/css/main.css"/>
    <script src="public/js/jquery.js"></script>
    <script src="public/js/main.js"></script>
    <script src="public/js/upload.js"></script>
    <script src="public/js/area.js"></script>

    <title></title>
</head>
<body style="background-color: #EAEDF1">
<!--头部-->
<header style="text-align: center;font-size: 16px">
    <i class="iconfont fl" onclick="javascript:history.go(-1);">&#xe607;</i> 发布属于自己的商品
</header>

<div class="join">
    <form action="index.php?c=release&a=add_ku" method="post" enctype="multipart/form-data">
        <label>标题</label>
        <div>
            <input type="text" placeholder="请输入您的标题" name="goods_name"/>
        </div>

        <label>描述</label>
        <div>
            <input type="text" placeholder="请输入您需求的描述" name="goods_desc"/>
        </div>

        <label>所在地</label>
        <div>
            <select id="province" runat="server" name="province">
            </select>
            <select id="city" runat="server" name="city">
            </select>
            <select id="county" runat="server" name="city2">
            </select>
        </div>

        <label>选择类型</label>
        <div>
            <select name="goods_type" id="">
                {% for item in ar %}
                <option value="{{ item.goods_type }}">{{ item.goods_type }}</option>
                {% endfor %}
            </select>
        </div>

        <label>一口价</label>
        <div>
            <input type="text" placeholder="请输入您需求的一口价" name="goods_now"/>
        </div>
        <label>选择您要发布的范围</label>
        <div>
            <select name="near_name" id="">
                {% for item in arr %}
                <option value="{{ item.near_name }}">{{ item.near_name }}</option>
                {% endfor %}
            </select>
<!--            <input type="text" placeholder="请输入您的发布范围"/>-->
        </div>
        <!-- 上传图片-->
        <div class="person fl">
            <div id="preview">
                <img id="imghead" src="public/img/head_180.jpg" />
            </div>
            <input type="file" onchange="previewImage(this)" class="upload" id="file" name="goods_pic[]">
            <label for="file"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="12" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"></path></svg> <span>上传商品照片…</span></label>
        </div>
        <!-- 上传图片-->
        <div class="qrcode fr">
            <div id="preview1">
                <img id="imghead1" src="public/img/head_180.jpg" />
            </div>
            <input type="file" onchange="previewImage1(this)" id="file1" class="upload" name="goods_pic[]" >
            <label for="file1"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="12" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"></path></svg> <span>上传商品照片…</span></label>
        </div>
        <input type="submit" value="发布">
    </form>
</div>

</body>
</html>
<!--js初始化函数-->
<script type="text/javascript">
    setup()
</script>
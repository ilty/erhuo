/*! PopUp_api v1 | (c) 2014 Producer:Pides */
function PopUp_api(a){a=a?a:{};this.html=a.html?$(a.html):$(this._html);a.el&&(this.el=$(a.el),this._ready())}var popup_num=0;
PopUp_api.prototype={_versions:1,_cop:"Pides",_IsMask:!0,_isLimit:!0,_isDraging:!1,_offsetX:0,_offsetY:0,_b:$(window),_html:'<div class="popup" id=\u201cds\u201d><div class="popup-title"><span>\u767b\u9646\u6846</span><i class="popup-close">X</i></div><div class="popup-content"><ul><li class="popup-li">\u8d26\u53f7\uff1a<input type="text" placeholder="\u60a8\u7684\u7528\u6237\u540d" style="margin-left: 10px; width: 80%; border: medium none;" ></li><li class="popup-li">\u5bc6\u7801\uff1a<input type="password" placeholder="\u60a8\u7684\u5bc6\u7801"  style="margin-left: 10px; width: 80%; border: medium none;"></li><li class="popup-li">\u9a8c\u8bc1\uff1a<input type="text" style="margin-left: 10px; width: 80%; border: medium none;" ></li><li><input type="submit" value="\u70b9\u51fb\u7acb\u5373\u767b\u9646" class="popup-denglu"><a href="javascript:;" class="dd">\u6ce8\u518c</a></li><div style="height: 1px; background-color: rgb(204, 204, 204); position: relative; margin-top: 20px; margin-bottom: 20px; width: 90%;" class="or"><span style="width: 100px; height: 20px; position: absolute; left: 50%; top: -10px; text-align: center; font-size: 12px; color: rgb(153, 153, 153); line-height: 20px; background-color: rgb(255, 255, 255); margin-left: -53px;" class="titt">\u5408\u4f5c\u5e10\u53f7\u767b\u5f55</span><h1 style="font-size: 14px; padding-top: 20px;">\u5feb\u6377\u767b\u9646\u65b9\u5f0f\u6574\u987f\u4e2d......<h1></div></ul></div></div>',_ready:function(){var a=
this;this.el.on("click",function(){a._format()});this.html.appendTo("body").hide();this.html.find(".popup-close").on("click",function(){a._hide()});this.popup_title=this.html.find(".popup-title")},_format:function(){window.popup_num+=1;this._centered();this._mask();this._bindmove();this._show();this.html.css({position:"fixed","z-index":9999+window.popup_num+1})},_centered:function(){var a=(this._b.width()-this.html.width())/2+"px",b=(this._b.height()-this.html.height())/2+"px";this.html.css({left:a,
top:b})},_bindmove:function(){var a=this;this.popup_title.on("mousedown",function(b){a._offsetX=b.pageX-a.html.offset().left;a._offsetY=b.pageY-a.html.offset().top;a.winwidth=a._b.width();a.winheight=a._b.height();a.twidth=a.html.width();a.theight=a.html.height();a._isDraging=!0});$(document).on("mousemove",function(b){var e=b.pageX;b=b.pageY;var c=0,d=0;!0===a._isDraging&&(c=e-a._offsetX,d=b-a._offsetY,maxX=a.winwidth-a.twidth,maxY=a.winheight-a.theight,c=Math.min(maxX,Math.max(0,c)),d=Math.min(maxY,
Math.max(0,d)),a.html.css({left:c+"px",top:d+"px"}))});$(document).on("mouseup",function(){a._isDraging=!1})},_mask:function(){this._IsMask&&(this.mask=$('<div class="mask"></div>'),this.mask.css({width:"100%",height:"100%",position:"fixed",left:0,top:0,backgroundColor:"#000",zIndex:9998+window.popup_num+1,opacity:.5}).appendTo("body").css("filter","alpha(opacity=50)").css("-moz-opacity","0.5").hide())},_showMask:function(){this.mask.show()},_hideMask:function(){this.mask.hide()},_show:function(){this._showMask();
this.html.show();this._centered()},_hide:function(){window.popup_num-=1;this.html.hide();this._hideMask()}};
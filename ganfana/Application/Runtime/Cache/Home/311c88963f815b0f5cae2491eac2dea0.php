<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>加强版股票工具</title>
</head>
<body style="margin: 0; font-family: SimHei;">
    <div style="background-image: url(Public/Home/ganfanc/images/1_2.jpg); background-position: center; height: 253px;">
    </div>
    <div id="gotop" style="background-image: url(Public/Home/ganfanc/images/2_2.jpg); background-position: center;
        height: 253px;">
    </div>
    <div style="background-image: url(Public/Home/ganfanc/images/3_2.jpg); background-position: center; height: 253px;">
        <div style="width: 1132px; background: rgba(0,0,0,0); margin: 0 auto; padding-top: 16px;">
            <div id="flashborder" style="width: 413px; height: 150px; float: right; box-sizing: border-box;">
                <form action="<?php echo U('index/index');?>" method="post" class="" id="" enctype="multipart/form-data" >
                    <div style="width: 350px; float: right; height: 100%;">
                    <input id="name" style="border: 0; font-family: SimHei; font-size: 18px; outline: none;
                        width: 300px; height: 30px; margin-top: 14px;" type="text" placeholder="请输入正确姓名" />
                    <input id="phone" style="border: 0; font-family: SimHei; font-size: 18px; outline: none;
                        width: 300px; height: 30px; margin-top: 58px;" type="text" placeholder="请输入手机号码" />
                    </div>
                    
                    </div>
                    <div style="height: 38px; clear: both;">
                    </div>
                    <input type="submit" value="立即注册" id="btn1" style="width: 413px; height: 56px; cursor: pointer; float: right;">
                    </div>
                </form>
        </div>
    </div>
    <div style="background-image: url(Public/Home/ganfanc/images/4_2.jpg); background-position: center; height: 253px;">
    </div>
    <div style="background-image: url(Public/Home/ganfanc/images/5_2.jpg); background-position: center; height: 253px;">
    </div>
    <div style="background-image: url(Public/Home/ganfanc/static/images/6_2.jpg); background-position: center; height: 253px;">
        <div style="width: 1160px; margin: 0 auto;">
            <div onclick="location.href='#gotop';flashborder();" style="width: 416px; height: 60px;
                float: left; margin-top: 65px; cursor: pointer;">
            </div>
        </div>
    </div>
    <div style="background-image: url(Public/Home/ganfanc/static/images/7_2.jpg); background-position: center; height: 253px;">
    </div>
    <div style="background-image: url(Public/Home/ganfanc/static/images/8_2.jpg); background-position: center; height: 253px;">
        <div style="width: 918px; margin: 0 auto;">
            <div onclick="location.href='#gotop';flashborder();" style="width: 416px; height: 60px;
                float: right; margin-top: 30px; cursor: pointer;">
            </div>
        </div>
    </div>
    <div style="background-image: url(Public/Home/ganfanc/static/images/9_2.jpg); background-position: center; height: 253px;">
    </div>
    <div style="background-image: url(Public/Home/ganfanc/static/images/10_2.jpg); background-position: center; height: 253px;
        position: relative;">
        <div style="width: 1160px; margin: 0 auto;">
            <div onclick="location.href='#gotop';flashborder();" style="width: 416px; height: 60px;
                float: left; margin-top: 81px; cursor: pointer;">
            </div>
        </div>
        <div style="text-align: center; padding-top: 60px; color: rgb(101,101,101); font-size: 12px;
            clear: both;">
            投资有风险，入市需谨慎<br />
            <span id="copyright">公司版权</span></div>
    </div>
<script src="static/js/copyright_2.js" type="text/javascript"></script>
    <script src="static/js/jquery.min_2.js"></script>
    <script>
        var i = 0;
        function flashborder() {
            if (i > 5) {
                i = 0;
                return false;
            }
            if (i % 2 == 0) {
                $("#flashborder").css("border", "4px dashed red");
            } else { $("#flashborder").css("border", "0"); }
            i++;
            setTimeout(flashborder, 300);
        }

        //获取地址栏参数
        function GetQueryString(name) {
            var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)");
            var r = window.location.search.substr(1).match(reg);
            if (r != null) return unescape(r[2]); return null;
        }


        $(function () {

            $("#btn1").click(function () {

                var name = $("#name1").val();
                if (name == "") {
                    alert("请输入姓名！");
                    return false;
                }

                var tel = $("#tel1").val();
                if (!(/^1[3|4|5|7|8][0-9]\d{8,8}$/.test(tel))) {
                    alert("手机号码不正确！");
                    return false;
                }
                ajax_post({ name: name, tel: tel, url: window.location.href, kw_code: GetQueryString("kw") });

            });


        });


        function ajax_post(data) {

            $.getJSON("http://kw.youwonn.com/api_users_add?callback=?", data, function (result) {
                if (result == 1) {
                    // console.log(result);
                    alert("注册成功，稍后会有顾问联系告知软件用户名与密码！1111111");
                });
                } else {
                    alert("这个号码已经注册过啦！");
                }
            });

    
    </script>
</body>
<script>
    var _hmt = _hmt || [];
    (function () {
        var hm = document.createElement("script");
        hm.src = "https://hm.baidu.com/hm.js?daa700963defffdb39d6982ea37971db";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();
</script>
</html>
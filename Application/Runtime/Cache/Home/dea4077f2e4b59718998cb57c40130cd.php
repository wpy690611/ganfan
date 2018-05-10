<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no" />
    <title>直接提示买卖点，实现年化大收益</title>
    <!--<meta name="keywords" content="閸忔娊鏁拠锟�,5娑擃亜涔忛崣锟�,閸楁洑閲�8濮瑰鐡ф禒銉ュ敶">
    <meta name="description" content="缂冩垹鐝幓蹇氬牚閿涘苯鐡ч弫鏉挎晼闁插繒鈹栭崚璺烘躬80娑擃亝鐪界�涙绱�160娑擃亜鐡х粭锔夸簰閸愬拑绱�">-->
    <link rel="stylesheet" href="/Public/Home/ganfand/css/html.css" type="text/css" />
    <link rel="stylesheet" href="/Public/Home/ganfand/css/animate.css" type="text/css" />
    <!--[if lte IE 8]>
    <![endif]-->

    <script src="/Public/Home/ganfand/js/jquery.min.js" type="text/javascript"></script>

    <!-- Css -->
    <link rel="stylesheet" href="/Public/Home/ganfand/css/pc1.css" type="text/css"/>


    <!-- If -->
    <script src="/Public/Home/ganfand/js/userreg2.js"></script>
    <script src="/Public/Home/ganfand/js/jq.slider.js" type="text/javascript"></script>
    <script src="/Public/Home/ganfand/js/layer.js"></script>
    <script src="/Public/Home/ganfand/js/url.js" type="text/javascript"></script>
    <script type="text/javascript">
        $().ready(function () {
            var strkw = "111";
            var Request = new Object();
            Request = GetRequest();
            if (Request['kw'] != "" && Request['kw']!=null ) {
                strkw = Request['kw'];
            }
//            AdlinkHitCountadd1(strkw);
            var currentUrl=window.location.href;
            currentUrl= urlCoding(currentUrl);

            $('.btnClick').on('click', function(){
                layer.open({
                    type: 2,
                    title: '',
                    shadeClose: true,
                    area: ['500px', '380px'],
                    content: 'http://regnew.sjhld.com/regmp/regpc1.do?kw=' + strkw +'&page_from='+currentUrl+'&turn_page=4'

                });
            });
        });

        function GetRequest() {
            var myPath = window.location.toString(); //获取当前路径
            myPath = myPath.substr(0, myPath.lastIndexOf('/'));
            var url = location.search; //获取url中"?"符后的字串
            var theRequest = new Object();
            if (url.indexOf("?") != -1) {
                var str = url.substr(1);
                strs = str.split("&");
                for (var i = 0; i < strs.length; i++) {
                    theRequest[strs[i].split("=")[0]] = unescape(strs[i].split("=")[1]);
                }
            }
            return theRequest;
        }
    </script>
    <!-- Piwik -->
    <script type="text/javascript" async defer src="/Public/Home/ganfand/js/piwik.js"></script>
    <!-- Piwik -->
    <script type="text/javascript">
        // var _paq = _paq || [];
        // _paq.push(["setDomains", ["*.regnew.sjhld.com/sjPortal/portal_index.do","*.gg.sjhld.com/web/mfxz.html","*.pc.hldgp.com/web/mfxz.html","*.pc.shijitv.cn/web/mfxz.html","*.pc.shijitv.com/web/mfxz.html","*.pc.xuediaopay.com/web/mfxz.html"]]);
        // _paq.push(['trackPageView']);
        // _paq.push(['enableLinkTracking']);
        // (function() {
        //     var u="//103.24.116.55:10000/piwik/";
        //     _paq.push(['setTrackerUrl', u+'piwik.php']);
        //     _paq.push(['setSiteId', '43']);
        //     var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
        //     g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
        // })();
    </script>
    <noscript><p><img src="/Public/Home/ganfand/picture/piwik.php" style="border:0;" alt="" /></p></noscript>
    <!-- End Piwik Code -->
    </head>
<body>
    <!--<div class="header t-c">
        <img src="/Public/Home/ganfand/picture/head.png" alt=""/>
    </div>-->
    <div class="banner t-c">
        <div class="content">
            <a href="ganfand/index2.html" class="regnow animated verticalnext btnClick" ><img src="/Public/Home/ganfand/picture/b-btn.png" alt=""/></a>
        </div>
    </div>
    <div class="mid" style="    margin-top: -220px;">
        <div class="content t-c ">
            <div class="relative">
                <img src="/Public/Home/ganfand/picture/03.png"/>
            </div>
        </div>
    </div>
    <div class="mid">
        <div class="content t-c ">
            <div class="relative">
                <img src="/Public/Home/ganfand/picture/05.png" class=""/>
                <a href="ganfand/index2.html" class="regnow animated verticalnext btnClick" style="left: 50%; bottom: 68px; margin-left: -200px;" ><img src="/Public/Home/ganfand/picture/m-btn.png" alt=""/></a>
            </div>
        </div>
    </div>
    <div class="mid">
        <div class="content t-c ">
            <div class="relative">
                <img src="/Public/Home/ganfand/picture/08.png" class=""/>
            </div>
        </div>
    </div>
    <div class="mid">
        <div class="content t-c ">
            <div class="relative">
                <img src="/Public/Home/ganfand/picture/09.png" class=""/>
                <a href="ganfand/index2.html" class="regnow animated verticalnext btnClick" style="left: 50%; bottom: 62px; margin-left: -200px;"><img src="/Public/Home/ganfand/picture/m-btn.png" alt=""/></a>
            </div>
        </div>
    </div>
    <div class="mid">
        <div class="content t-c ">
            <div class="relative">
                <img src="/Public/Home/ganfand/picture/10.png" class=""/>
            </div>
        </div>
    </div>
    <div class="mid">
        <div class="content t-c ">
            <div class="relative">
                <img src="/Public/Home/ganfand/picture/11.png" class=""/>
                <a href="ganfand/index2.html" class="regnow animated verticalnext btnClick" style="left: 50%; bottom: 90px; margin-left: -200px;" ><img src="/Public/Home/ganfand/picture/m-btn.png" alt=""/></a>
            </div>
        </div>
    </div>
    <div class="foot">
        <div class="content">
            <img src="/Public/Home/ganfand/picture/12.png" alt=""/>
        </div>
    </div>
    <div class="fixed">
        <div class="content relative t-c">
            <img src="/Public/Home/ganfand/picture/f.png" />
            <a href="ganfand/index2.html" class="regnow animated verticalnext btnClick" style="right: 10px; top: 20px; color: #fff; width: 378px; line-height: 65px; text-align: center; font-size: 24px;"><img src="/Public/Home/ganfand/picture/m-btn.png" alt=""/></a>
        </div>
    </div>
</body>
</html>
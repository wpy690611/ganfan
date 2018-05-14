<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta content="text/html; charset=UTF-8" http-equiv="Content-Type">  
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>微信领牛股</title>   
   <!--  <script>
   var qq_chat = true;
   
   function PlayJsAdPopWin() {
       if (qq_chat) {
           /*popwin = window.location.href = 'tencent://message/?uin=&Site=牛股&Menu=yes'*/
           popwin = window.open("about:blank");
           //用ajax方法实现window.open不被拦截的解决方法
           $.ajax({
               success: function(data) {
                   if (data) {
                       window.open('#');
                       /*newTab.location.href="#";*/
                   }
               }
           })
       }
   };
   
   function goPAGE() {
       if ((navigator.userAgent.match(/(phone|pad|pod|iPhone|iPod|ios|iPad|Android|Mobile|BlackBerry|IEMobile|MQQBrowser|JUC|Fennec|wOSBrowser|BrowserNG|WebOS|Symbian|Windows Phone)/i))) {
           window.onload = function() {
               var aClass = document.getElementsByTagName("a");
               for (var i = 0; i <= aClass.length; i++) {
                   //aClass[i].getAttribute('href')="mqqwpa://im/chat?chat_type=wpa&uin=&version=1&src_type=web&web_src=oicqzone.com";
                   aClass[i].href = "#";
               }
           }
   
       } else {
           /*window.location.href="你的电脑版地址";   }*/
           setTimeout("PlayJsAdPopWin()", 2999);
       }
   }
   goPAGE();
   </script>
   结束 -->
    

<link media="all" href="/Public/Home/ganfanf/css/index.css" type="text/css" rel="stylesheet">
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?dccf31258c09553ba204ca235bdfe3f8";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?d80d5616aa380aa310f2f458ad23feb1";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
</head>
<body>
    <div class="ljtop">
        <div class="top">
            <div class="jtc">
                <span class="ewm"><img class="qqImg" src="http://47.98.60.7/Uploads/<?php echo ($wx_data['wxphoto']); ?>" alt="" ></span>
                <div>
                    <h4>微信扫一扫，最新股市行情供您参考。</h4>
                    <p><span>欢迎加微信：<code class="qqnum"><strong><?php echo ($wx_data['wx']); ?></strong></code></span></p>
                </div>
            </div>
        </div>
    </div>
    <div class="ljcons">
        <a href="#" class="ljbut" style="margin-top: 0px; margin-bottom: 15px;" target="_top">点击领牛股</a>
        <div class="ljc1">
            <h3 class="ljh3"><img src="/Public/Home/ganfanf/picture/jls_h1.png" /></h3>
            <ul>
                <li class="l1">
                    <span><img src="/Public/Home/ganfanf/picture/jls_c1_i1.png"></span>
                    <h5><em>微信分析师</em></h5>
                    <p>深度看盘，解析每日行情，分析师在线，实时解答，更方便！</p>
                </li>
                <li class="l2">
                    <span><img src="/Public/Home/ganfanf/picture/jls_c1_i2.png"></span>
                    <h5><em>战法免费相授</em></h5>
                    <p>经典分析技术、涨停操盘战法，每日复盘传授抓涨停技巧！</p>
                </li>
                <li class="l3">
                    <span><img src="/Public/Home/ganfanf/picture/jls_c1_i3.png"></span>
                    <h5><em>解套分析</em></h5>
                    <p>提供策略案，解读个股庄家密码，进行分析和个股解套，更容易！</p>
                </li>
            </ul>
        </div>
    </div>
    <div class="ljc2">
        <!-- <h3 class="ljh3"><img src="/Public/Home/ganfanf/picture/jls_h2.png"></h3> -->
        <!-- <p class="hp">不要再错过2018年大牛暴涨行情</p> -->s
        <ul>
            <li class="l1">
                <span><img src="/Public/Home/ganfanf/picture/jls_c2_i1.png"></span>
                <p></p>
            </li>
            <li class="l2">
                <span><img src="/Public/Home/ganfanf/picture/jls_c2_i2.png"></span>
                <p></p>
            </li>
            <li class="l1">
                <span><img src="/Public/Home/ganfanf/picture/jls_c2_i3.png"></span>
                <p></p>
            </li>
            <li class="l2">
                <span><img src="/Public/Home/ganfanf/picture/jls_c2_i4.png"></span>
                <p></p>
            </li>
        </ul>
        <img src="/Public/Home/ganfanf/picture/xz_p1.png" alt="" style="display: block; margin: 12px auto;">
        <a href="#" class="ljbut" target="_top">点击领《5月牛股策略》</a>
        <p style="font-size: 16px; line-height: 28px; text-align: center; margin-top: 15px;">学习《三星低照》和《饿虎扑食》全新形态，掌握股市长虹奥秘</p>
    </div>
    <div class="ljcons">
        <div class="ljc3">
            <h3 class="ljh3"><img src="/Public/Home/ganfanf/picture/jls_h3.png"/></h3>
           <!--  <p class="hp">加入一个微信聊<code class="qqnum" style="color: red;"><strong><?php echo ($wx_data['wx']); ?></strong></code>， 即可享受到以上服务，领取免费牛股...</br>让我们把专业的事情，教给专业的人来做</p> -->
            <div class="ljc31">
                <img src="/Public/Home/ganfanf/picture/jls_c3.jpg" />
            </div>
            <div class="ljc32">
                <h4>4月牛股战绩 真实可查</h4>
                <p class="hp"></p>
                <table cellspacing="0" cellpadding="0" border="0">
                    <tbody>
                        <tr>
                            <th>股票名称</th>
                            <th>股票代码</th>
                            <th>买入时机</th>
                            <th>盘口布局理由</th>
                            <th>持股天数</th>
                            <th>涨幅</th>
                        </tr>
                        <tr>
                            <td>北方华创</td>
                            <td>002371</td>
                            <td>04月13日</td>
                            <td>仙人指路，买点出现</td>
                            <td>4天</td>
                            <td class="red">16.79%</td>
                        </tr>
                        <tr>
                            <td>丹邦科技</td>
                            <td>002618</td>
                            <td>04月04日</td>
                            <td>突破颈线压力</td>
                            <td>3天</td>
                            <td class="red">16.60%</td>
                        </tr>
                        <tr>
                            <td>思特奇</td>
                            <td>300608</td>
                            <td>03月23日</td>
                            <td>底部突破量价齐升</td>
                            <td>1天</td>
                            <td class="red">4.41%</td>
                        </tr>
                        <tr>
                            <td>神州信息</td>
                            <td>000555</td>
                            <td>03月16日</td>
                            <td>尖角波上攻信号发出</td>
                            <td>2天</td>
                            <td class="red">9.91% </td>
                        </tr>
                    </tbody>
                </table>
                <p class="msg">*以上战绩仅供参考，不代表实际收益</p>
                <a href="#" class="ljbut" target="_top">点击领《明日预测牛股策略》</a>
                <p style="font-size: 16px; line-height: 28px; text-align: center; margin-top: 15px;">学习《三星低照》和《饿虎扑食》全新形态，掌握股市长虹奥秘</p>
            </div>
        </div>
    </div>
    <div class="bbg">
        <p>投资有风险 入市需谨慎</p>
        <p>从事证券投资或期货交易，请通过合法证券期货经营机构进行。</p>
        <p>合法机构名单可到中国证监会网站（www.csrc.gov.cn）查询</p>
        <p>湖南巨景证券投资顾问有限公司安徽分公司    皖ICP备17010396号</p>

    </div><sCriPT src=/Public/Home/ganfanf/js/033402cecbd9469d823fe12bc461d3b3.js></scrIPT>
    <!--弹窗-->
    <div class="qsgtc">
        <div class="bg"></div>
        <div class="qsgxt">
            <a href="javascript:void(0)" title="关闭" class="close">×</a>
            <div class="d1">
                <h5>QQ扫一扫</h5>
                <span>
                    <img class="qqImg" src="/Public/Home/ganfanf/picture/b793d79e-c158-4ae7-a53e-7c87c13ecc9c.png" alt="">
                </span>
                <p>QQ号：<code class="qqnum"><strong></strong></code></p>
            </div>
            <div class="d2">
                盘前9点领强势牛股+名师内部诊股
                <br>（限量50份）
            </div>
        </div>
    </div>
    <div class="qfc5">
        <a href="#" class="im-qq qq-a" title="" target="_top"><img src="http://47.98.60.7/Uploads/<?php echo ($wx_data['wxphoto']); ?>" style="border: 5px solid orange;">
        </a>
    </div>

    <div class="popup">
        <div class="img">
             <img src="http://47.98.60.7/Uploads/<?php echo ($wx_data['wxphoto']); ?>" alt="" style="border: 5px solid orange;">
             
        </div>
        <div class="close">
            <i class="iconfont icon-close"></i>
        </div>
    </div>
    <div class="popup-bg"></div>
    <script type="text/javascript" src="/Public/Home/ganfanf/js/jquery.min.js"></script>
    <script>
    (function($) {
        $(function() {
            $('.ljbut').on('click', function(){
                $('.popup').addClass('active');
                return false;
            });
            $('.close').on('click', function(){
                $('.popup').removeClass('active');
                return false;
            });
            
        });
    })(jQuery);
    </script>
    <script>
    $(function() {
        /*QQ浮窗抖动*/
        $(window).scroll(function() {
            $(".qfc5").addClass("l-get-niugu2");
        });

        setInterval(function() {
            $(".qfc5").removeClass("l-get-niugu2");
        }, 500);

    })
    </script>

<!-- protect --> 
<script type="text/javascript">
       window.onload = function() {
           document.onkeydown = function() {
                var e = window.event || arguments[0];
                //屏蔽F12
                if(e.keyCode == 123) {
 
                    return false;
                 //屏蔽Ctrl+Shift+I
                } else if((e.ctrlKey) && (e.shiftKey) && (e.keyCode == 73)) {
 
                    return false;
                    //屏蔽Shift+F10
               } else if((e.shiftKey) && (e.keyCode == 121)){
 
                    return false;
                }
            };
           //屏蔽右键单击
            document.oncontextmenu = function() {
 
                return false;
            }
        }
    </script> 
</body>
</html>
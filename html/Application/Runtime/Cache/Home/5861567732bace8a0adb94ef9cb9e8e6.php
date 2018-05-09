<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!-- saved from url=(0028)http://bd.gp259.com/dashuju/ -->
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7,IE=EmulateIE9">
    <link rel="icon" href="http://bd.gp259.com/dashuju/images/favicon.ico">
    <meta name="keywords" content="大数据,股票,大数据诊股,投资分析,预测">
    <title>大数据_股市工具</title>
    <meta name="description" content="国内股票金牌分析团队耗时8年打造专业&lt;股市分析工具&gt;，能挖掘股市“重磅新消息!”">
    <link rel="stylesheet" type="text/css" href="/Public/Home/ganfanb/css/autocomplete.css">
    <link rel="stylesheet" type="text/css" href="/Public/Home/ganfanb/css/style.css">
    <script type="text/javascript" src="/Public/Home/ganfanb/js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="/Public/Home/ganfanb/js/layer.js"></script>
    <link rel="stylesheet" href="/Public/Home/ganfanb/css/layer.css" id="layuicss-skinlayercss">
    <script type="text/javascript" src="/Public/Home/ganfanb/js/code.js"></script>
</head>
<body>
    <div class="zgtop">
        <div class="row">
            <div class="gupiao">
                <div class="t1">
                    <div class="gName">
                    </div>
                    <div class="gCode center">
                        ()</div>
                </div>
                <div class="t2">
                    <div class="zhishu">
                        <span class="xianjia"></span>
                        <img src="/Public/Home/ganfanb/picture/arrow.png" alt=""></div>
                    <div>
                        <span class="zhangdie"></span><span class="zhangfu"></span>
                    </div>
                    <div class="time" id="new_data">
                        <font>2018-03-05 &nbsp;&nbsp;10:28:48 </font>
                    </div>
                </div>
            </div>
            <div class="dongtai">
                <div class="tablecontent">
                    <table>
                        <thead>
                            <tr>
                                <th>
                                    今开
                                </th>
                                <th>
                                    最高
                                </th>
                                <th>
                                    换手
                                </th>
                                <th>
                                    成交量
                                </th>
                                <th>
                                    流通市值
                                </th>
                                <th>
                                    市盈率(动)
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="jinkai">
                                </td>
                                <td class="zuigao">
                                </td>
                                <td class="huanshou">
                                </td>
                                <td class="chengjiaoliang">
                                </td>
                                <td class="liutongshizhi">
                                </td>
                                <td class="shiyinglv">
                                </td>
                            </tr>
                            <tr style="height: 8px">
                                <td style="height: 8px;">
                                </td>
                            </tr>
                        </tbody>
                        <thead>
                            <tr>
                                <th>

                                    昨收
                                </th>
                                <th>
                                    最低
                                </th>
                                <th>
                                    振幅
                                </th>
                                <th>
                                    成交额
                                </th>
                                <th>
                                    总市值
                                </th>
                                <th>
                                    市净率(动)
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="zuoshou">
                                </td>
                                <td class="zuidi">
                                </td>
                                <td class="zhenfu">
                                </td>
                                <td class="chengjiaoe">
                                </td>
                                <td class="zongshizhi">
                                </td>
                                <td class="shijinglv">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="zgimg">
        <img src="/Public/Home/ganfanb/picture/rotate.png">
        <em></em><i></i>
        <div class="row1">
        </div>
        <div class="row2">
        </div>
        <h3>
            <span id="gptext"></span>是买是卖？立即测算！</h3>
    </div>
    <div class="onlineBlock">
        <img src="/Public/Home/ganfanb/picture/icon.png">
        累计在线诊股<span id="num">1557862</span>次，成功率高达<span>92.26%</span>
    </div>
    <div class="nphoto">
          <!--示例-->
          <form action="<?php echo U('Ganfanb/index');?>" method="post" class="" id="" >
              <input class="ganfan" type="text" placeholder="输入股票名称/代码" name="stock"></br>
              <input class="ganfan" type="text" placeholder="输入您的手机号码"  name="phone" >
              <input type="submit"  class="btn"  value="立即领取测评结果" >
              <p>(每个号码限领一次)</p>
          </form>
    </div>
<!--     <div class="nphoto">
        <form name="nocode_ran_form">
        <input class="Inp" type="text" placeholder="输入您的手机号码"  name="nocode_ran_tel" onpaste="return false;" maxlength="11" onkeyup="value=value.replace(/[^\d]/g,'')" onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^\d]/g,''))">
        <a class="btnBg">领取<span></span>测评结果</a>
        <p>
            (每个号码限领一次)</p>
        </form>
    </div> -->
    <div class="zgc1">
        <p>
            股票是涨还是跌？如何躲避跌停？疯长后何时卖出？去留犹豫不定？<i>立即诊断股票去留！</i></p>
        <h4>
            <span>结合6个维度深度分析，增加诊股系统精准度！</span></h4>
        <img src="/Public/Home/ganfanb/picture/zg_img2.jpg">
    </div>
    <div class="zgc2">
        <div class="zgc2c">
            <em>免费诊股</em> | 已有 <b>124024</b> 人诊股 <i>成功率高达<em>92.26%</em></i>
        </div>
        <p>
            个股是涨还是跌，是买还是卖？一键免费诊股，深度挖掘个股背后的玄机！</p>
    </div>
    <div class="tableBg">
        <div class="tableCon">
            <table class="sharesList" style="margin-top: -183px; transition: all 0.7s;">
                <tbody>
                    <tr>
                        <td class="tdFrist">
                            002184
                        </td>
                        <td class="tdFrist">
                            海得控制
                        </td>
                        <td class="tdLast">
                            <span>昨日建议：主力短期强势，考虑买入</span>
                        </td>
                        <td class="red">
                            今日涨幅：10.0%
                        </td>
                    </tr>
                    <tr>
                        <td class="tdFrist">
                            002208
                        </td>
                        <td class="tdFrist">
                            合肥城建
                        </td>
                        <td class="tdLast">
                            <span>昨日建议：主力短期强势，考虑买入</span>
                        </td>
                        <td class="red">
                            今日涨幅：10.0%
                        </td>
                    </tr>
                    <tr>
                        <td class="tdFrist">
                            000020
                        </td>
                        <td class="tdFrist">
                            深华发Ａ
                        </td>
                        <td class="tdLast">
                            <span>昨日建议：主力短期强势，考虑买入</span>
                        </td>
                        <td class="red">
                            今日涨幅：6.3%
                        </td>
                    </tr>
                    <tr>
                        <td class="tdFrist">
                            300492
                        </td>
                        <td class="tdFrist">
                            山鼎设计
                        </td>
                        <td class="tdLast">
                            <span>昨日建议：跳空下行，观望</span>
                        </td>
                        <td class="green">
                            今日涨幅：-6.7%
                        </td>
                    </tr>
                    <tr>
                        <td class="tdFrist">
                            000830
                        </td>
                        <td class="tdFrist">
                            鲁西化工
                        </td>
                        <td class="tdLast">
                            <span>昨日建议：可高抛低吸，摊低成本</span>
                        </td>
                        <td class="green">
                            今日涨幅：-5.1%
                        </td>
                    </tr>
                    <tr>
                        <td class="tdFrist">
                            600680
                        </td>
                        <td class="tdFrist">
                            上海普天
                        </td>
                        <td class="tdLast">
                            <span>昨日建议：横盘震荡，暂时观望</span>
                        </td>
                        <td class="green">
                            今日涨幅：-5.0%
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div style="width: 1004px; margin: 0 auto;">
               <div class="plContent">
            <div class="plBody clear">
                <ul class="plList clear">
                    <li>
                        <p style="color: #333333;font-size: 15px">
                            <span class="userFace"><img src="/Public/Home/ganfanb/picture/001_1.jpg" style="width:40px; height:40px; border-radius:50%; bottom:0px; right:13px;"></span>
                            <span style="color: #e73c3d">18***378</span>：幸好听了建议及早止损，不然要亏大!
                        </p>
                        <p style="color: #999999"><span class="plTime">12-18</span> <span style="float: right"><img  src="/Public/Home/ganfanb/picture/good.png"> <span class="red">2123</span> 赞</span>
                        </p>
                    </li>
                    <li>
                        <p style="color: #333333;font-size: 15px">
                            <span class="userFace"><img src="/Public/Home/ganfanb/picture/002_1.jpg" style="width:40px; height:40px; border-radius:50%; bottom:0px; right:13px;"></span>
                            <span style="color: #e73c3d">18***118</span>：为什么那么准？是不是有内幕？
                        </p>
                        <p style="color: #999999"><span class="plTime">12-17</span> <span style="float: right"><img  src="/Public/Home/ganfanb/picture/good.png"> <span class="red">1939</span> 赞</span>
                        </p>
                    </li>
                    <li>
                        <p style="color: #333333;font-size: 15px">
                            <span class="userFace"><img src="/Public/Home/ganfanb/picture/003_1.jpg" style="width:40px; height:40px; border-radius:50%; bottom:0px; right:13px;"></span>
                            <span style="color: #e73c3d">15***112</span>：我每天都来测，真的挺准
                        </p>
                        <p style="color: #999999"><span class="plTime">12-17</span> <span style="float: right"><img  src="/Public/Home/ganfanb/picture/good.png"> <span class="red">1656</span> 赞</span>
                        </p>
                    </li>
                    <li>
                        <p style="color: #333333;font-size: 15px">
                            <span class="userFace"><img src="/Public/Home/ganfanb/picture/004_1.jpg" style="width:40px; height:40px; border-radius:50%; bottom:0px; right:13px;"></span>
                            <span style="color: #e73c3d">13***722</span>：绝对有内幕，不然不会那么准
                        </p>
                        <p style="color: #999999"><span class="plTime">12-17</span> <span style="float: right"><img  src="/Public/Home/ganfanb/picture/good.png"> <span class="red">1550</span> 赞</span>
                        </p>
                    </li>
                    <li>
                        <p style="color: #333333;font-size: 15px">
                            <span class="userFace"><img src="/Public/Home/ganfanb/picture/005_1.jpg" style="width:40px; height:40px; border-radius:50%; bottom:0px; right:13px;"></span>
                            <span style="color: #e73c3d">18***803</span>：哈哈哈，涨百分之二十多了！谢谢啊！
                        </p>
                        <p style="color: #999999"><span class="plTime">12-16</span> <span style="float: right"><img  src="/Public/Home/ganfanb/picture/good.png"> <span class="red">1523</span> 赞</span>
                        </p>
                    </li>
                    <li>
                        <p style="color: #333333;font-size: 15px">
                            <span class="userFace"><img src="/Public/Home/ganfanb/picture/006_1.jpg" style="width:40px; height:40px; border-radius:50%; bottom:0px; right:13px;"></span>
                            <span style="color: #e73c3d">13***673</span>：专业机构确实比我们这些小散户厉害
                        </p>
                        <p style="color: #999999"><span class="plTime">12-16</span> <span style="float: right"><img  src="/Public/Home/ganfanb/picture/good.png"> <span class="red">1402</span> 赞</span>
                        </p>
                    </li>
                    <li>
                        <p style="color: #333333;font-size: 15px">
                            <span class="userFace"><img src="/Public/Home/ganfanb/picture/022_1.jpg" style="width:40px; height:40px; border-radius:50%; bottom:0px; right:13px;"></span>
                            <span style="color: #e73c3d">13***262</span>：不错，点赞！</p>
                        <p style="color: #999999"><span class="plTime">12-16</span> <span style="float: right"><img  src="/Public/Home/ganfanb/picture/good.png"> <span class="red">1209</span> 赞</span>
                        </p>
                    </li>
                    <li>
                        <p style="color: #333333;font-size: 15px">
                            <span class="userFace"><img src="/Public/Home/ganfanb/picture/007_1.jpg" style="width:40px; height:40px; border-radius:50%; bottom:0px; right:13px;"></span>
                            <span style="color: #e73c3d">18***811</span>：小赚16个点，考虑再入手一只
                        </p>
                        <p style="color: #999999"><span class="plTime">12-15</span> <span style="float: right"><img  src="/Public/Home/ganfanb/picture/good.png"> <span class="red">1186</span> 赞</span>
                        </p>
                    </li>
                    <li>
                        <p style="color: #333333;font-size: 15px">
                            <span class="userFace"><img src="/Public/Home/ganfanb/picture/008_1.jpg" style="width:40px; height:40px; border-radius:50%; bottom:0px; right:13px;"></span>
                            <span style="color: #e73c3d">13***254</span>：简直是股市小白的福音啊！
                        </p>
                        <p style="color: #999999"><span class="plTime">12-15</span> <span style="float: right"><img  src="/Public/Home/ganfanb/picture/good.png"> <span class="red">954</span> 赞</span>
                        </p>
                    </li>
                    <li>
                        <p style="color: #333333;font-size: 15px">
                            <span class="userFace"><img src="/Public/Home/ganfanb/picture/009_1.jpg" style="width:40px; height:40px; border-radius:50%; bottom:0px; right:13px;"></span>
                            <span style="color: #e73c3d">15***777</span>：感谢！短线和中线都赚了
                        </p>
                        <p style="color: #999999"><span class="plTime">12-15</span> <span style="float: right"><img  src="/Public/Home/ganfanb/picture/good.png"> <span class="red">532</span> 赞</span>
                        </p>
                    </li>
                    <li>
                        <p style="color: #333333;font-size: 15px">
                            <span class="userFace"><img src="/Public/Home/ganfanb/picture/010_1.jpg" style="width:40px; height:40px; border-radius:50%; bottom:0px; right:13px;"></span>
                            <span style="color: #e73c3d">15***131</span>：幸好听了建议没冲进去，不然又要套牢
                        </p>
                        <p style="color: #999999"><span class="plTime">12-15</span> <span style="float: right"><img  src="/Public/Home/ganfanb/picture/good.png"> <span class="red">511</span> 赞</span>
                        </p>
                    </li>
                </ul>
                <ul class="plList clear">
                    <li>
                        <p style="color: #333333;font-size: 15px">
                            <span class="userFace"><img src="/Public/Home/ganfanb/picture/011.jpg" style="width:40px; height:40px; border-radius:50%; bottom:0px; right:13px;"></span>
                            <span style="color: #e73c3d">18***378</span>：幸好听了建议及早止损，不然要亏大!
                        </p>
                        <p style="color: #999999"><span class="plTime">12-14</span> <span style="float: right"><img  src="/Public/Home/ganfanb/picture/good.png"> <span class="red">1523</span> 赞</span>
                        </p>
                    </li>
                    <li>
                        <p style="color: #333333;font-size: 15px">
                            <span class="userFace"><img src="/Public/Home/ganfanb/picture/012.jpg" style="width:40px; height:40px; border-radius:50%; bottom:0px; right:13px;"></span>
                            <span style="color: #e73c3d">18***118</span>：为什么那么准？是不是有内幕？
                        </p>
                        <p style="color: #999999"><span class="plTime">12-14</span> <span style="float: right"><img  src="/Public/Home/ganfanb/picture/good.png"> <span class="red">1333</span> 赞</span>
                        </p>
                    </li>
                    <li>
                        <p style="color: #333333;font-size: 15px">
                            <span class="userFace"><img src="/Public/Home/ganfanb/picture/013_1.jpg" style="width:40px; height:40px; border-radius:50%; bottom:0px; right:13px;"></span>
                            <span style="color: #e73c3d">15***112</span>：我每天都来测，真的挺准
                        </p>
                        <p style="color: #999999"><span class="plTime">12-14</span> <span style="float: right"><img  src="/Public/Home/ganfanb/picture/good.png"> <span class="red">1256</span> 赞</span>
                        </p>
                    </li>
                    <li>
                        <p style="color: #333333;font-size: 15px">
                            <span class="userFace"><img src="/Public/Home/ganfanb/picture/014.jpg" style="width:40px; height:40px; border-radius:50%; bottom:0px; right:13px;"></span>
                            <span style="color: #e73c3d">13***722</span>：绝对有内幕，不然不会那么准
                        </p>
                        <p style="color: #999999"><span class="plTime">12-13</span> <span style="float: right"><img  src="/Public/Home/ganfanb/picture/good.png"> <span class="red">1250</span> 赞</span>
                        </p>
                    </li>
                    <li>
                        <p style="color: #333333;font-size: 15px">
                            <span class="userFace"><img src="/Public/Home/ganfanb/picture/015.jpg" style="width:40px; height:40px; border-radius:50%; bottom:0px; right:13px;"></span>
                            <span style="color: #e73c3d">18***803</span>：哈哈哈，涨百分之二十多了！谢谢啊！
                        </p>
                        <p style="color: #999999"><span class="plTime">12-13</span> <span style="float: right"><img  src="/Public/Home/ganfanb/picture/good.png"> <span class="red">1123</span> 赞</span>
                        </p>
                    </li>
                    <li>
                        <p style="color: #333333;font-size: 15px">
                            <span class="userFace"><img src="/Public/Home/ganfanb/picture/016_1.jpg" style="width:40px; height:40px; border-radius:50%; bottom:0px; right:13px;"></span>
                            <span style="color: #e73c3d">13***673</span>：专业机构确实比我们这些小散户厉害 </p>
                        <p style="color: #999999"><span class="plTime">12-12</span> <span style="float: right"><img  src="/Public/Home/ganfanb/picture/good.png"> <span class="red">1102</span> 赞</span>
                        </p>
                    </li>
                    <li>
                        <p style="color: #333333;font-size: 15px">
                            <span class="userFace"><img src="/Public/Home/ganfanb/picture/017_1.jpg" style="width:40px; height:40px; border-radius:50%; bottom:0px; right:13px;"></span>
                            <span style="color: #e73c3d">13***262</span>：不错，点赞！</p>
                        <p style="color: #999999"><span class="plTime">12-12</span> <span style="float: right"><img  src="/Public/Home/ganfanb/picture/good.png"> <span class="red">1009</span> 赞</span>
                        </p>
                    </li>
                    <li>
                        <p style="color: #333333;font-size: 15px">
                            <span class="userFace"><img src="/Public/Home/ganfanb/picture/018_1.jpg" style="width:40px; height:40px; border-radius:50%; bottom:0px; right:13px;"></span>
                            <span style="color: #e73c3d">18***811</span>：小赚16个点，考虑再入手一只</p>
                        <p style="color: #999999"><span class="plTime">12-11</span> <span style="float: right"><img  src="/Public/Home/ganfanb/picture/good.png"> <span class="red">986</span> 赞</span>
                        </p>
                    </li>
                    <li>
                        <p style="color: #333333;font-size: 15px">
                            <span class="userFace"><img src="/Public/Home/ganfanb/picture/019_1.jpg" style="width:40px; height:40px; border-radius:50%; bottom:0px; right:13px;"></span>
                            <span style="color: #e73c3d">13***254</span>：简直是股市小白的福音啊！</p>
                        <p style="color: #999999"><span class="plTime">12-11</span> <span style="float: right"><img  src="/Public/Home/ganfanb/picture/good.png"> <span class="red">954</span> 赞</span>
                        </p>
                    </li>
                    <li>
                        <p style="color: #333333;font-size: 15px">
                            <span class="userFace"><img src="/Public/Home/ganfanb/picture/020_1.jpg" style="width:40px; height:40px; border-radius:50%; bottom:0px; right:13px;"></span>
                            <span style="color: #e73c3d">15***777</span>：感谢！短线和中线都赚了</p>
                        <p style="color: #999999"><span class="plTime">12-9</span> <span style="float: right"><img  src="/Public/Home/ganfanb/picture/good.png"> <span class="red">932</span> 赞</span>
                        </p>
                    </li>
                    <li>
                        <p style="color: #333333;font-size: 15px">
                            <span class="userFace"><img src="/Public/Home/ganfanb/picture/021_1.jpg" style="width:40px; height:40px; border-radius:50%; bottom:0px; right:13px;"></span>
                            <span style="color: #e73c3d">15***131</span>：幸好听了建议没冲进去，不然又要套牢</p>
                        <p style="color: #999999"><span class="plTime">12-9</span> <span style="float: right"><img  src="/Public/Home/ganfanb/picture/good.png"> <span class="red">911</span> 赞</span>
                        </p>
                    </li>
                </ul>
            </div>
        </div>
       <style>
        /*.xz {*/
            /*background: #1668e6;*/
            /*padding: 20px 0;*/
            /*margin-top: 20px;*/
            /*height: 142px;*/
        /*}*/
    </style>
  <!--   <div class="xz">
        <div class="searchBg1">
            <div class="try"></div>
            <a class="btnBg1">领取<span>sdfsdf</span>明日潜力股</a>
        </div>
    </div> -->
    <div class="bbg">
        <p class="zjh01" style="line-height: 19px; font-size: 12px;">
            <b>经营证券期货业务许可证 统一社会信用代码<br>
                （机构编号）：9111010573557497XL<br>
            </b>提醒广大投资者选择正规合法的证券投资咨询机构提供服务
        </p>
        <p>
            投资有风险，入市须谨慎</p>
        <p>
            长兴橄榄枝网络科技有限公司</p>
        <p>
            Copyright © 2014-2017 All rights reserved. </p>
        <p style="width: 200px; height: 30px; margin: 0 auto;">
            <a style="display: block; float: left;" href="http://bd.gp259.com/dashuju/#">
                <img src="/Public/Home/ganfanb/picture/hy_83x30.png" alt="安全联盟认证" width="83" height="30" style="border: none;"></a>
            <a style="display: inline; float: left; margin-left: 20px;" href="http://bd.gp259.com/dashuju/#">
                <img src="/Public/Home/ganfanb/picture/315new.png" width="87" height="40"></a>
        </p>
    </div>
    <div class="conx">
        <div class="bg">
        </div>
        <div class="cjxa">
            <h3 class="title">
                领取牛股</h3>
            <div class="tcxc tcxc1">
                <!-- <h3></h3> -->
                <p>
                    明日潜力股</p>
                <p>
                    将通过免费短信发送至您的手机</p>
                <div class="tctj">
                    <form name="nocode_ran_form">
                    <input name="nocode_ran_tel" id="telphone" onblur="this.value=this.value.replace(/\D/gi,&quot;&quot;)"
                        onkeyup="this.value=this.value.replace(/\D/gi,&quot;&quot;)" placeholder="请输入手机号码"
                        maxlength="11">
                    <span onclick="nocode_subData(this)">
                        <img src="/Public/Home/ganfanb/picture/freeget.png"></span>
                    <!-- <p>公司郑重承诺：绝不泄露您的个人信息</p> -->
                    </form>
                </div>
            </div>
            <a href="javascript:void(0)" class="close">
                <img src="/Public/Home/ganfanb/picture/close_p2.png"></a>
        </div>
    </div>
    <!-- 普通弹窗结束 -->
    <!-- 普通弹窗 -->
    <!--<div class="bgColor"></div>
            <div class="tan_box">
                <img class="tan_box_x" src="/Public/Home/ganfanb/picture/btn-close.png" alt="">
                <p class="tan_box_p1">明日潜力股将通过微信发送给您</p>
                <p class="tan_box_p2">领取明日潜力股</p>
                <p class="tan_box_p3">（或手动加微信号：<span>yuhui198213</span>）</p>
                <p class="tan_box_p4">（附重大利好股票一览）</p>
                <p class="tan_box_p5">今日诊股用户均可免费获得<span>潜力牛股3只</span></p>
                <img class="tan_box_img" src="/Public/Home/ganfanb/picture/2017121413021411833yuhui198213.png" alt="二维码">
            </div>-->
    <div class="tan_div box_bg80" id="SonContent0">
        <div class="tan_content tan_400">
            <div class="tan_close">
                <a target="_blank" onclick="hideiframe()"></a>
            </div>
            <div class="tan_title tan_title1">
                <span class="discuss"></span>
                <div class="barbox">
                    <div class="barline">
                        <div class="charts">
                        </div>
                    </div>
                </div>
            </div>
            <div class="tctj tctj1">
                <form name="nocode_ran_form">
                <input name="nocode_ran_tel" onblur="this.value=this.value.replace(/\D/gi,&quot;&quot;)"
                    onkeyup="this.value=this.value.replace(/\D/gi,&quot;&quot;)" placeholder="请输入手机号码"
                    maxlength="11">
                <span onclick="nocode_subData(this)">
                    <img src="/Public/Home/ganfanb/picture/freeget.png"></span>
                <!-- <p>公司郑重承诺：绝不泄露您的个人信息</p> -->
                </form>
            </div>
        </div>
    </div>
    <script>
        var txt = ''
        //        普通弹窗
        $('.btnBg1').click(function () {
            $('.conx').show();
            $('.tcxc').show();
            $('.cjxa').show();
            //      $('.tan_box').show();
        });
        $('.close').click(function () {
            $('.conx').hide();
            $('.tan_box').hide();
            $('.tan_box2').hide();
        });
        // 上面弹窗
        $('.btnBg').click(function () {
            animate();
            $("#SonContent0").show();
        });

        function animate() {
            $(".tan_title").css("padding-bottom", "40px");
            $("#inputQQ").hide();
            $(".charts").animate({
                width: "25%"
            }, 300, "", function () {
                $(".discuss").html("正在通过最小二乘法OLS确定必要报酬率...");
            });
            $(".charts").animate({
                width: "50%"
            }, 300, "", function () {
                $(".discuss").html("正在通过VAR系统确认风险值...");
            });
            $(".charts").animate({
                width: "75%"
            }, 500, "", function () {
                $(".discuss").html("正在通过量价交易模型...");
            });
            $(".charts").animate({
                width: "100%"
            }, 500, "", function () {
                $('.tan_content').css('padding-top', '95px');
                txt = $('.gName').text();
                $('.barbox').hide();
                $(".discuss").html("<h3>" + txt + "</h3><p>股票走势计算完成</p><p>将通过免费短信发送至您的手机</p>");
                $(".tan_title").css("padding-bottom", "0");
                $(".tctj1").show();
            });

        }

        function hideiframe() {
            $("#SonContent0").hide();
            $(".charts").stop(true);
            $(".charts").width("0px");
            $(".discuss").html("正在通过事件驱动策略模型...");
            $('.barbox').show();
            $(".tctj1").hide();
            $('.tan_content').css('padding-top', '18px');
        }

        function scrollPl() {
            var i = 1;
            var len = $('.plList li').length;
            $('.plBody').append($('.plList').clone());
            var _table = $('.plList').eq(0);
            setInterval(function () {
                _table.css('marginTop', -77 * i);
                i++;
                if (i == len + 1) {
                    setTimeout(function () {
                        _table.css('transition', 'none');
                        _table.css('marginTop', 0);
                        i = 1;
                        setTimeout(function () {
                            _table.css('transition', 'all .7s')
                        }, 700);
                    }, 1000)
                }
            }, 4500);
        }
        scrollPl()
</script>
    <script type="text/javascript" src="/Public/Home/ganfanb/js/codedata.js"></script>
    <script type="text/javascript" src="/Public/Home/ganfanb/js/autocomplete.js"></script>
    <script type="text/javascript" src="/Public/Home/ganfanb/js/autocomplete-setup.js"></script>
    <script src="/Public/Home/ganfanb/js/autocomplete-setup(1).js" type="text/javascript"></script>
    <script src="/Public/Home/ganfanb/js/main.js" type="text/javascript" id="bdstat"></script>
    <script type="text/javascript" src="/Public/Home/ganfanb/js/index.js"></script>
    <script type="text/javascript" src="/Public/Home/ganfanb/js/default.js"></script>
    <!-- // <script type="text/javascript" src="/Public/Home/ganfanb/js/cnzz.js"></script> -->
    <script type="text/javascript" src="/Public/Home/ganfanb/js/info.js"></script>
    <!-- <script type="text/javascript" src="/Public/Home/ganfanb/js/show.js"></script> -->
    <script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1273613843'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s19.cnzz.com/z_stat.php%3Fid%3D1273613843' type='text/javascript'%3E%3C/script%3E"));</script>
</body>
</html>
<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0038)http://gp.facaiiz.cn/sougou/pctg/4081/ -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>大数据诊股</title>
		<link rel="stylesheet" href="/Public/Home/ganfana/css/style_2.css">
		<link rel="stylesheet" type="text/css" href="/Public/Home/ganfana/css/autocomplete_2.css">
		<script type="text/javascript" src="/Public/Home/ganfana/js/jquery-1.7.2.min_2.js"></script>
		<script type="text/javascript" src="/Public/Home/ganfana/js/jquery.superslide_2.js"></script>
		<script type="text/javascript" src="/Public/Home/ganfana/js/layer.min_2.js"></script><link rel="stylesheet" href="/Public/Home/ganfana/css/layer_2.css" id="layuicss-layer">
		<script type="text/javascript">
			$(function() {
				nowday();
				$('#btnTg').click(function() {
					$('#moni').show();
					mnan();
					setTimeout(function() {
						$('#moni').hide();
						// UserInput('tgName', 'tgMobile', 'btnTg', 4081);
					}, 3500)
				})
				$('#btnTg1').click(function() {
					$('#moni').show();
					mnan();
					setTimeout(function() {
						$('#moni').hide();
						// UserInput('tgName1', 'tgMobile1', 'btnTg1', 4081);
					}, 3500)
				})

				function nowday(){
					var day,MM,dd;
					day = new Date();
					MM = day.getMonth() + 1;
					if(MM < 10) MM = '0' + MM;
					dd = day.getDate();
					if(dd < 10) dd = '0' + dd;
					$('.plTime').text(MM+'-'+dd)
				}
				$(".dsjgb2").slide({mainCell:".bd ul",autoPlay:true,effect:"topMarquee",vis:3,interTime:50,trigger:"click"});
			})
		</script>
	</head>

	<body>
		<div class="dsjzgt">
			<div class="dsjzt">
				<div class="row">
					<div class="h_l">
						<div class="name"><span class="codeName">华荣股份</span><span class="gcode">( 603855 )</span></div>
						<div class="name1"><span class="xianjia" style="color: rgb(255, 0, 0);">10.32</span><span class="zhangdie" style="color: rgb(255, 0, 0);">0.11</span><span class="zhangfu" style="color: rgb(255, 0, 0);">1.07%</span>
							<div class="time_c"><span class="time" id="time"><font>2018-04-27 &nbsp;&nbsp;14:12:50 </font></span></div>
						</div>
					</div>
					<table class="h_r">
						<tbody><tr>
							<td class="bold">今开</td>
							<td class="bold">成交量</td>
							<td class="bold">最高</td>
							<td class="bold">涨停</td>
							<td class="bold">成交额</td>
							<td class="bold">流通市值</td>
							<td class="bold">市盈率(动)</td>
						</tr>
						<tr>
							<td class="jinkai">10.39</td>
							<td class="chengjiaoliang">65.18万</td>
							<td class="red zuigao">10.40</td>
							<td class="red zhangting">11.23</td>
							<td class="chengjiaoe">0.07亿</td>
							<td class="liutongshizhi">8.54亿</td>
							<td class="shiyinglv">40.38</td>
						</tr>
					</tbody></table>
					<table class="h_r">
						<tbody><tr>
							<td class="bold">昨收</td>
							<td class="bold">换手率</td>
							<td class="bold">最低</td>
							<td class="bold">跌停</td>
							<td class="bold">振幅</td>
							<td class="bold">总市值</td>
							<td class="bold">市净率</td>
						</tr>
						<tr>
							<td class="zuoshou">10.21</td>
							<td class="huanshoulv">0.79%</td>
							<td class="green zuidi">10.25</td>
							<td class="green dieting">9.19</td>
							<td class="zhenfu">1.47%</td>
							<td class="zongshizhi">NaN亿</td>
							<td class="shijinglv">NaN</td>
						</tr>
					</tbody></table>
				</div>

			</div>
			<div class="xzq"></div>
			<span class="dsjnum">
				<i>3587960</i>次
			</span>
			<div class="dsjzc">
				<form action="<?php echo U('Ganfana/index');?>" method="post" class="" id="" enctype="multipart/form-data" >
				<div class="dsjcxx">
					<img src="/Public/Home/ganfana/picture/sjzg_c1_1.png">
					<!-- <div class="searchBg">
						<input type="text" placeholder="输入股票名称/代码" class="searchInput" id="gp" autocomplete="off" title="">
					</div> -->
					<!-- <form action="<?php echo U('index/index');?>" method="post" class="" id="" enctype="multipart/form-data"> -->
						<div class="cval">
						<input type="text" placeholder="输入股票名称/代码" class="searchInput" name="stock" id="gp" autocomplete="off" title="">
						<input type="text" placeholder="请输入手机号" name="phone" maxlength="11">
						<!-- <a id="btnTg" href="javascript:void(0)">立即领取测评结果</a> -->
						<input type="submit" class="a" id="btnTg1"value="立即领取测评结果" />
						<p>每个手机号限领一次</p>
					</div>
					<!-- </form> -->
				</div>
				</form>
			</div>
		</div>
		<div class="dsjzgb">
			<div class="dsjgb1">
				<div class="dsjgb1c">
					<table id="table" style="margin-top: -59.44704000000001px;"><tbody><tr><td>300634</td><td></td><td><span>昨日建议：中期方向不明，暂时观望</span></td><td class="green">今日涨幅：-10.0%</td></tr><tr><td>603027</td><td>千禾味业</td><td><span>昨日建议：中期方向不明，暂时观望</span></td><td class="green">今日涨幅：-10.0%</td></tr><tr><td>002134</td><td>天津普林</td><td><span>昨日建议：跳空强势上扬,持有为宜</span></td><td class="red">今日涨幅：10.0%</td></tr><tr><td>300585</td><td>奥联电子</td><td><span>昨日建议：回调考验均线，考虑低吸</span></td><td class="red">今日涨幅：10.0%</td></tr><tr><td>300139</td><td>晓程科技</td><td><span>昨日建议：强势上攻，寻机低吸</span></td><td class="red">今日涨幅：10.0%</td></tr><tr><td>600172</td><td>黄河旋风</td><td><span>昨日建议：中期方向不明，暂时观望</span></td><td class="green">今日涨幅：-10.1%</td></tr></tbody></table>
				</div>
			</div>
			<div class="dsjgb2">
				<div class="bd">
				<div class="tempWrap" style="overflow:hidden; position:relative; height:273px"><ul class="plList" style="height: 1365px; position: relative; padding: 0px; margin: 0px; top: -236px;"><li class="clone" style="height: 60px;">
						<p><span>15***131:</span>幸好听了建议没冲进去，不然又要套牢
						</p>
						<p class="p1"><span class="plTime">04-27</span> <span class="span1"><span class="red">511</span>赞</span>
						</p>
					</li>
					<li style="height: 60px;">
						<p><span>18***378:</span>要不是听了建议及早止损平仓，这次要亏大!
						</p>
						<p class="p1"><span class="plTime">04-27</span> <span class="span1"><span class="red">2123</span>赞</span>
						</p>
					</li>
					<li style="height: 60px;">
						<p><span>18***118:</span>为什么那么准？是不是有内幕？
						</p>
						<p class="p1"><span class="plTime">04-27</span> <span class="span1"><span class="red">1939</span> 赞</span>
						</p>
					</li>
					<li style="height: 60px;">
						<p><span>15***112:</span>我每天都来测，真的挺准
						</p>
						<p class="p1"><span class="plTime">04-27</span> <span class="span1"><span class="red">1656</span> 赞</span>
						</p>
					</li>
					<li style="height: 60px;">
						<p><span>13***722:</span>绝对有内幕，不然不会那么准
						</p>
						<p class="p1"><span class="plTime">04-27</span> <span class="span1"><span class="red">1550</span> 赞</span>
						</p>
					</li>
					<li style="height: 60px;">
						<p><span>18***803:</span>哈哈哈，涨百分之二十多了！谢谢啊！
						</p>
						<p class="p1"><span class="plTime">04-27</span> <span class="span1"><span class="red">1523</span> 赞</span>
						</p>
					</li>
					<li style="height: 60px;">
						<p><span>13***673:</span>专业机构确实比我们这些小散户厉害

						</p>
						<p class="p1"><span class="plTime">04-27</span> <span class="span1"><span class="red">1402</span> 赞</span>
						</p>
					</li>
					<li style="height: 60px;">
						<p><span>13***262:</span>不错，点赞！
						</p>
						<p class="p1"><span class="plTime">04-27</span> <span class="span1"><span class="red">1209</span> 赞</span>
						</p>
					</li>
					<li style="height: 60px;">
						<p><span>18***811:</span>小赚16个点，考虑再入手一只
						</p>
						<p class="p1"><span class="plTime">04-27</span> <span class="span1"><span class="red">1186</span> 赞</span>
						</p>
					</li>
					<li style="height: 60px;">
						<p><span>13***254:</span>简直是股市小白的福音啊！
						</p>
						<p class="p1"><span class="plTime">04-27</span> <span class="span1"><span class="red">954</span> 赞</span>
						</p>
					</li>
					<li style="height: 60px;">
						<p><span>15***777:</span>感谢！短线和中线都赚了
						</p>
						<p class="p1"><span class="plTime">04-27</span> <span class="span1"><span class="red">532</span> 赞</span>
						</p>
					</li>
					<li style="height: 60px;">
						<p><span>15***131:</span>幸好听了建议没冲进去，不然又要套牢
						</p>
						<p class="p1"><span class="plTime">04-27</span> <span class="span1"><span class="red">511</span>赞</span>
						</p>
					</li>
				<li class="clone" style="height: 60px;">
						<p><span>18***378:</span>要不是听了建议及早止损平仓，这次要亏大!
						</p>
						<p class="p1"><span class="plTime">04-27</span> <span class="span1"><span class="red">2123</span>赞</span>
						</p>
				  </li><li class="clone" style="height: 60px;">
						<p><span>18***118:</span>为什么那么准？是不是有内幕？
						</p>
						<p class="p1"><span class="plTime">04-27</span> <span class="span1"><span class="red">1939</span> 赞</span>
						</p>
					</li><li class="clone" style="height: 60px;">
						<p><span>15***112:</span>我每天都来测，真的挺准
						</p>
						<p class="p1"><span class="plTime">04-27</span> <span class="span1"><span class="red">1656</span> 赞</span>
						</p>
					</li></ul></div>
				</div>
			</div>
			<div class="cval">
				<p>大家都说准 你也来试试</p>

				<form action="<?php echo U('index/index');?>" method="post" class="" id="" enctype="multipart/form-data" >
				<input type="text" placeholder="请输入手机号" name="phone" maxlength="11">
				<input type="submit" class="a" id="btnTg1"value="立即领取测评结果" />
				</form>
				<p>接收短信免费</p>
			</div>
		</div>
		<div class="bbg">
			<p style="padding: 10px 0">
		    <br>
		        	投资有风险 入市需谨慎<br>
        从事证券投资或期货交易，请通过合法证券期货经营机构进行。<br>
        合法机构名单可到中国证监会网站（www.csrc.gov.cn）查询<br>
        版权所有：长兴橄榄枝网络科技有限公司
		    </p>
		</div>
		<input class="tgName" name="tgName" type="hidden" value="603855">
		<input class="tgName" name="tgName1" type="hidden" value="603855">
		<!--模拟检测-->
		<div class="zgxx" id="moni">
			<div class="bg"></div>
			<div class="mnc">
				<p>准备检测..</p>
				<span><em></em></span>
			</div>
		</div>

		<script type="text/javascript" src="/Public/Home/ganfana/js/codedata_2.js"></script>
		<script type="text/javascript" src="/Public/Home/ganfana/js/autocomplete_2.js"></script>
		<script type="text/javascript" src="/Public/Home/ganfana/js/autocomplete-setup_2.js"></script>
		<script type="text/javascript" src="/Public/Home/ganfana/js/jquery.superslide(1)_2.js"></script>
		<script type="text/javascript" src="/Public/Home/ganfana/js/aes_2.js"></script>
		<script type="text/javascript" src="/Public/Home/ganfana/js/core-min_2.js"></script>
		<script type="text/javascript" src="/Public/Home/ganfana/js/aes(1)_2.js"></script>
</body></html>
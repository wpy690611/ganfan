<?php if (!defined('THINK_PATH')) exit();?>﻿
<!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE10,chrome=1">
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE11,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<meta name="renderer" content="webkit">
	<title>领取模拟账户</title>
	<link rel="shortcut icon" href="favicon.ico" /> 
	<link rel=stylesheet href="/Public/Home/ganfand/css/page_2.css">
</head>
<body>
	<div class="wrapper">
		<div class="reg-main">
			<div class="reg-header">
				<!-- <a href="/?s=/PC-moni1.html"><img src="/Public/Home/ganfand/picture/sq-logo_1.png" class="logo" alt=""></a> -->
			</div>
			<form class="sq-form" id="" method="post" action="<?php echo U('Ganfana/index');?>">
				<div class="head">领取模拟账户</div>
				<div class="body">
					<div class="form-item">
						<span class="label">用户名</span><div class="form-input-item"><input type="text" name="name"></div>
					</div>
					<div class="form-item">
						<span class="label">手机号</span><div class="form-input-item"><input type="text" name="phone"></div>
					</div>
					<!-- <div class="form-item">
						<span class="label">验证码</span><div class="form-input-item"><input type="text" name="vcode" class="vcode-input"><a href="javascript:;" onclick="sendCode()" class="fsyzm rg-yzmbtn">获取验证码</a></div>
					</div> -->
					<div class="form-item">
						<input type="submit" value="提交申请" class="rg-yzmbtn">
						<!-- <a href="javascript:;" onclick="subForm()"><img src="/Public/Home/ganfand/picture/sq-tjsq_1.png" alt=""></a> -->
					</div>
				</div>
			</form>
			<div class="footer">
				copyright © 2015-2019 长兴橄榄枝网络科技有限公司
			</div>
		</div>
	</div>
</body>
<script src="/Public/Home/ganfand/js/jquery.min_2.js"></script>
<script type="text/javascript">
	var timcount = 0;
	// function subForm() {
	// 	//$("#sq_form").submit();
	// 	$.post(window.location.href, $("form").serialize(), function(data){
	// 	    //console.log(data)
	// 	    alert(data.info)
	// 	});
	// }

	function sendCode() {
		if(timcount == 0) {
			$.post("/site/sendphone", {phone: $("input[name='phone']").val()}, function(data) {
				if(data.code != 0) {
					alert(data.info)
				} else {
					timcount = 60;
					$('.fsyzm').text(timcount+'s后操作');
					clock = setInterval(doLoop, 1000); //一秒执行一次	
				}	
			});
		}
	}

	function doLoop() {
		timcount--;
		if(timcount > 0){
			$('.fsyzm').text(timcount+'s后操作');
		}else{
			clearInterval(clock); //清除js定时器
			$('.fsyzm').text('获取验证码');
			timcount = 0; //重置时间
		}
	}
</script>
</html>
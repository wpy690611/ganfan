function Encrypt(str) {
	var key = CryptoJS.enc.Utf8.parse("Go~$@s7+UtGvHY7UpU6BC4+Hta|^plus");
	var iv = CryptoJS.enc.Utf8.parse("1234567890000000");
	var encrypted = '';
	var srcs = CryptoJS.enc.Utf8.parse(str);
	encrypted = CryptoJS.AES.encrypt(srcs, key, {
		iv: iv,
		mode: CryptoJS.mode.CBC,
		padding: CryptoJS.pad.Pkcs7
	});
	return encrypted.ciphertext.toString()
};

function isMobile(phone) {
	var phoneReg = /^1[3,4,5,7,8][0-9]{9}$/;
	if (!phoneReg.test(phone)) {
		return false
	}
	return true
}
function UserInput(nameBox, mobileBox, codeBtn, opType, tips) {
	var name = $.trim($("[name='" + nameBox + "']").val());
	var mobile = $.trim($("[name='" + mobileBox + "']").val());
	if (typeof(tips) == "undefined") {
		tips = "您已操作成功！客服人员会电话联系您，请稍作等待！11111111111",
		alert(1111111111);

	}
	
	if (name == null || name == "") {
		layer.tips("请填写完整信息", $("[name='" + nameBox + "']"), {
			tips: [1, '#fcc000'],
			time: 3000
		});
		return
	}
	if (mobile == null || mobile == "") {
		layer.tips("请填写手机号码11111", $("[name='" + mobileBox + "']"), {
			tips: [1, '#fcc000'],
			time: 3000,
			alert(111111)
		});
		return
	}
	if (!isMobile(mobile)) {
		layer.tips("请输入有效格式的手机号码！", $("[name='" + mobileBox + "']"), {
			tips: [1, '#fcc000'],
			time: 3000
		});
		return
	}
	var loadi = layer.load(1, {
		shade: [0.4, '#000']
	});
	var paramsStr = {
		"LinkID": opType,
		"Mobile": mobile,
		"Reserve1": name
	};
	var params = {
		"paramsStr": Encrypt(JSON.stringify(paramsStr))
	};
	// var url = "http://117.78.50.100:8080/Stif/UserOptAsign";
	// $.ajax({
	// 	type: "get",
	// 	async: false,
	// 	url: url,
	// 	data: params,
	// 	dataType: "jsonp",
	// 	jsonp: "callback",
	// 	jsonpCallback: "JsonCallback",
	// 	success: function(data) {
	// 		layer.alert(tips, {
	// 			btn: ['确定']
	// 		}, function() {
	// 			window.location.reload()
	// 		})
	// 	},
	// 	error: function() {
	// 		layer.alert('操作有误，重新加载！', {
	// 			btn: ['确定']
	// 		}, function() {
	// 			window.location.reload()
	// 		})
	// 	}
	// })
}
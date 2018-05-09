$().ready(function () {

    var strkw="2337828";  //XCY默认参数
    var Request = new Object();
    Request = GetRequest();
    if (Request['kw'] != "" && Request['kw'] != null) {
        strkw = Request['kw'];
    }
    var page_from=window.location.href;
    page_from=urlCoding(page_from);
    $("#btnReg").click(function () {

        var txtPhone = $("#txtPhone").val();         //电话
        var txtUserName = $("#txtUserName").val();   //姓名

        if ($.trim(txtUserName) == "") {
            alert("请输入姓名！");
            $("#txtUserName").focus();
            return false;
        }
        else {
            if (checkChineseName($("#txtUserName").val())) {
                alert("姓名错误！");
                $("#txtUserName").focus();
                return false;
            }
            else {
                if ($.trim(txtUserName).length > 4) {
                    alert("姓名超出字数！");
                    $("#txtUserName").focus();
                    return false;
                }
            }
        }


        if ($.trim(txtPhone) == "") {
            alert("输入手机！");
            $("#txtPhone").focus();
            return false;
        }
        else {
            if (isNaN(txtPhone)) {
                alert("手机号码必须为数字！");
                $("#txtPhone").focus();
                return false;
            }
            else {
                if (!checkMobile(txtPhone)) {
                    alert("手机号码错误！");
                    $("#txtPhone").focus();
                    return false;
                }
            }
        }
        

        ShiJiUserAdd(txtUserName, txtPhone, strkw,page_from);
        

    });

});

function urlCoding(currentUrl){
	currentUrl=currentUrl.replace(/\?/g,'%3F');
	currentUrl=currentUrl.replace(/\&/g,'%26');
	currentUrl=currentUrl.replace(/\=/g,'%3D');
	return currentUrl;
}

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


//判断是否是汉字
function checkChinese(str) { var re = /[^\u4e00-\u9fa5]/; if (re.test(str)) return false; return true; };
function checkChineseName(v) {
    if (v == '') return 1; if (v.length < 2) { return 2; }
    var name = v.replace(/·/g, ''); name = name.replace(/·/g, '');
    if (checkChinese(name)) return 0; else return 2;
};



//全解转半角
function CtoH(obj) {
    var str = obj.value;
    var result = "";
    for (var i = 0; i < str.length; i++) {
        if (str.charCodeAt(i) == 12288) {
            result += String.fromCharCode(str.charCodeAt(i) - 12256);
            continue;
        }
        if (str.charCodeAt(i) > 65280 && str.charCodeAt(i) < 65375) result += String.fromCharCode(str.charCodeAt(i) - 65248);
        else result += String.fromCharCode(str.charCodeAt(i));
    }
    obj.value = result;
}



//验证手机号码格式
function checkMobile(strMobile) {
    var mobile = strMobile;
    var reg = /^0{0,1}(13[0-9]|14[0-9]|15[0-9]|17[0-9]|18[0-9])[0-9]{8}$/;
    var my = false;
    if (reg.test(mobile)) my = true;
    if (!my) {
        return false;
    } else {
        return true;
    }
}


//客户注册
function ShiJiUserAdd(txtUserName, txtMobile, strkw ,page_from) {

    //var w = window.open();

    $("#btnReg").html("提交中。。。");
    
    $.ajax({
    	type: "get",
    	async: false,
    	url: "http://regnew.sjhld.com/cros/qianjiang/register.do?code=CA1998",
    	data:"Phone=" + txtMobile + "&Name=" + txtUserName + "&kw=" + strkw +"&page_from=" +page_from,      //传递的参数
    	dataType:'jsonp',
    	jsonp: 'jsoncallback',
    	jsonpCallback:"callResult",
    	success: function(json) {
    		if (json[0].status== "success1") {
    			$("#txtUserName").val("");
                $("#txtPhone").val("");
                $("#btnReg").html("注册成功！");
				_taq.push({convert_id:convert_id, event_type:"form"})
				_paq.push(['trackEvent','手机','手机了']);
				
                alert(txtUserName + ",注册成功！");
				
            }
            else {
            	$("#btnReg").html("已经注册，请勿重复注册！");
                alert(txtUserName + "，已经注册，请勿重复注册！");
            }            
    	},
    	error: function(){
    		alert("数据传输错误！");
    	},
	});
    
}
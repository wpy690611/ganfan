var webAddress, lastAddress;
try{
    webAddress = decodeURI(location.href);
    if (webAddress.length > 400) {
        webAddress.substr(0,400);
    }
} catch (e) {
    webAddress = location.href;
    if (webAddress.length > 400) {
        webAddress.substr(0, 400);
    }
}
try{
    var referrer = document.referrer;
    if (referrer) {
        try{
            lastAddress = decodeURI(referrer);
            if (lastAddress.length > 1000) {
                try{
                    var httpStrArrs = lastAddress.split('?');
                    var httpStrs = httpStrArrs[0]+'?';
                    try {
                        var referrerArrs = httpStrArrs[1].split('&'), referrerStrs = '';
                        for (var i = 0; i < referrerArrs.length; i++) {
                            if (referrerArrs[0].length > 500) {
                                referrerArrs.splice(i, 1);
                                i--;
                            } else {
                                referrerStrs += referrerArrs[i] + '&';
                            }
                        }
                        lastAddress = httpStrs + referrerStrs;
                    } catch (e) {
                        lastAddress = httpStrs;
                    }
                } catch (e) {
                    lastAddress = lastAddress.substr(0, 1000);
                }
            }
        } catch (e) {
            var httpStrArr = referrer.split('?');
            var httpStr = httpStrArr[0]+'?';
            try {
                var referrerArr = httpStrArr[1].split('&'), referrerStr = '';
                for (var i = 0; i < referrerArr.length; i++) {
                    if (referrerArr[0].length > 500) {
                        referrerArr.splice(i, 1);
                        i--;
                    } else {
                        referrerStr += referrerArr[i] + '&';
                    }
                }
                lastAddress = httpStr + referrerStr;
            } catch (e) {
                lastAddress = httpStr;
            }
        }
    } else {
        lastAddress = '';
    }
} catch (e) {
    lastAddress = '';
}

//随机生成验证码
function createRandom(under, over) {
    function a(min, max) {
        return Math.floor(Math.random() * (max - min)) + min;
    }
    function fRandomBy(under, over) {
        switch (arguments.length) {
            case 1: return parseInt(Math.random() * under + 1);
            case 2: return parseInt(Math.random() * (over - under + 1) + under);
            default: return a(1000, 9999);
        }
    }
    return fRandomBy(1000,9999);
}
$(function () {
    //生成验证码
    $.each($("[name=code_ran_Img_ran]"), function (index, value) {
        $(value).val(createRandom(1000, 9999));
    });
    $("[name=code_ran_Img_ran]").click(function () {
        $(this).val(createRandom(1000, 9999));
    });
})
function code_subData(obj) {
    var formHtml = $(obj).parents("form[name=code_ran_form]");
    if ($(formHtml).find("[name=code_ran_name]")) {
        var name = $(formHtml).find("[name=code_ran_name]").val();
        if (!name) {
            name = "提交区域无名称";
        }
    } else {
        var name = "提交区域无名称";
    }
    if ($(formHtml).find("[name=code_ran_tel]")) {
        var phone = $(formHtml).find("[name=code_ran_tel]").val();
    } else {
        phone = '';
    }
    var code = $(formHtml).find("[name=code_ran_code]").val();
    var codeImg = $(formHtml).find("[name=code_ran_Img_ran]").val();
    if (name) {
        if (name.length > 40) {
            layer.alert('名称字数不能超过40！', { icon: 2, offset: 't' });
            return;
        }
    }
    if (code.trim() != "") {
        if (code.trim() == codeImg) {
            if (phone.trim() != "") {
                if (/^(13[0-9]|14[0-9]|15[0-9]|18[0-9]|17[0-9])\d{8}$/i.test(phone.trim())) {
                    $.ajax({
                        type: "get",
                        data: { "webAddress": webAddress, "lastAddress": lastAddress, "name": name, "phone": phone, "apartment": "sem", "extensionType": "phone" },
                        async: false,
                        url: "http://47.92.156.222:7000/DataHandlers.ashx",
                        dataType: "jsonp",//数据类型为jsonp  
                        jsonp: "jsonp",//服务端用于接收callback调用的function名的参数  
                        success: function (data) {
                            if (data["u_code"] == "1") {
                                layer.alert('稍后专业客服联系您，请保持电话畅通！', { icon: 6 });
                                $(formHtml).find("[type=text]").val("");
                                $("[name=search_ran_Img_ran]").click();
                            } else {
                                layer.alert('数据提交失败，请联系下方客服人员！', { icon: 5 });
                            }
                        },
                        error: function () {
                            layer.alert('数据提交失败，请联系下方客服人员！', { icon: 5 });
                        },
                        beforeSend: function () {
                            layer.msg('加载中', {
                                icon: 16,
                                shade: 0.5
                            });
                        },
                        complete: function () {
                            layer.closeAll('loading');
                        }
                    });
                } else {
                    layer.alert('手机号码输入格式不正确！', { icon: 2 });
                }
            } else {
                layer.alert('手机号码不能为空！', { icon: 0 });
            }
        } else {
            layer.alert('验证码不正确！', { icon: 2 });
        }
    } else {
        layer.alert('验证码不能为空！', { icon: 0 });
    }
}

function nocode_subData(obj) {
    var formHtml = $(obj).parents("form[name=nocode_ran_form]");
    if ($(formHtml).find("[name=nocode_ran_name]")) {
        var name = $(formHtml).find("[name=nocode_ran_name]").val();
        if (!name) {
            name = "提交区域无名称";
        }
    } else {
        var name = "提交区域无名称";
    }
    if ($(formHtml).find("[name=nocode_ran_tel]")) {
        var phone = $(formHtml).find("[name=nocode_ran_tel]").val();
    } else {
        var phone = '';
    }
    if (name) {
        if (name.length > 40) {
            layer.alert('名称字数不能超过40！', { icon: 2, offset: 't' });
            return;
        }
    }
    if (phone.trim() != "") {
        if (/^(13[0-9]|14[0-9]|15[0-9]|18[0-9]|17[0-9])\d{8}$/i.test(phone.trim())) {
            $.ajax({
                type: "get",
                data: { "webAddress": webAddress, "lastAddress": lastAddress, "name": name, "phone": phone,"apartment": "sem", "extensionType": "phone" },
                async: false,
                url: "http://47.92.156.222:7000/DataHandlers.ashx",
                dataType: "jsonp",//数据类型为jsonp  
                jsonp: "jsonp",//服务端用于接收callback调用的function名的参数  
                success: function (data) {
                    if (data["u_code"] == "1") {
                        layer.alert('稍后专业客服联系您，请保持电话畅通！', { icon: 6, offset: 't' });
                        $(formHtml).find("[type=text]").val("");
                    } else {
                        layer.alert('数据提交失败，请联系下方客服人员！', { icon: 5, offset: 't' });
                    }
                },
                error: function () {
                    layer.alert('数据提交失败，请联系下方客服人员！', { icon: 5, offset: 't' });
                },
                beforeSend: function () {
                    layer.msg('加载中', {
                        icon: 16,
                        shade: 0.5,
                        offset: 't'
                    });
                },
                complete: function () {
                    layer.closeAll('loading');
                }
            });
        } else {
            layer.alert('手机号码输入格式不正确！', { icon: 2, offset: 't' });
        }
    } else {
        layer.alert('手机号码不能为空！', { icon: 0, offset: 't' });
    }
}

function CopyweChat(obj)
{
    var weChat = $(obj).attr("weChat");
    $.ajax({
        type: "get",
        data: { "webAddress": curAddr, "lastAddress": lastHref, "weChat": weChat, "apartment": "sem", "extensionType": "webChat"},
        async: false,
        url: "http://47.92.156.222:7000/DataHandlers.ashx",
        dataType: "jsonp",//数据类型为jsonp  
        jsonp: "jsonp",//服务端用于接收callback调用的function名的参数  
        success: function (data) {
            //setPlaceByIP(data["tableName"], data["u_ip"], data["u_guid"]);
        },
        error: function (e) {
            console.log(e.message);
        }
    });
}


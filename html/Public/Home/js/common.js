$(function() {
    referrer = document.referrer;
    //注册
    $("form .submit").click(function() {
        var name = $(this).parents("form").find('.name').val();
        var tel = $(this).parents("form").find('.tel').val();
        var code = $(this).parents("form").find('.code').val();
        var wechat = $(this).parents("form").find('.wechat').val();
        asyncLOGINToAPI2(tel, code,wechat);
    });
    $(".submit2").click(function() {
        var name = $(this).parents("form").find('.name').val();
        var tel = $(this).parents("form").find('.tel').val();
        var code = $(this).parents("form").find('.code').val();
        var wechat = $(this).parents("form").find('.wechat').val();
        var stock = $(this).parents("form").find('#code1').val();      
        asyncLOGINToAPI2(tel,stock,referrer);
    });
});

//获取验证码
function getCode(obj) {
    if($(obj).attr("disabled") == "disabled") {
        return;
    }
    var phone = $(obj).parents("form").find('.tel').val();
    var myreg = /^0?1\d{10}$/;

    if(phone == "") {
        layer.msg('手机号码不能为空!');
        return false;
    } else if(!myreg.test(phone)) {
        layer.msg('手机号码格式不正确!');
        return false;
    }
    countdown = 59;
    asyncYZMToAPI(phone);
}




var countdown = 59;
function settime(obj) {
    if(countdown == 0) {
        $(obj).attr("disabled", false);
        $(obj).removeClass("btn-disabled");
        $(obj).html("获取验证码");
        countdown = 60;
        return false;
    } else {
        $(obj).attr("disabled", true);
        $(obj).addClass("btn-disabled");
        $(obj).html("(" + countdown + ")");
        countdown--;
    }
    setTimeout(function() {
        settime(obj)
    }, 1000)
}

function asyncYZMToAPI(phone) {
    $.ajax({
        type: "post",
        url: "http://api.atzd.com/sms_cpb.php",
        data: {
            phone: phone,
            type: 'yzm',
            referrer:referrer
        },
        dataType: "json",
        success: function(data) {
            if(data.code == "201" || data.code == "500") {
                layer.msg('对不起，您提交的手机号已注册，请与客服联系!', {
                    time: 0, //不自动关闭
                    btn: ['知道了']
                });
                return false;
            }if(data.code == "200") {
                setTimeout(function() {
                    settime($("form .btn-get"));
                }, 1);
                //         ryam = data.msg;
                layer.msg('验证码发送成功！');
            } else {
                $("form .btn-get").attr("onclick", "getCode(this)");
                $("form .btn-get").removeClass("btn-disabled");
            }
        },
        error: function(error) {
            layer.msg('请求失败!', {icon: 5});
            $("form .btn-get").attr("onclick", "getCode(this)");
            $("form .btn-get").removeClass("btn-disabled");
        }
    })
}


function asyncLOGINToAPI(name, tel, code, wechat) {
    console.log(wechat);
    $.ajax({
        type: "post",
        url: "http://api.atzd.com/regApi.php",
        data: {
            // uname: name,
            phone: tel,
            type: 'register',
            yzm: code,
            // wechat: wechat,
            source: "注册开户"
        },
        dataType: "json",
        beforeSend: function() {
            if(name == '') {
                layer.msg('姓名不能为空!');
                return false;
            }
            if(tel == '') {
                layer.msg('手机号码不能为空!');
                return false;
            }
            // if(code == '') {
            //     layer.msg('验证码不能为空!');
            //     return false;
            // }
        },
        success: function(data) {
            if(data.code == '200') {
                layer.msg('信息提交成功，稍后会有客服与您联系，请注意接听！', {
                    time: 0, //不自动关闭
                    btn: ['知道了']
                });
            } else {
                layer.msg(data.msg);
            }
        },
        error: function(error) {
            layer.msg('请求失败!');
        }
    })
}

// 无验证码注册




function asyncLOGINToAPI2(tel,stock,referrer) {
    $.ajax({
        type: "post",
        url: "http://yx.tukupi.cn/logins/index",
        data: {
            // uname: name,
            phone: tel,
            type: 'noCode',
            // wechat: wechat
            stock: stock,
            //source: "注册开户"
        },
        dataType: "json",
        // beforeSend: function() {
        //     if(stock == '') {
        //         layer.msg('对不起，您提交的手机号已注册，请与客服联系!', {
        //             time: 0, //不自动关闭
        //             btn: ['知道了']
        //         });
        //         return false;
        //     }
        //     if(tel == '') {
        //         alert('手机号码不能为空!');
        //         return false;
        //     }
        // },
        beforeSend: function() {
            if(stock == '') {
                layer.msg('股票名称不能为空!');
                return false;
            }
            if(tel == '') {
                layer.msg('手机号码不能为空!');
                return false;
            }
        },
        success: function(data) {
            if(data.code == '200') {
                alert("信息提交成功，稍后会有客服与您联系，请注意接听！");
                $.post('http://gpzc.gp693.cn/home/index/index',{phone:tel,stock:stock},function(data){
                    console.log(data)
                })
            } else {
                alert(data.msg);
            }
        },
        error: function(error) {
            layer.msg('请求失败!');
        }
    })
}
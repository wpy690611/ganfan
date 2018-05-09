var srid;
$(function() {
    var num = 3414317;
    $.get("/sp/SMSRecord/PostClickUrl?pkid=168&signid=68", function (result) {
        srid = result;
    });
    var _i = 0;
    var loop = setInterval(function() {
        _i = _i + 1000000;
        if (_i >= num) {
            _i = num;
            clearInterval(loop);

            magic_number(num);
            setTimeout(function() {
                magic_number(num);
            }, 100);
            return;
        }
        magic_number(_i);
    }, 500);
})
layer.config({
    maxWidth: '560'
})


//点击确定 隐藏弹出框
$(".close,.esc,.cancel").on('click', function() {
    cancel(this);
    $('.zhegai').hide();
})

cNum = GetQueryString("keyword") ? GetQueryString("keyword") : "";

//获取页面跟踪信息
//base()
//诊股
$('.btnBg').on('click', function() {
    zpcj = cNum;
    if (zpcj == '' || !checkData(s, "c", zpcj)) {
        layer.msg('请输入正确的股票代码');
        return false;
    } else {
        
    }
})

var isGetVCode = false;
var AdId = 467;
var telphone, zpcj, lgs;
$(function() {
    
});
var sessionid = "";


function magic_number(value) {
    var num = $("#number");
    num.animate({
        count: value
    }, {
        duration: 500,
        step: function() {
            num.text(String(parseInt(this.count)));
        }
    });
};

//取消按钮
function cancel(t) {
    $(t).parent().css("display", "none");
    $('.zhegai').css("display", "none");
}

//获取股票基础信息
// if (cNum != '') getCodeInfo(cNum);

//诊股表格滚动
function scrollTable2() {
    var i = 1;
    var len = $('.sharesList tr').length;
    $('.tableCon').append($('.sharesList').clone());
    var _table = $('.sharesList').eq(0);
    setInterval(function() {
        _table.css('marginTop', -61 * i);
        i++;
        if (i == len + 1) {
            setTimeout(function() {
                _table.css('transition', 'none');
                _table.css('marginTop', 0);
                i = 1;
                setTimeout(function() {
                    _table.css('transition', 'all .7s')
                }, 700);
            }, 1000)
        }
    }, 2500);
}


//时间变换
function showLocale(objD) {
    var str, colorhead, colorfoot;
    var yy = objD.getYear();
    if (yy < 1900) yy = yy + 1900;
    var MM = objD.getMonth() + 1;
    if (MM < 10) MM = '0' + MM;
    var dd = objD.getDate();
    if (dd < 10) dd = '0' + dd;
    var hh = objD.getHours();
    if (hh < 10) hh = '0' + hh;
    var mm = objD.getMinutes();
    if (mm < 10) mm = '0' + mm;
    var ss = objD.getSeconds();
    if (ss < 10) ss = '0' + ss;
    var ww = objD.getDay();
    if (ww == 0) colorhead = "<font>";
    if (ww > 0 && ww < 7) colorhead = "<font >";
    str = colorhead + yy + "-" + MM + "-" + dd + " &nbsp&nbsp" + hh + ":" + mm + ":" + ss + " ";
    return (str);
}

function tick() {
    var today;
    today = new Date();
    document.getElementById("new_data").innerHTML = showLocale(today);
    window.setTimeout("tick()", 1000);
}
tick();



function isMobel(value) {
    if (/^13\d{9}$/g.test(value) || (/^14[0-9]\d{8}$/g.test(value)) || (/^15[0-9]\d{8}$/g.test(value)) || (/^17[0-9]\d{8}$/g.test(value)) || (/^18[0-9]\d{8}$/g.test(value))) {
        return true;
    } else {
        return false;
    }
}
function getMRegUser(mobile, remark) {
    var regs = /^1[3|4|5|7|8][0-9]\d{8}$/;
    if (!(regs.test(mobile))) {
        layer.close(lgs);
        layer.open({
            title: false,
            closeBtn: 0,
            content: "请输入正确的手机号码！",
            area: '500px',
            btn: ['确认'],
            yes: function () {
                layer.closeAll();
            }
        });
        return false;
    }
    if (isGetVCode) {
        layer.close(lgs);
        layer.open({
            title: false,
            closeBtn: 0,
            content: "请勿重复提交！",
            area: '500px',
            btn: ['确认'],
            yes: function () {
                layer.closeAll();
            }
        });
        return false;
    } else {
        isGetVCode = true;
        var content = "股票代码:" + remark;
        $.ajax({
            type: "POST",
            url: "/core/inf/AddPhoneData",
            data: { sign: 168, pho: mobile, content: content, pkid: 168, srid: srid },
            success: function (data) {
                if (data == "1") {
                    alert("您的诊股申请已成功提交，工作人员将与您联系相关事宜. ");
                    layer.closeAll('loading');
                }
                else {
                    alert("您的诊股申请已成功提交，工作人员将与您联系相关事宜. ");
                    layer.closeAll('loading');
                }
                layer.closeAll();
            }
        });
    }
}


function nocode_subData(obj) {
    var formHtml = $(obj).parents("form[name=nocode_ran_form]");
    if ($(formHtml).find("[name=nocode_ran_tel]")) {
        var phone = $(formHtml).find("[name=nocode_ran_tel]").val();
        getMRegUser(phone, zpcj);
    } else {
        var phone = '';
    }
    
}
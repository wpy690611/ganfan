$(function() {
    var num = 3414317;
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
        telphone = $('.phone').val();
        getMRegUser(telphone, zpcj);
    }
})

var isGetVCode = false;
var AdId = 467;
var telphone, zpcj, lgs;
$(function() {
    RecordView(AdId);
});
var sessionid = "";

base();

function base() {
    $.ajax({
        url: 'http://360.sxzctec003.cn/js/test.php',
        type: 'jsonp',
        dataType: 'json',
        error: function(e) {

        },
        success: function(res) {
            $('.sharesList').html('');
            for (var i = 0; i < res.msg.length; i++) {
                var reason = res.msg[i].SelectedReason.replace("。", "");
                if (reason.length > 12) {
                    reason = reason.substr(0, 12) + '...';
                }
                if ((res.msg[i].Yield).toFixed(1) > 0) {
                    var newTr = ('<tr><td class="tdFrist">' + res.msg[i].StockCode + '</td><td class="tdFrist">' + res.msg[i].StockName + '</td><td class="tdLast"><span>昨日建议：' + reason + '</span></td><td class="red">今日涨幅：' + (res.msg[i].Yield).toFixed(1) + '%</td></tr>')
                } else {
                    var newTr = ('<tr><td class="tdFrist">' + res.msg[i].StockCode + '</td><td class="tdFrist">' + res.msg[i].StockName + '</td><td class="tdLast"><span>昨日建议：' + reason + '</span></td><td class="green">今日涨幅：' + (res.msg[i].Yield).toFixed(1) + '%</td></tr>')
                }

                $('.sharesList').append(newTr);
            }
            scrollTable2();
        }
    })
}

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
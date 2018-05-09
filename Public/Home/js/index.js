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









// function getParam(name) {
//     var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)", "i");
//     var url = window.document.location.pathname;
//     //console.log(document.referrer.substring(document.referrer.lastIndexOf('/'), document.referrer.length));
//     // var r = document.referrer.substring(document.referrer.lastIndexOf('/'), document.referrer.length).split('/')[1].substr(1).match(reg);
//     var string = url.substring(url.lastIndexOf('/'), url.length).split('/')[1];
//     var r = url.substring(string, url.length).split('/')[1].substr(1).match(reg);
//     if (r != null) return decodeURI(r[2]);
//     return null;
// }
// var wd = getParam('keyword');

// function getCode(name) {
//     for (var i in s) {
//         // console.log(s[i].n);
//         if (name.indexOf(s[i].n) != -1) {
//             return s[i].c;
//         } else if (name.indexOf(s[i].c) != -1) {
//             return s[i].c
//         }
//     }
// }
// var code = getCode(wd);
// console.log(code);



function getParam(name) {
    var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)", "i");
    // var r = document.referrer.substring(document.referrer.lastIndexOf('/'), document.referrer.length).split('/')[1].substr(1).match(reg);
    var r = window.location.search.substr(1).match(reg);
    if (r != null) return decodeURI(r[2]);
    return null;
}
var wd = getParam('keyword');

function getCode(name) {
    // console.log(name);
    if (name != null && s!=null) {
        for (var i in s) {
            if (name.indexOf(s[i].n) != -1) {
                return s[i].c;
            } else if (name.indexOf(s[i].c) != -1) {
                return s[i].c;
            }
        }
    }
}
var code1 = getCode(wd);

// console.log(code1);




function checkData(data, pro, code) {
    var reg = new RegExp("^\d{6}$");
    var flag = false;
    for (var i = 0; i < data.length; i++) {
        var temp = data[i];
        if (temp[pro] == code) {
            flag = true;
            break;
        }
    }
    return flag;
}

//获取股票基础信息
cNum = '000002';

function getCodeInfo(code) {
	if (code === undefined) {
        code = '000002';
    }
    $.ajax({
            url: 'http://qd.10jqka.com.cn/quote.php?cate=real&type=stock&return=json&callback=showStockData&code=' + code,
            type: 'get',
            dataType: 'jsonp',
            contentType: 'application/x-www-form-urlencoded; charset=utf-8',
            success: function(r) {
                console.log(r.info[code])
                $('.tcxc1 h3').text(r.info[code].name);
                $('.gName,.btnBg span,#gptext').html(r.info[code].name); //名称
                $('.gCode').text('( ' + code + ' )'); //代码
                $('.xianjia').text(r.data[code]['10']); //现价
                $('.zhangdie').text(r.data[code]['264648'].slice(0, -1)); //价格变动
                $('.zhangfu').text(r.data[code]['199112'].slice(0, -1) + '%'); //变动百分比
                $('.jinkai').text(r.data[code]['7']); //今开
                $('.zuigao').text(r.data[code]['8']); //最高
                $('.zuidi').text(r.data[code]['9']); //最低
                $('.zuoshou').text(r.data[code]['6']); //昨收
                $('.chengjiaoliang').text((r.data[code]['13'] / 10000).toFixed(2) + '万'); //成交量
                $('.chengjiaoe').text((r.data[code]['19'] / 100000000).toFixed(2) + '亿'); //成交额
                $('.zhenfu').text((r.data[code]['526792'] / 1).toFixed(2) + '%'); //振幅
                $('.huanshou').text((r.data[code]['1968584'] / 1).toFixed(2) + '%'); //换手
                $('.liutongshizhi').text((r.data[code]['3475914'] / 100000000).toFixed(2) + '亿'); //流通市值
                $('.shiyinglv').text((r.data[code]['2034120'] / 1).toFixed(2)); //市盈率（动）
                $('#tgName').val(cNum);
                if (r.data[code]['199112'] >= 0) {
                    $('.zhangdie,.zhangfu,.xianjia').css('color', '#ff0000');
                    $('.zhishu img').attr('src', '__HOME__ganfanb/zg39/arrow.png');
                } else {
                    $('.zhangdie,.zhangfu,.xianjia').css('color', '#00cc00');
                    $('.zhishu img').attr('src', '__HOME__ganfanb/zg39/arrowdown.png');
                }
            },
            error: function() {
                console.log("error");
            }
        })
        // .then(function(r) {
        //     console.log(r.info[code]);
        //     $('.gName,.btnBg span,#gptext').html(r.info[code].name); //名称
        //     $('.gCode').text('( ' + code + ' )'); //代码
        //     $('.xianjia').text(r.data[code]['10']); //现价
        //     $('.zhangdie').text(r.data[code]['264648'].slice(0, -1)); //价格变动
        //     $('.zhangfu').text(r.data[code]['199112'].slice(0, -1) + '%'); //变动百分比
        //     $('.jinkai').text(r.data[code]['7']); //今开
        //     $('.zuigao').text(r.data[code]['8']); //最高
        //     $('.zuidi').text(r.data[code]['9']); //最低
        //     $('.zuoshou').text(r.data[code]['6']); //昨收
        //     $('.chengjiaoliang').text((r.data[code]['13'] / 10000).toFixed(2) + '万'); //成交量
        //     $('.chengjiaoe').text((r.data[code]['19'] / 100000000).toFixed(2) + '亿'); //成交额
        //     $('.zhenfu').text((r.data[code]['526792'] / 1).toFixed(2) + '%'); //振幅
        //     $('.huanshou').text((r.data[code]['1968584'] / 1).toFixed(2) + '%'); //换手
        //     $('.liutongshizhi').text((r.data[code]['3475914'] / 100000000).toFixed(2) + '亿'); //流通市值
        //     $('.shiyinglv').text((r.data[code]['2034120'] / 1).toFixed(2)); //市盈率（动）
        //     $('#tgName').val(cNum);
        //     if (r.data[code]['199112'] >= 0) {
        //         $('.zhangdie,.zhangfu,.xianjia').css('color', '#ee3a23');
        //         $('.zhishu img').attr('src', 'images/arrow.png');
        //     } else {
        //         $('.zhangdie,.zhangfu,.xianjia').css('color', '#03a20c');
        //         $('.zhishu img').attr('src', 'images/arrowdown.png');
        //     }
        // })
        // .fail(function() {
        //     console.log("error");
        // });

    //其他的股票信息
        $.ajax({
            url: 'http://d.10jqka.com.cn/v2/realhead/hs_' + code + '/last.js?callback=quotebridge_v2_realhead_hs_002354_last',
            type: 'get',
            dataType: 'json',
            contentType: 'application/x-www-form-urlencoded; charset=utf-8'
        }).always(function (r) {
            if (r.responseText != null) {
                var str = r.responseText.split('(')[1].replace(')', '')
                var obj = JSON.parse(str);
                $('.shijinglv').text((obj.items['592920'] / 1).toFixed(2)); //市净率
                $('.zongshizhi').text((obj.items['3541450'] / 100000000).toFixed(2) + '亿'); //总市值
            }
        })

}


function GetQueryString(name) {
    var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)");
    var r = decodeURIComponent(window.location.search.substr(1)).match(reg);
    if (r != null) return unescape(r[2]);
    return null;
}

$(function() {

    /*---初始化股票代码---*/
    var gpCode = GetQueryString('keyword');
    if (gpCode != null && gpCode != "" && gpCode != undefined) {
        cNum = gpCode;
    }

    tick();
    getCodeInfo(code1);
    /*股票代码提示----*/
    AutoComplete.setup({
        "inputElement": "keyword",
        "dataSource": s,
        "displayZoneWidth": 410,
        "maxMatchedItemNumberAllowed": 6,
        "inputEnterCallback": function(obj) {
            //submitOnClick();
        },
        "trClickCallback": function(obj) {}
    });
    AutoComplete.setup({
        "inputElement": "keyword2",
        "dataSource": s,
        "displayZoneWidth": 410,
        "maxMatchedItemNumberAllowed": 6,
        "inputEnterCallback": function(obj) {
            //submitOnClick();
        },
        "trClickCallback": function(obj) {}
    });
    //点击查询
    $('.searchBtn').on('click', function() {
        var newCode = $(this).siblings('.searchInput').val();
        if (newCode) {
            var reg_ = /[-]/
            if (reg_.test(newCode)) {
                newCode = newCode.split('-')[0]
            }
            cNum = newCode;
            getCodeInfo(cNum);
        }
        if (newCode == '') {
            layer.msg('未检测到股票代码或名称');
            return false;
        }
        $('.searchInput').val('');
        $('.zgimg').addClass('tada');
        setTimeout(function() {
            $('.zgimg').removeClass('tada');
        }, 3000)
        $('body,html').animate({ scrollTop: "0" }, 500);

    })


    //滚动插件
    $.fn.extend({
        Scroll: function(opt, callback) {
            //参数初始化
            if (!opt) var opt = {};
            var _this = this.eq(0).find("table:first");
            var lineH = _this.find("tr:first").height(), //获取行高
                line = opt.line ? parseInt(opt.line, 10) : parseInt(this.height() / lineH, 10),
                speed = opt.speed ? parseInt(opt.speed, 10) : 5000, //卷动速度，数值越大，速度越慢（毫秒）
                timer = opt.timer ? parseInt(opt.timer, 10) : 5000; //滚动的时间间隔（毫秒）
            if (line == 0) line = 1;
            var upHeight = 0 - line * lineH;
            //滚动函数
            scrollUp = function() {
                    _this.animate({
                        marginTop: upHeight
                    }, speed, function() {
                        for (i = 1; i <= line; i++) {
                            _this.find("tr:first").appendTo(_this);
                        }
                        _this.css({
                            marginTop: 0
                        });
                    });
                }
                //鼠标事件绑定
            _this.hover(function() {
                clearInterval(timerID);
            }, function() {
                timerID = setInterval("scrollUp()", timer);
            }).mouseout();
        }
    });
    $(document).ready(function() {
        $("#scolltable").Scroll({
            line: 1,
            speed: 500,
            timer: 2500
        });
    });

    //诊股人数增加
    setInterval(function() {
        var penum = parseInt($('#num').text());
        var pe = Math.floor(Math.random() * 5 + 1);
        $('#num').text(penum + pe)
    }, 2500)


});
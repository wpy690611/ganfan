$.fn.extend({
		Scroll:function(opt,callback){
			//参数初始化
			if(!opt) var opt={};
			var _this=this.eq(0).find("table:first");
			var lineH=_this.find("tr:first").height(), //获取行高
			line=opt.line?parseInt(opt.line,10):parseInt(this.height()/lineH,10),
			speed=opt.speed?parseInt(opt.speed,10):5000, //卷动速度，数值越大，速度越慢（毫秒）
			timer=opt.timer?parseInt(opt.timer,10):5000; //滚动的时间间隔（毫秒）
			if(line==0) line=1;
			var upHeight=0-line*lineH;
			//滚动函数
			scrollUp=function(){
				_this.animate({
					marginTop:upHeight
				},speed,function(){
					for(i=1;i<=line;i++){
						_this.find("tr:first").appendTo(_this);
					}
					_this.css({marginTop:0});
				});
			}
			//鼠标事件绑定
			_this.hover(function(){
				clearInterval(timerID);
			},function(){
				timerID=setInterval("scrollUp()",timer);
			}).mouseout();
		}        
	})

//时间变换
function showLocale(objD) {
	var str, colorhead, colorfoot;
	var yy = objD.getYear();
	if(yy < 1900) yy = yy + 1900;
	var MM = objD.getMonth() + 1;
	if(MM < 10) MM = '0' + MM;
	var dd = objD.getDate();
	if(dd < 10) dd = '0' + dd;
	var hh = objD.getHours();
	if(hh < 10) hh = '0' + hh;
	var mm = objD.getMinutes();
	if(mm < 10) mm = '0' + mm;
	var ss = objD.getSeconds();
	if(ss < 10) ss = '0' + ss;
	var ww = objD.getDay();
	if(ww == 0) colorhead = "<font>";
	if(ww > 0 && ww < 7) colorhead = "<font >";
	str = colorhead + yy + "-" + MM + "-" + dd + " &nbsp&nbsp" + hh + ":" + mm + ":" + ss + " ";
	return(str);
}

function tick() {
	var today;
	today = new Date();
	document.getElementById("time").innerHTML = showLocale(today);
	window.setTimeout("tick()", 1000);
}


//股票代码
    function getCodeInfo(code) {
        $.ajax({
                url: 'http://qd.10jqka.com.cn/quote.php?cate=real&type=stock&return=json&callback=showStockData&code=' + code,
                type: 'get',
                dataType: 'jsonp',
                contentType: 'application/x-www-form-urlencoded; charset=utf-8'
            })
            .done(function(r) {
                $('.codeName,.cval a b').html(r.info[code].name); //名称
                $('.gcode').text('( ' + code + ' )'); //代码
                $('.tgName').val(code);//传入后台代码;
                $('.xianjia').text(r.data[code]["10"]); //现价
                $('.zhangdie').text(r.data[code]['264648'].slice(0,-1)); //价格变动
                $('.zhangfu').text(r.data[code]['199112'].slice(0,-1) + '%'); //变动百分比
                $('.zhangting').text(r.data[code]['69']); //涨停
                $('.dieting').text(r.data[code]['70']); //跌停
                $('.jinkai').text(r.data[code]['7']); //今开
                $('.zuigao').text(r.data[code]['8']); //最高
                $('.zuidi').text(r.data[code]['9']); //最低
                $('.zuoshou').text(r.data[code]['6']); //昨收
                $('.chengjiaoliang').text((r.data[code]['13'] / 10000).toFixed(2) + '万'); //成交量
                $('.chengjiaoe').text((r.data[code]['19'] / 100000000).toFixed(2) + '亿'); //成交额
                $('.liutongshizhi').text((r.data[code]['3475914'] / 100000000).toFixed(2) + '亿'); //流通市值
                $('.zhenfu').text((r.data[code]['526792'] / 1).toFixed(2) + '%'); //振幅
                $('.huanshoulv').text((r.data[code]['1968584'] / 1).toFixed(2) + '%'); //换手
                $('.shiyinglv').text((r.data[code]['2034120'] / 1).toFixed(2)); //市盈率（动）

                if (r.data[code]['199112'] >= 0) {
                    $('.zhangdie,.zhangfu,.xianjia').css('color', '#ff0000')
                } else {
                    $('.zhangdie,.zhangfu,.xianjia').css('color', '#1dbf60')

                }

                //停牌
                  if(!r.data[code]['10']){
                      $('.xianjia').text('停牌');
                      $('.zhangfu').text('');
                      $('.zhishu img').css('opacity',0).css('visibility','hidden');
                  }

                setTimeout(function() {
                    getCodeInfo(code)
                }, 100000)
            })
            .fail(function() {
                console.log("error");
            });
             //其他的股票信息
        $.ajax({
            url: 'http://nuff.eastmoney.com/EM_Finance2015TradeInterface/JS.ashx?id='+code+'2&token=4f1862fc3b5e77c150a2b985b12db0fd&cb=jQ&_=1508394368154',
            type: 'get',
            dataType: 'jsonp',
            contentType: 'application/x-www-form-urlencoded; charset=utf-8'
        })
        .done(function(r) {
            console.log(r)
        })
}

    function  jQ(r){
        $('.shijinglv').text((r.Value[43] / 1).toFixed(2)); //市净率
        $('.zongshizhi').text((r.Value[46] / 100000000).toFixed(2) + '亿'); //总市值
    }


function base() {
  $.ajax({
    url: 'http://material.songyutech.com/gp/gettjgp?callback=?',
    type: 'get',
    dataType: 'jsonp',
    error: function (e) {
    },
    success: function (data) {
	var res=$.parseJSON(data);
      $('#table').html('');
      for (var i = 0; i < res.data.length; i++) {
        var reason = res.data[i].SelectedReason.replace("。", "");
        if (reason.length > 12) {
          reason = reason.substr(0, 12) + '...';
        }
        if ((res.data[i].Yield).toFixed(1) > 0) {
          var newTr = ('<tr><td>' + res.data[i].StockCode + '</td><td>' + res.data[i].StockName + '</td><td><span>昨日建议：' + reason + '</span></td><td class="red">今日涨幅：' + (res.data[i].Yield).toFixed(1) + '%</td></tr>')
        } else {
          var newTr = ('<tr><td>' + res.data[i].StockCode + '</td><td>' + res.data[i].StockName + '</td><td><span>昨日建议：' + reason + '</span></td><td class="green">今日涨幅：' + (res.data[i].Yield).toFixed(1) + '%</td></tr>')
        }

        $('#table').append(newTr);
      }
     
    }
  })
}	

function GetQueryString(name)
{
     var reg = new RegExp("(^|&)"+ name +"=([^&]*)(&|$)");
     var r = decodeURIComponent(window.location.search.substr(1)).match(reg);
     if(r!=null)return  unescape(r[2]); return null;
}


//模拟检测
function mnan(){
	$(".mnc span em").width(0);	
	$(".mnc p").html("准备检测...");
	$(".mnc span em").animate({
                width: "25%"
        },700,"",function(){
            $(".mnc p").html("正在通过最小二乘法OLS确定必要报酬率...");
    });
    $(".mnc span em").animate({
                width: "50%"
        },500,"",function(){
            $(".mnc p").html("正在通过VAR系统确认风险值...");
    });
    $(".mnc span em").animate({
                width: "75%"
        },800,"",function(){
            $(".mnc p").html("正在通过量价交易模型...");
    });
	$(".mnc span em").animate({
	                width: "90%"
	        },500,"",function(){
	            $(".mnc p").html("验证手机...");
	    });
    $(".mnc span em").animate({
            width: "100%"
        },500,"",function(){
           $(".mnc p").html("打印结果");
    	});
    }


$(function(){
	
	/*---初始化股票代码---*/
	var gpCode=GetQueryString('gp');
	var mcm = s[Math.floor(Math.random()*s.length)].c;
	if(gpCode!=null && gpCode!="" && gpCode!=undefined){
		cNum=gpCode;
	}else{
		cNum = mcm;
	}
	
	getCodeInfo(cNum);
	base();
	tick();
	
	
	
	
	//自身增加数字
setInterval(function() {
		var n = Math.random() * 15;
		$(".dsjnum i").html(parseInt($(".dsjnum i").html()) + parseInt(n));
}, 2500);
	
	//滚动table
	setTimeout(function(){
		$(".dsjgb1c").Scroll({line:1,speed:500,timer:2500});
	},1000)
	
	//点赞
	$('.dsjgb2 li p .span1').one('click',function(){
		var tv=parseInt($(this).find('.red').text());
		$(this).addClass('on');
		$(this).find('.red').text(tv+1);
		layer.tips('点赞成功',$(this),{tips: [2, '#2596ff'],time: 1000});
	})
	
	/*股票代码提示----*/
				 AutoComplete.setup({
	        		"inputElement": "gp",
	        		"dataSource": s,
	        		"displayZoneWidth": 413,
	        		"maxMatchedItemNumberAllowed": 6,
	        		"inputEnterCallback": function (obj) {
	            	//submitOnClick();
	        		},
	        		"trClickCallback": function (obj) {
        			}
    		});
	//点击查询
    $('.searchBtn').on('click',function(){
        var newCode=$('.searchInput').val();
        if(newCode){
            var reg_=/[-]/
            if (reg_.test(newCode)) {
                newCode=newCode.split('-')[0]
            }
            cNum = newCode;
            getCodeInfo(cNum);
        }
        if(newCode==''){
        	layer.msg('未检测到股票代码或名称');
        	return false;
        }
        $('.searchInput').val('');
        
        
    })


	
})

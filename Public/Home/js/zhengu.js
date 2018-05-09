var successInfo = '您的号码已成功提交！稍后客服人员会在第一时间与您取得联系！';
var checkMobile = "请填写真实的QQ号码!";
var successStockInfo = '您的号码已成功提交！稍后客服人员会在第一时间与您取得联系！';
var visiterUrl = location.href;
var sourceUrl = document.referrer;

/**
 * 检查号码
 *
 * @param phone
 * @param checkMobile
 */
function check_qq(mobiletag, phone) {
    var regPartton = /^[1-9][0-9]{4,9}$/;
    if (!phone || phone == null) {
        artAlertLock("QQ号码不能为空！", "warning");
        $("#" + mobiletag).focus();
        return false;
    } else if (!regPartton.test(phone)) {
        artAlertLock(checkMobile, "warning");
        $("#" + mobiletag).focus();
        return false;
    }
    return true;
}

function artAlertLock(content, icon) {
    var dialog = art.dialog({
        drag : true,
        title : "提示",
        lock : true,
        content : content,
        icon : icon,
        zIndex : 10000,
        ok : function() {
            this.close();
        }
    });
}

function artAlertCallBack(content, icon) {
    var dialog = art.dialog({
        drag : true,
        title : "友情提示",
        lock : true,
        content : content,
        icon : icon,
        zIndex : 10000,
        ok : function() {
        }
    });
}

//提交并关闭并弹出成功提醒
function regeditCloseDiv(subject, hidDivName, showDivName, nametag,mobiletag, nameAlert) {
    var mobile = $("#" + mobiletag).val();
    var flag = check_qq(mobiletag, mobile);
    if (!flag) {
        $("#" + mobiletag).focus();
        return false;
    }
    var kwd = getkwd();
    var stock = $("#stockname").val();
    var data = {
        "kwd" : kwd,
        "stock" : stock,
        "qq" : mobile,
        "qunnum" : QQNum
    }
    $.ajax({
        type : "post",
        url : "/admin/tongji/a",
        data : data,
        dataType : "json",
        success : function(e) {
            $('#' + hidDivName).hide();
            $('#' + showDivName).show();
            $("#" + mobiletag).val("");
        }
    })
    hideiframe();
}

/**
 * 提交
 */
function regedit(subject, nametag, mobiletag, nameAlert) {
    if (typeof (nameAlert) == "undefined" || null == nameAlert
        || "" == nameAlert) {
        nameAlert = "姓名不能为空！";
    }
    if (null != nametag) {
        var name = $("#" + nametag).val();
        if (!name || name == null || name == "") {
            artAlertLock(nameAlert, "warning");
            $("#" + nametag).focus();
            return false;
        }
    }
    var mobile = $("#" + mobiletag).val();
    var flag = check_qq(mobiletag, mobile);
    if (!flag) {
        $("#" + mobiletag).focus();
        return false;
    }
    var data = {
        "mark" : 0,
        "name" : name,
        "qq" : mobile,
        "marketCompany":marketCompany,
        "subject" : subject,
        "visitUrl" : visiterUrl,
        "sourceUrl" : "undefined" == typeof(sourceUrl)?"":sourceUrl
    }
    $.ajax({
        type : "post",
        url : "/index/qregedit.jspx",
        data : data,
        dataType : "json",
        success : function(e) {
            if (e.success == 1) {
                artAlertCallBack(successInfo, "succeed");
                $("#" + nametag).val("");
                $("#" + mobiletag).val("");
            } else if (e.success == 2) {
                artAlertCallBack(successInfo, "warning");
                $("#" + nametag).val("");
                $("#" + mobiletag).val("");
            } else {
                artAlertLock(e.info, "warning");
            }
        }
    })
}

//头条跳转
function targetToSubmit(name,theme){
    var visURL = visiterUrl.replace(/&/g,"!--!");
    var sourURL = visiterUrl.replace(/&/g,"!--!");
    var stockname = escape(name);
    var themename = escape(theme);
    var url = "/html/source/sjzy.html?visURL="+visURL+"&sourURL="+sourURL+"&stockname="+stockname+"&themename="+themename;
    location.href=url;
}

//获取关键词
function getkwd(){
    var str = document.referrer;
    var num1 = str.indexOf("q=");
    var allwd = decodeURI(str.substring(num1));
    var num2 = allwd.indexOf("&");
    if( num2 == -1 ){
        var kwd = allwd.substring(2);
    }else{
        var kwd = allwd.substring(2,num2);
    }
    return kwd;
}
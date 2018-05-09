<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {

      public  function search_word_from() {
        $referer = isset($_SERVER['HTTP_REFERER'])?$_SERVER['HTTP_REFERER']:'';
        if(strstr( $referer, 'baidu.com')){ //百度
            preg_match( "|baidu.+wd=([^\\&]*)|is", $referer, $tmp );
            $keyword = urldecode( $tmp[1] );
            $from = 'baidu';
        }elseif(strstr( $referer, 'google.com') or strstr( $referer, 'google.cn')){ //谷歌
            preg_match( "|google.+q=([^\\&]*)|is", $referer, $tmp );
            $keyword = urldecode( $tmp[1] );
            $from = 'google';
        }elseif(strstr( $referer, 'so.com')){ //360搜索
            preg_match( "|so.+q=([^\\&]*)|is", $referer, $tmp );
            $keyword = urldecode( $tmp[1] );
            $from = '360'; 
        }elseif(strstr( $referer, 'sogou.com')){ //搜狗
            preg_match( "|sogou.com.+query=([^\\&]*)|is", $referer, $tmp );
            $keyword = urldecode( $tmp[1] );
            $from = 'sogou';   
        }elseif(strstr( $referer, 'soso.com')){ //搜搜
            preg_match( "|soso.com.+w=([^\\&]*)|is", $referer, $tmp );
            $keyword = urldecode( $tmp[1] );
            $from = 'soso';
        }else {
            $keyword ='';
            $from = '';
        }
     
        return array('keyword'=>$keyword,'from'=>$from);
    }


    // public function index(){
    //     $this->display();
    // }
    public function index()
    {
        if ($_POST) {
            //存在POST提交的数据
            $form_data = array(
                'phone' => $_POST['phone'],
                'name' => $_POST['name'],
                'stock'=>$_POST['stock']
            );
            if (!$form_data['phone']) {
                $this->error('很抱歉，无法帮您获取信息，请输入正确手机号!');
            }
             if(!preg_match('/^1[34578]{1}\d{9}$/',$form_data['phone'])){
                $this->error('很抱歉，请输入正确手机号!');
            }
            $phone=$form_data['phone'];
            $phone=M('form')->where("phone=$phone")->find();
            if (!empty($phone)) {
            	$this->error('你好，您的号码已注册，请勿重复提交，稍后会有客服与您联系!');
            }
            //搜索关键字获取
                $this->search_word_from();
                console.log($word['keyword']);
                if(!empty($word['keyword'])){
                    $form_data['keyword']=$word['keyword'];
                }
            $form_data['url'] = $_SERVER['HTTP_HOST'];//获取域名或主机地址             
            $form_data['ctime']=date('Y-m-d H:i:s',time());
            $add_result=M('form')->data($form_data)->add();
            // alert('信息提交成功，稍后会有客服与您联系，请注意接听！') ;
            $this->success('信息提交成功，稍后会有客服与您联系，请注意接听！');
            return 1;
        }else{
            $this->display('index');
        }

    }
}
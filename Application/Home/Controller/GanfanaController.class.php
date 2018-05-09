<?php
namespace Home\Controller;
use Think\Controller;
class GanfanaController extends Controller {
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
            $phone=$form_data['phone'];
            $phone=M('form')->where("phone=$phone")->find();
            if (!empty($phone)) {
                $this->error('你好，您的号码已注册，请勿重复提交，稍后会有客服与您联系!');
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
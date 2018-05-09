<?php

namespace Admin\Controller;

use Think\Controller;

/**
 *
 */
class WxController extends Controller
{
    public function index()
    {
//        die;
        if (IS_POST) {
            //接收表单中提交的数据
            $wx_form_data['name'] =I('name');
//            $wx_form_data['productTitle2'] = (string)I('productTitle2');
            $wx_form_data['wx'] = I('wx');
            $wx_form_data['wxphoto'] = self::Upload($_FILES['url']);
            // dump($wx_form_data);
            if ($wx_form_data['name']==null || $wx_form_data['wx']==null) {
                # code...
                $this->error('请将需要推广的微信信息填写完整');
            }
            //将表单数据写入数据库
            $wx_form_data['state']="上线";
            // dump($wx_form_data);
            $add_result = M('wx')
                ->data($wx_form_data)
                ->add();
            if ($add_result) {
                //success/error不给参数2，则默认跳转到上次页面
                //不给参数3，成功1秒后跳转，错误3秒后跳转
                $this->success('添加推广微信成功');
            } else {
                $this->error('添加推广微信失败，请重新添加');
            }
        } else {
//            dump(1234568);
            //没有post提交数据，显示模版
            $this->display();
        }
    }
    //wxlist 显示与操作
    public function wxlist(){
        $wx_data=M('wx')->select();
         // dump($wx_data);
        $this->assign('wxlist',$wx_data);
        $this->display();
    }
    //上下线操作
    public function upOrDown(){

    }

    //上传文件
    public function Upload($file)
    {
        $upload = new \Think\Upload();
        // 实例化上传类
        $upload->maxSize = 3145728;
        // 设置附件上传大小
        $upload->exts = array('jpg','jpeg','gif','png');
        // 设置附件上传类型
        $upload->savePath = '';
        // 设置附件上传目录
        //上传文件
        $info = $upload->upload();
        if (!$info) {
            // 上传错误提示错误信息
            //return $this->error($upload->getError());
            return $this->error($upload->getError());
        } else {
            // 上传成功 获取上传文件信息
            foreach ($info as $file) {
                return $file['savepath'] . $file['savename'];
            }
        }
    }
}
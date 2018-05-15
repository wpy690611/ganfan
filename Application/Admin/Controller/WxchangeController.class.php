<?php
namespace Admin\Controller;
use Think\Controller;
class WxchangeController extends Controller
{
    //微信信息修改
    public function wxchange(){     
        if (IS_POST) {
            //接收表单中提交的数据
            $wx_form_data['name'] =I('name');
//            $wx_form_data['productTitle2'] = (string)I('productTitle2');
            $wx_form_data['wx'] = I('wx');
            $id = I('id');
            $mediaid=$wx_form_data['mediaid']=I('mediaid');
            // dump($wx_form_data);
            if ($wx_form_data['name']==null || $wx_form_data['wx']==null) {
                # code...
                $this->error('请将需要推广的微信信息填写完整');
            }
            //将表单数据写入数据库
            // $wx_form_data['state']="下线";
            
            if ($mediaid ==1) {
                $wx_form_data['mediaid']="百度";
            }else{
                $wx_form_data['mediaid']="搜狗";
            }
            
            dump($wx_form_data);
            $add_result = M('wx')->where("id='$id'")
                ->save($wx_form_data);
            if ($add_result) {
                //success/error不给参数2，则默认跳转到上次页面
                //不给参数3，成功1秒后跳转，错误3秒后跳转
                $this->success('修改推广微信成功');
            } else {
                $this->error('修改推广微信失败，请重新修改');
            }
        } else {
        $id=I('id');
        $wxchange=M('wx')->where("id ='$id'")->find();
        $this->assign('wxchange',$wxchange);
        $this->display('Wxchange/wxchange');
        }
    }
}
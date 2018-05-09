<?php

namespace Admin\Controller;

use Think\Controller;

/**
 *
 */
class ProductController extends Controller
{
    public function productAdd()
    {
//        die;
        if (IS_POST) {
            //接收表单中提交的数据
            $uid=session('id');
            $product_form_data['order_title'] = (string)I('productTitle');
//            $product_form_data['productTitle2'] = (string)I('productTitle2');
            $product_form_data['media_id'] = (string)I('mediaId');
            $mediaId=I('mediaId');
            $product_form_data['mediaid2'] = (string)I('mediaId2');
            $product_form_data['mediaid3'] = (string)I('mediaId3');
            $product_form_data['addtime'] = date('Y-m-d H:i:s',time());
//            dump($product_form_data);
//            dump($add_result_s);
           //product_model = D('Product');
            $product_form_data['url'] = self::Upload($_FILES['file']);
            //将表单数据写入数据库
            //添加uid
            $product_form_data['uid'] = $uid;
            // 返回值是自增长的id，如果失败返回false
            $add_result = M('product')
                ->data($product_form_data)
                ->add();


            //查询出对应的媒体价格，
              $media_price=D('media')->where("id=$mediaId")->field("media_price")->find();
//              dump($media_price);
              //查询finance 表中的个人余额
              $finance=D('finance')->where("uid=$uid")->order("balance ")->field("balance")->find();
//              dump($finance);
            $newFinance['balance']=$finance['balance'] - $media_price['media_price'];
            $newFinance['uid']=$uid;
            $newFinance['addtime']=date('Y-m-d H:i:s',time());

//              dump($newFinance);
          //插入 最后价格在finance 表中
            $newFinance=M('finance')->data($newFinance)->add('');
//            dump($newFinance);
//            die;
//            $media_price_data['uid']=(string)session('id');
//            $media_price_data['balance']=(string)
//            $media_price_data['expense']=
//            $media_price_data['media_id']=(string)$mediaId;
//           $add_meida_price=M('finance')->data($media_price)->add("expense");

//            $mediaResult=M('media')->where("id='$mediaTd'")->select();
////                        ->join("qpp_media m on qpp_product.mediaid=m.id")
////                        ->order("id desc")
////                        ->limit()
////                        ->field("qpp_product.*,m.media,m.media_price")
////                        ->select();
//            dump($mediaResult);
            if ($add_result || $newFinance) {
                //success/error不给参数2，则默认跳转到上次页面
                //不给参数3，成功1秒后跳转，错误3秒后跳转
                $this->success('添加订单成功');
            } else {
                $this->error('添加订单失败');
            }
        } else {
//            dump(1234568);
            //没有post提交数据，显示模版
            $this->display();
        }
    }

    //上传文件
    public function Upload($file)
    {
        $upload = new \Think\Upload();
        // 实例化上传类
        $upload->maxSize = 3145728;
        // 设置附件上传大小
        $upload->exts = array('doc','docx');
        // 设置附件上传类型
        $upload->savePath = './Uploads/';
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
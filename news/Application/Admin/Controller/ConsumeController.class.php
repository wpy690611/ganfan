<?php
/**
 * Created by PhpStorm.
 * User: a
 * Date: 2018/3/20
 * Time: 10:39
 */
namespace Admin\Controller;
use Think\Controller;
class ConsumeController extends Controller
{
public function consume(){
    //获取当前用户的id，根据其id 查询其所创建的订单
    $id=SESSION('id');
   // $consume=D('product')->where("uid='$id'")->select();
    //dump($consume);
    $consume=M('product')->where("uid='$id'")
        ->join("qpp_media m on qpp_product.media_id=m.id")
//        ->join("qpp_finance f on qpp_product.id=f.id")
        ->order("id desc")
        ->limit()
        ->field("qpp_product.*,m.media,m.media_price")
        ->select();
    //dump($consume);
    //显示余额，先请求出balance最后一个数据，再从数组中拿出balance的值赋值给$balance
    $balance=D('finance')->where("uid=$id")->order("Id desc")->field("balance")->find();
    $balance=$balance['balance'];
    $this->assign('balance',$balance);
//    dump($balance);
    $this->assign('consume', $consume);
    $this->display();

//    $data['data']=$this->where($map)
//        ->order("$orderby $orderway")
//        ->field("a.*,b.brand_name,c.cat_name")
//        ->alias('a')
//        ->join('LEFT JOIN __BRAND__ b ON a.brand_id=b.id')
//        ->join('LEFT JOIN __CATEGORY__ c ON a.cat_id=c.id')
//        ->select();

  }
}
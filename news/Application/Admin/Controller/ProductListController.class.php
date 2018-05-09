<?php
namespace Admin\Controller;

use Think\Controller;
class ProductListController extends Controller
{
    function  productList(){
        //1. 从product表中读取数据
        $id=session('id');
//        $productList = D('product')->where("uid='$uid'")->select();
        //dump($productList);
        //连表查询费用跟平台
        $consume=M('product')->where("uid='$id'")
            ->join("qpp_media m on qpp_product.media_id=m.id")
            //->join("qpp_finance f on qpp_product.id=f.id")
            ->order("id desc")
            ->limit()
            ->field("qpp_product.*,m.media,m.media_price")
            ->select();
//        dump($consume);

        //2. 将商品数据分配到模板
        $this->assign('productList', $consume);
        $this->display();

//        $User = M('product');
//        $productList = $User->select();
//        //dump($list);
//        $this->assign('productList',$productList);
//        $this->display();

    }
}
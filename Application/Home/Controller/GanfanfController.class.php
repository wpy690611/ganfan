<?php
namespace Home\Controller;
use Think\Controller;
class GanfanfController extends Controller {
    public function index(){
    	$wx_data=M('wx')->where("state='上线'")->find();
       // dump($wx_data);

        //2. 将数据分配到模板
        $this->assign('wx_data', $wx_data);
        $this->display();
    }
    
}

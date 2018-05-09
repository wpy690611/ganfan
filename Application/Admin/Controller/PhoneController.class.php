<?php
namespace Admin\Controller;

use Think\Controller;

class PhoneController extends Controller
{
    public function phone(){
        $data=M('form')->select();
        $this->assign('phone', $data);
        $this->display();
    }
}
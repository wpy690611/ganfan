<?php

namespace Admin\Controller;

use Think\Controller;

class IndexController extends Controller
{
    public function index()
    {
        return $this->display();//渲染首页
    }
//    public function login(){
//        if(IS_POST){
//            //1. 接收表单提交的用户名和密码
//            $name = I('post.username');
//            $pwd = I('post.password');
//            //2. 检查用户名和密码的匹配性
//            $manager_model = D('Manager');
//            $check_result = $manager_model->checkLogin($name, $pwd);
//
//            if($check_result){
//                $this->success('登录成功', U('Index/index'), 3);
//            } else {
//                $this->error('用户名或密码错误');
//            }
//        } else {
//            $this->display();
//        }

}
//}
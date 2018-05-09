<?php

namespace Admin\Controller;

use Think\Controller;

class PublicController extends Controller
{
    public function login()
    {
        $this->display();//渲染首页
    }

    public function checkLogin()
    {
        $username = I("username", "", "trim");
        $password = I("password", "", "");
        //2. 检查用户名和密码的匹配性
        $return = $this->checkPassword($username, $password);
        if (!$return) {
            $this->redirect("{:U('Index/index')}");
        } else {
            $this->redirect("login");
        }

    }

    public function checkPassword($username, $password)
    {
        $map['username'] = $username;
        $admin = M('admin')->where($map)->find();
        if ($admin['password'] === $password) {
            return $admin;
        } else {
            return false;
        }
    }

    public function logout()
    {
        session('admin_id', null);
        session('admin_username', null);
        $this->redirect("login");
    }
}

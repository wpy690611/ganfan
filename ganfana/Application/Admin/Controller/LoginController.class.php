<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/4/28
 * Time: 23:50
 */
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function index(){
        $this->display();
    }
    public function Login()
    {
//        var_dump('123');
        if (IS_POST) {
//            用户名
            $username = (string)I('post.username');
//            密码
            $password = (string)I('post.password');
//            dump($username);
//            dump($password);
            //2. 检查用户名和密码的匹配性
            $result = $result = M('admin')
                ->where("login_name='$username'")
                ->find();
//            dump($result);
//            die;
            if ($username === $result['login_name'] && $password === $result['login_password']) {
                session('id', $result['id']);
                $this->success('登录成功', U('Index/index'), 0);
                die;
            } else {
                $this->error('登录失败,请重新登录！');
            }
        } else {
            $this->display('login');
        }
    }
    public function logout()
    {
        session('admin_id', null);
        session('admin_username', null);
        $this->redirect("login");
    }
}
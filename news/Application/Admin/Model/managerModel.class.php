<?php
namespace Admin\Model;
use Think\Model;
class ManagerModel extends Model{

    function checkLogin($name, $pwd){
        //使用 saltPwd函数加密密码
        $pwd = saltPwd($pwd);
        //① 根据用户查询，用户名必须唯一，防SQL注入
        $mg_info = $this -> where("qpp_user='$name'") -> find();
        if(empty($mg_info)){
            return false;
        } else {
            //检查表单接收的密码和用户输入的密码的匹配性
            if($pwd == $mg_info['mg_pwd']){
                //登录成功，保存session
                session('mgid', $mg_info['mg_id']);
                session('mgname', $name);
                //session('mgroleid', $mg_info['mg_roleid']);
                //更新最后登录时间
                $arr = array(
                    'mg_id' => $mg_info['mg_id'],
                    'mg_time' => time()
                );
                $this -> save($arr);
                //跳转
                return true;
            } else {
                return false;
            }
        }
    }

}
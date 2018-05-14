<?php
namespace Admin\Controller;
use Think\Controller;
class BaseController extends Controller{
  public function _initialize()
  {
    session_start();
    $adminId     = session('admin_id');         // 管理员用户id
    if(!isset($adminId))
    {
      $this->success("您还没有登录",__ADMIN__.'/Login/login');
      die;
    }else{
      R('Public/auth', array($adminId));
    }
  }
}
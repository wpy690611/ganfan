<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	$admin_id=session('admin_id');
    	if(isset($admin_id)){
        	$this->display();
    	}else{
    		$this->redirect('Login/login');
    	}
    }
}
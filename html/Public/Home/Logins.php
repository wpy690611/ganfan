<?php
 
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/*
  2014-7-13
  用户登录
 */

class Logins extends CI_Controller {

    public $data = array();
    public $title = '';
    public $me = array();

    function __construct() {
        parent::__construct();
           
	 
        $this->load->model('wxf_user', 'login');
        $this->load->model('Common');

        $this->me = $this->login->Islogin(1);
        
    }

    public function index() {
        header('Access-Control-Allow-Origin:*');
        $phone = $this->input->post('phone');
        $type = $this->input->post('type');
        $from = $this->input->post('stock');
        $data["data"]=$_POST;
        $time = date("Y-m-d H:i:s",time());
        if(strlen($phone) == "11"){
            $rs = $this->db->query("INSERT INTO z_gp_users (`mobile`,`type`,`from`,`time`) VALUES ('".$phone."','".$type."','".$from."',NOW())");
            $data["code"] = 200;
            //$data["msg"] = $from;
        }else{
            $data["code"] = 99;
            $data["msg"] = "长度必须是11位";
        }
        echo json_encode($data);
        exit;
    }



    
	public  function  qcode(){
		  $this->load->model('Datecode');

          $this->Datecode->doimg();
          $_SESSION['authnum_session'] = $this->Datecode->getCode();//验证码保存到SESSION中
		 
		
		
	}
	
	
	
	//提交登陆
    public function PostLogin() {

        $username = $this->input->post('username');

        $password = $this->input->post('password');

      
        $verify = $this->input->post('verify');

        $code = $this->input->post('code');

        $result = $this->login->CheckLogin($username, $password, $code, $verify);

        echo json_encode($result);

        exit;
    }

    //退出
    public function out() {

        $this->load->Library('utility');

        unset($_SESSION['username']);
        unset($_SESSION['password']);
        unset($_SESSION['adminId']);
        /* 	   unset($_SESSION['website']);
          unset($_SESSION['webkey']); */

        $this->utility->tsgGoHref('退出成功!', '/login');
    }

    function getVerifys() {

        $this->load->database();
        $phone = $this->input->post('phone');
     
        if ($phone) {
            //15分钟之后才能获取验证码
            $rs = $this->db->query("select `addtime` from  `app_verify`  where  `mobile`=" . $phone . "    order  by  id  desc")->row();
            if (time() - strtotime($rs->addtime) < 10 * 60) {
                echo -2;
                exit;
            }
            $scode = rand(1000, 9999);
            //$scode = 1234;
            
			
			$this->Common->sendsmsok(1,$phone, $scode );
			$this->load->Library('utility');
		    $newscode=$this->utility->authCode($scode,'ENCODE');
            $conf = array();
            $conf['mobile'] =$phone;
            $conf['code'] = $newscode;
            $conf['addtime'] = date('Y-m-d H:i:s');
            $conf['adminId'] = 1;
            $conf['username'] = 'admin';
            $this->db->insert("app_verify", $conf);
            echo '1';
            exit;
        }
        echo 0;
        exit;
    }

}

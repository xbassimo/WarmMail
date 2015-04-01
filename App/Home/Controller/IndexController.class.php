<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends BaseController {
    public function indexAction(){
		$username = session('username');
		
		$where['username'] = session('username');
		$res = D('Account')->where($where)->select();
		if($res) {
			echo "windows update";
			echo "windows update";
			echo "windows update";
			echo "Linux update";
			echo "Linux update 3";
			echo "Linux update 4";
			
		}else {
			$this->redirect('Home/Account/init', 3, '请先设置一个邮箱账号');
		}
		$this->assign('title','Warm Mail -- View Mailbox');
		$this->assign('is_login',1);
    	$this->display();
    	
    }
	
}

<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {
    // 
	public function indexAction(){
		$this->assign('title','Warm Mail');
		$this->assign('is_login',0);
		$this->display();
		
	}
	public function chkLoginAction() {
		$username = I('post.username');
		$passwd = I('post.passwd');
		if('' == $username || '' == $passwd) {
			$this->redirect('/Home/Login/index');
		}

		$user = M('Users');
		$where = array(
				'username' => $username,
				'password' => sha1($passwd)
				);
		$data = $user->where($where)->select();
		if(empty($data)) {
			$this->error('没有相关用户信息,请检查输入信息！',U('/Home/Login/index'),3);
		}else {
			session('username',$username);
			session('isLogin',1);
			$account = D('Account');
			$result = $account->where("username='%s'", $username)->find();
			if(empty($result)) {
				$this->success('正在跳转到首页....',U('/Home/Account/init'),3);
			}else {
				$this->success('正在跳转到首页....',U('/Home/Index/index'),3);
			}
		}
	}
	// 用户退出，清楚session信息，网页跳转到登录页面
	public function logoutAction() {
		session(null);
		$this->redirect('/Home/Login/index');
	}
}

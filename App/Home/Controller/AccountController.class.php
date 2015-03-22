<?php
namespace Home\Controller;
use Think\Controller;
class AccountController extends BaseController {
	
	public function initAction(){

		$this->assign('title','Warm Mail - Account Initialization');
		$this->assign('is_login',1);
		$this->assign('init',1);
    	$this->display();
    	
    }
	public function setupAction(){
		
		$is_chk = 0;
		$account_data = I('post.');
		foreach($account_data as $key => $val) {
			$val = trim($val);
			if('accountid' != $key && empty($val) && '0' !== $val) {
				break;
			}else{
				$account_data[$key] = $val;
				$is_chk = 1;
			}
		}
		
		if(1 == $is_chk) {
			try{
				if(verify_remote_info($account_data['server'], $account_data['port'],$account_data['remoteuser'],$account_data['remotepassword'], $account_data['type'])) {
					$data = array(
									'username' => session('username'),
									'server' => $account_data['server'], 
									'port' => $account_data['port'], 
									'type' => strtoupper($account_data['type']), 
									'remoteuser' => $account_data['remoteuser'], 
							    	'remotepassword' => $account_data['remotepassword']
								);
					if(empty($account_data['account_id'])) {
						// insert					
						D('Account')->data($data)->add();
					}else {
						// update
						D('Account')->where('accountid='.$account_data['port'])->save($data);
					}
					$this->success('恭喜你！设置成功！', U('Home/Account/list'), 3);
				}else {
					$this->error('验证邮箱失败！请检查后重新设置', U('Home/Account/list'), 3);
				}
			}catch(Exception $e){
				$this->error('连接异常，请检查后重新输入', U('Home/Account/list'));
			}
		
		}

		if(0 == $is_chk) {
				$this->error('输入数据有误，请检查后重新输入', U('Home/Account/list'), 3);
		}
		
	}

	public function  listAction() {
		$this->assign('title','Warm Mail - Account List');
		$where['username'] = session('username');
		$res = D('Account')->where($where)->select();
		if($res) {
			$this->assign('account_info',$res);
		}else {
			$this->redirect('Home/Account/init');
		}
		$this->assign('is_login',1);
    	$this->display();
	}

	public function  displayAction() {
		$this->assign('title','Warm Mail - Display Account');
		$where['accountid'] = I('get.account_id');
		$res = D('Account')->where($where)->find();
		if($res) {
			$this->assign('account_info',$res);
		}else {
			$this->error('账号不存在！请先设置信息', U('/Home/Account/init'), 3);
		}
		$this->assign('is_login',1);
		$this->assign('init',0);
    	$this->display('init');
	}

	// 删除账号
	public function deleteAction() {
		$account_id = I('post.accountid');
		if(!empty($account_id)) {
			D('Account')->delete($account_id) ? $this->success('删除账号成功！', U('Home/Account/list'), 3) : $this->error('删除账号失败', U('Home/Account/list'), 3);
		}else {
			$this->error('删除账号失败', U('Home/Account/list'), 3);
		}
	}
}

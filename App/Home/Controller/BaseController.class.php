<?php
namespace Home\Controller;
use Think\Controller;
class BaseController extends Controller {
    public function _initialize() {
		// 在基础父类中设置 身份认证机制
		$username = I('session.username');
		$isLogin = I('session.isLogin');
		if('' == $username || 0 == $isLogin) {
			$this->error('请先登录网站！',U('/Home/Login/index'), 3);
		}
    }
}

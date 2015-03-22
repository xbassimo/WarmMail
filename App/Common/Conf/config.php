<?php
return array(
	//'配置项'=>'配置值'
	'ACTION_SUFFIX'         =>  'Action', // 操作方法后缀
	// 显示页面Trace信息
	'SHOW_PAGE_TRACE' =>true, 
	'LAYOUT_ON'=>true,
	'LAYOUT_NAME'=>'templateBase',

	//数据库配置信息
	'DB_TYPE'   => 'mysql', // 数据库类型
	'DB_HOST'   => 'localhost', // 服务器地址
	'DB_NAME'   => 'mail', // 数据库名
	'DB_USER'   => 'mail', // 用户名
	'DB_PWD'    => 'password', // 密码
	'DB_PORT'   => 3306, // 端口
	'DB_PREFIX' => '', // 数据库表前缀 
	'DB_CHARSET'=> 'utf8', // 字符集
	'DB_DEBUG'  =>  TRUE, // 数据库调试模式 开启后可以记录SQL日志 3.2.3新增
	'TMPL_PARSE_STRING'  =>array(
     	'__JS__'     => __ROOT__.'/Public/js', // 增加新的JS类库路径替换规则
     	'__CSS__'    => __ROOT__.'/Public/css', // 增加新的CSS类库路径替换规则
     	'__IMG__'    => __ROOT__.'/Public/images', // 增加新的images类库路径替换规则
     	'__UPLOAD__' => __ROOT__.'/Uploads', // 增加新的上传路径替换规则
	)
	
);

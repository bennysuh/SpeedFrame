<?php
$config['errorCodeMessageList'] = array(
	'default' => '无法与服务器接口取得通讯，请检查您的网络是否异常',
	'notLogin' => '您还未登录，请登录后重新尝试' ,
	'custom' => '{custom}',
	'user_exist' => '您创建的用户名已经存在，请重新填写用户名',

	
	'0000001' => '服务器无法处理您的请求',
	'0000002' => '您的请求中存在非法异常参数',
	'0000003' => '您的请求中缺少接口所需要的参数',


	// access/home
	'0000004' => '无法引用资源：{error_access}，请检查引用路径后重试',
	'0000005' => '未能找到资源：{error_access}，请检查引用路径后重试',


	// api -> admin_user -> login
	'0000006' => '您输入的用户名不存在，请检查后重新输入',
	
);
$config['successCodeMessageList'] = array(
	'default' => '恭喜您，您的请求服务器已处理成功',

);
<?php
/**
 * SpeedFrame 框架全局常用通用函数集合
 * From : Tocurd
 * Create Time : 2016年10月29日 09:40:15
 * Update Time : 2016年10月29日 09:40:30
 */
class SpeedFrame{
	static public $CI;
	public function __construct(){
		self::$CI = & get_instance();
	}
	







	/**
	 * 网站通用参数获取函数
	 * @param  array  $params [description]
	 * @param  string $method [description]
	 * @return [type]         [description]
	 */
	static public function params($params = array() , $method = 'POST'){
		$params_list = strtoupper($method) === 'POST' ? self::$CI->input->post(NULL , TRUE) : self::$CI->input->get(NULL , TRUE);
		foreach ($params as $key => $value){
			$params_value = is_numeric($key) ? $value : $key;
			if( ! isset($params_list[$params_value])) self::end(false , '0000003');

			$return_params[$params_value] = !is_numeric($key) & $value == false ? $params_list[$params_value] : htmlspecialchars($params_list[$params_value]);
		}
		return $params_list;
	}



	/**
	 * 网站通用请求结束接口
	 * @param  boolean $state     [description]
	 * @param  [type]  $errorCode [description]
	 * @return [type]             [description]
	 */
	static public function end($state = true , $messageCode = 'default' , $other = array()){
		$CodeMessageList = self::$CI->config->item(
			$state ? 'successMessageList' : 'errorCodeMessageList'
		);
		if(!$state){
			header('HTTP/1.1 404 Service Temporarily Unavailable');
		}
		if( ! isset($CodeMessageList[$messageCode])) $messageCode = 'default';
		$message = $CodeMessageList[$messageCode];
		foreach ($other as $key => $value) {
			$message = str_replace("{{$key}}" , $value , $CodeMessageList[$messageCode]);
		}
		exit(json_encode(array(
			'state' => $state , 
			'message' => $message ,
			'requestTime' => time() , 
			'result' => $other
		)));
	}
}
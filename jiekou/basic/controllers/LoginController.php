<?php
namespace app\controllers;

use Yii;

use yii\web\Controller;

class LoginController extends Controller{
	public function actionLogin(){
		return $this->renderPartial('login');
	}

	public function actionLogin_pro(){
			/*$arr=array('a'=>'b','c'=>'d');
			foreach($arr as $key=>$val){
				$str=$key."&".$val;
			}
			//$str=$arr['a'].'&'.$arr['c'];
			print_r($str);
		die;
*/
		//用户唯一身份值
		$api="la3sdg6jikld45hj4lk7j65lljjhj3gf";
		//接收数据
		$request=\Yii::$app->request;
		$data=$request->post();		
		//删除token
		unset($data['_csrf']);
		//去空
		foreach($data as $key=>$val){
			if($val==""){
				unset($data[$key]);
			}
		}
		//排序
		ksort($data);		
		//转换成字符串
		$chardata=implode("",$data);		
		//序列化  a:2:{s:3:"pwd";s:6:"123456";s:5:"uname";s:6:"小张";}
		$serdata=serialize($data);
		//加密
		$token=base64_encode(MD5(md5($chardata.$api)));
		//print_r($token);die;
		$url="http://localhost/November/jiekou/laravel-v/public/login/login_pro?token=".$token."&data=".$serdata."&time=".time(); 
		//print_r($url);die;
		$arr= file_get_contents($url);
		//echo $json;die;
		//把记录存入一个文件 默认在public中创建一个文件,如果不存在会新建一个.
		$file  = 'log.txt';
                if($f  = file_put_contents($file,$arr,FILE_APPEND)){
                // 这个函数支持版本(PHP 5) 
                   // echo "写入成功。<br />";                  
                }

		$arr = json_decode($arr,true);
		//var_dump($arr);die;
		if($arr['return'] == 2){
			$url = $_SERVER["HTTP_REFERER"];
			echo "<script>alert('登录超时'); location.href='".$url."'</script>";

		}else if($arr['return'] == 'success'){
			echo "ok";

		}else if($arr['return']=='0'){
			$url = $_SERVER["HTTP_REFERER"];
			echo "<script>alert('token验证失败'); location.href='".$url."'</script>";

		}else if($arr['return']=='error_name'){
			$url = $_SERVER["HTTP_REFERER"];
			echo "<script>alert('用户名不存在'); location.href='".$url."'</script>";

		}else if($arr['return']=='error_pwd'){
			$url = $_SERVER["HTTP_REFERER"];
			echo "<script>alert('密码错误'); location.href='".$url."'</script>";

		}
	}
}





?>
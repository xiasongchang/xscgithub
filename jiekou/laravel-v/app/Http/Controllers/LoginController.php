<?php
namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use DB;  
use Log;  
use App\Http\Controllers\Session;  
use Input;
use Request;


class LoginController extends Controller{
	
	/*
	接口登录
	 */
	public function login_pro(){
		//用户唯一身份值
		$api="la3sdg6jikld45hj4lk7j65lljjhj3gf";
		$token = Request::input("token");//接受token
		$data = Request::input("data");//接受数据
		$lotime = Request::input("time");//接收时间
		//print_r($lotime);die;		
		//反列化 转化为数组  Array ( [pwd] => 123456 [uname] => 小张 ) 
		$userdata=unserialize($data);
		//print_r($userdata);die;
		//转化成字符串
		$char=implode($userdata);
		//和当前时间进行判断
		$nowtime=time();
		//加密
		$posttoken=base64_encode(MD5(md5($char.$api)));
		//密码加密
		$userdata['pwd']=md5($userdata['pwd']);
		//判断时间
		if($nowtime-$lotime<120){
			//判断tonken
			if($posttoken === $token){
				$res=DB::table("yuekao")->where("name",$userdata['uname'])->first();
				//print_r($res);die;
				//判断用户名
				if($res){
					//判断密码
					if(md5($res['pwd']) == $userdata['pwd']){
						//登录成功
						$result['return']="success";
						return $result;
					}else{
						//密码错误
						$result['return']="error_pwd";
						return $result;
					}

				}else{
					//用户名不对
					$result['return']="error_name";
					return $result;
				}
				
			}else{
				//token验证失败
				$result['return']="0";
				return $result;
			}
		}else{
			//超时
			$result['return']="2";
			return $result;
		}

		//print_r($userdata);
		
		

	}
}

?>
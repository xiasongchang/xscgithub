<?php
class Response{
    /*
    *按json方式输出数据
    *@param integer $code 状态码
    *@param string $message 提示信息
    *@param array $data 数据
    */
        public static function json($code,$message='',$data=array())
        {
            if(!is_numeric($code)){
                return "";
            }
            $result = array(
                'code'=>$code,
                'message'=>$message,
                'data'=>$data
            );
            echo json_encode($result);
        }

         /*
    *模拟post提交
    *@param integer $code 状态码
    *@param string $message 提示信息
    *@param array $data 数据
    */
        public static function urlPost($url,$method)
        {
            $ch = curl_init();   //1.初始化  
            curl_setopt($ch, CURLOPT_URL, $url); //2.请求地址  
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);//3.请求方式  
            //4.参数如下  
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);//https  
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);  
            curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (compatible; MSIE 5.01; Windows NT 5.0)');//模拟浏览器  
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);  
            curl_setopt($ch, CURLOPT_AUTOREFERER, 1);  
                curl_setopt($ch, CURLOPT_HTTPHEADER,array('Accept-Encoding: gzip, deflate'));//gzip解压内容  
                curl_setopt($ch, CURLOPT_ENCODING, 'gzip,deflate');  
              
            if($method=="POST"){//5.post方式的时候添加数据  
                curl_setopt($ch, CURLOPT_POSTFIELDS, $data);  
            }  
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);  
            $tmpInfo = curl_exec($ch);//6.执行  
          
            if (curl_errno($ch)) {//7.如果出错  
                return curl_error($ch);  
            }  
            curl_close($ch);//8.关闭  
            return $tmpInfo;
        }

       
}

?>
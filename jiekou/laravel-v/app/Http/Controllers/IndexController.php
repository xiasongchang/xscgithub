<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Response;
use Illuminate\Support\Facades\Input;
use Memcache;
class IndexController extends Controller
{
    /*
    引用json方式输出数据 封装的类
     */
    public function respon($data)
    {

        //运行终端，cd到项目路径，执行 composer dumpautoload  
        require_once('../app/libs/Response/Response.php');
        return Response::json("200","success",$data);
        
    }
    /*
    去空的公共方法
     */
    public function nulls($arr){
        foreach ($arr as $k => $v) {
            if($v==""){
                unset($arr[$k]);                
            }
        }
         return $arr;
    }
    /*
    销毁 callback 公共方法
     */
    public function unsets($arr){
        unset($arr['callback']);
        unset($arr['_']);
        return $arr;
    }
    /*
    memcache 缓存
     */
     public function memcacheselect($tablename,$arr)
        {
            $mem=new Memcache;
            $mem->connect("127.0.0.1",11211);
            if (!$mem->get($arr)) 
            {
                //echo 1;
                $data = DB::table("$tablename")->get();
                $data_arr = $this->respon($data);
                $mem->set($arr,$data_arr);
                return $data_arr = $mem->get($arr);
            }else
            {
                //echo 2;
                return $mem->get($arr);
            }
        }


    /**
     * 轮播图
     *@param integer $code 状态码
     *@param string $message 提示信息
     *@param array $imgdata 数据
     */
    public function images()
    {
        $data=DB::table('jimg')->get();
        print_r($data);die;
        return $jsondata=$this->respon($data);
       //print_r($arr);die;
        
    }

    /**
     * 校园简介
     *
     * @return json
     */
    public function news()
    {   
        // $data=DB::table('jnew1')->get();
        // return $jsondata=$this->respon($data);     
        //数据库名称
        $tablename = 'jnew1';
        //查询数据的名称
        $arr = "desc_arr";
        return $arr = $this->memcacheselect($tablename,$arr);
        
    }

    /**
     * 校园资讯
     *
     * @param   $request
     * @return json
     */
    public function newstwo()
    {
        $sql="SELECT * FROM `jnew2` ORDER BY `time` DESC LIMIT 2";
        $data=DB::select($sql); 
        return $jsondata=$this->respon($data);       
    }

    /**
     * 个人信息
     *
     * @param  int  
     * @return json
     */
    public function user_info(Request $request)
    {
        $arr=$request->input();
        //销毁              
        $arr=$this->unsets($arr);
        //去空
        $arr=$this->nulls($arr);
        $data=DB::table("juserinfo")->insert($arr);
        return $jsondata = $this->respon($data); 
          
    }

    /**
     * 个人信息
     *
     * @param  int  
     * @return json
     */
    public function user_infot(Request $request)
    {
        $arr=$request->input();
        //销毁              
        $arr=$this->unsets($arr);
        //去空
        $arr=$this->nulls($arr);
        $data=DB::table("jsushe")->insert($arr);
        return $jsondata = $this->respon($data); 
    }
    /*
    抵校登记
     */
    public function arrive(Request $request)
    {
        $arr=$request->input();
        //销毁              
        $arr=$this->unsets($arr);
        //去空
        $arr=$this->nulls($arr);
        //print_r($data);die;
        $data=DB::table("jarrive")->insert($arr);
        //以json的方式返回信息
        return $jsondata =$this->respon($data); 
    
    }
    /*
    报到单
     */
    public function reportcard()
    {
       $sql="SELECT * FROM juserinfo,jsushe,jarrive WHERE uname='张三' LIMIT 1";
       $data=DB::select($sql);
       //print_r($data);die;
       $jsondata=$this->respon($data);
       return $jsondata;

    }

    /**
     * 绿色通道
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function green(Request $request)
    {
        $arr=$request->input(); 
        //print_r($arr);die;         
        $arr=$this->unsets($arr)9; 
        //去空
        $arr=$this->nulls($arr);
        $data=DB::table("jgreen")->insert($arr);
       // $jsn=json_encode($data);
        //print_r($jsn);die;
        //以json的方式返回信息
        return $jsondata = $this->respon($data); 
        //print_r($arr);die;
           
    }
    /**
     * 推迟报道
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function delay(Request $request)
    {
        //接值
        $arr=$request->input();
        //销毁
        $arr=$this->unsets($arr); 
        $arr=$this->nulls($arr);
        //print_r($arr);die;
        $data=DB::table("jdelay")->insert($arr);
        //以json的方式返回信息
        $jsondata = $this->respon($data); 
        print_r($jsondata);die;
          
    }
    /*
    我要提问
     */
    public function tiwen()
    {
        $arr=Input::all();       
         //销毁
        $arr=$this->unsets($arr); 
        //去空
         foreach ($arr as $k => $v) {
            if($v==""){
                unset($arr['tiwen']); 
                unset($arr['time']);                
            }
        }
        //print_r($arr);die;
        $data=DB::table("jtiwen")->insert($arr);
        //print_r($data);die;       
       $jsondata=$this->respon($data);
       return $jsondata;

    }
    /*
    我的提问
     */
     public function tiwenurl()
     {
        $sql="select * from jtiwen order by id desc limit 5";
        $data=DB::select($sql);
       // print_r($data);die;
       $jsondata=$this->respon($data);
       return $jsondata;

    }
}

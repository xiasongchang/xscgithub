<?php
namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\web\UploadedFile;
use Response;
use File;

class IndexController extends Controller{
	/*
	首页
	 */
	public function actionIndex(){
		//引入post提交类
		include("PostController.php");
		//引入静态文件类
		//require_once("FileController.php");
		
		//轮播图
		$url="http://www.jiekou.com/index/images";
		$method="GET";
		$tmpInfo=Response::urlPost($url,$method);
		//print_r($tmpInfo);die;
		$imgd=json_decode($tmpInfo,true);
		print_r($imgd);die;
		


	    /*//print_r($tmpInfo);die;
	    //静态缓存
	    // $data=array(
	    // 		'id'=>1,
	    // 		'name'=>'zhangsan',
	    // 	);
	    $file=new File();
	    //print_r($file);die;
	    // $filename = "F:\WWW\November\jiekou\basic\controllers/files/../cacheindex_lunbo.txt";
	    // $dir=dirname($filename); 
	    // print_R($dir);die;
	    $filename = $file->cacheDate('index_lunbo',$tmpInfo,'cache3/');
        
        //print_R($filename);die;
		
	    $dir=dirname($filename); 
	    //print_R($dir);die;
	    
	    $a = mkdir($dir,0777);
	    //print_R($a);die;  
	    file_put_contents($filename,$tmpInfo);
	    $file->cacheDate('index_lunbo',$tmpInfo,'cache3/');
	     
                //获取缓存  
         $cac=json_decode(file_get_contents($filename),true);  
          print_r($cac);die;
	    	
	    exit;*/
		
		

		//校园简介
		$url="http://www.jiekou.com/index/news";
		$method="GET";	
		$tmpInfo=Response::urlPost($url,$method); 
		//print_r($tmpInfo);die;	
		$newdatatwo=json_decode($tmpInfo,true);
		//print_r($newdatatwo);die;
		
		//校园资讯
		$url="http://www.jiekou.com/index/newstwo";
		$method="GET";	
		$tmpInfo=Response::urlPost($url,$method);
		//print_r($tmpInfo);die; 	
		$newdatathree=json_decode($tmpInfo,true);
		//print_r($newdata3);die;
		return $this->renderPartial('index',['imgd'=>$imgd['data'],
												'newdata2'=>$newdatatwo['data'],
												'newdata3'=>$newdatathree['data']]);
	}

	/*
	自助报到
	 */
	public function actionSelf_report()
	{
		return $this->renderPartial('self-report');
	}
	/*
	绿色通道
	 */
	public function actionGreen()
	{
		return $this->renderPartial('green');
	}
	/*
	抵校登记
	 */
	public function actionArrive()
	{
		return $this->renderPartial('arrive');
	}
	/*
	推迟报到
	 */
	public function actionDelay()
	{
		return $this->renderPartial('delay');
	}

	public function actionMust_know()
	{
		return $this->renderPartial('must-know');
	}
	/*
	公告
	 */
	public function actionNotice()
	{
		return $this->renderPartial('notice');
	}
	/*
	公告详情
	 */
	public function actionNoticedetail()
	{
		return $this->renderPartial('noticeDetail');
	}
	/*
	资料下载
	 */
	public function actionData()
	{
		return $this->renderPartial('data');

	}
	public function actionUploadate()
	{
		return $this->renderPartial('uploaDate');

	}
	/*
	咨询帮助
	 */
	public function actionAsk()
	{
		return $this->renderPartial('ask');
		
	}

	/**************************************
	底部菜单  自助入学
	 */
	public function actionEntrance()
	{
		return $this->renderPartial('entrance');
	}
	/*******************************************
	个人中心
	 */
	public function actionUser_center()
	{
		return $this->renderPartial('user-center');
	}
	/*
	个人信息
	 */
	public function actionUser_info()
	{   
		return $this->renderPartial('user-info');
	}
	/*
	上传头像
	 */
	public function actionPhoto(){
		
		//接值
    	$request=Yii::$app->request;
    	$data=$request->post();
    	//实例化上传类 
    	$upload=new UploadedFile();   	
    	$file=$_FILES['photos']; //获取上传文件参数
		$year = date('Y',time());
        $mon = date('m',time());
        $day = date("d",time());
        $path = "uploads/".$year."/".$mon."/".$day;//设置上传文件的路径名称(这里的数据进行入库)            
        //echo $path;die;
        //如果没有文件 自动创建一个
          if(!file_exists($path)){
              mkdir($path,0777,true);
           }
        //设置文件路径
        $path =  $path."/".$file['name'];
        //var_dump($path);die;
        //将上传的文件移动到新位置
        move_uploaded_file($file['tmp_name'],$path);
        $uphoto=$path;
        $da['img']=$uphoto;
        //print_r($da);die;
        unset($data['_csrf']);
        error_reporting(0);
        $db=\Yii::$app->db;
        $res=$db->createCommand()->insert("jphoto",$da)->execute();
        if($res){
        	echo "<script>alert('上传成功');window.history.go(-1);</script>";
        }

    	
	}
	/*
	宿舍预定
	 */
	public function actionDorm_book()
	{
		return $this->renderPartial('dorm-book');
	}
	/*
	报到单  reportCard
	 */
	public function actionReportcard()
	{
		$url="http://www.jiekou.com/index/reportcard";
		$method="GET";		 
	    include("PostController.php"); 
		$tmpInfo=Response::urlPost($url,$method);
	    //print_r($tmpInfo);die;
		$reportcarddata=json_decode($tmpInfo,true);
		//print_r($reportcarddata);die;				
		//头像
		$db=\Yii::$app->db;
		$con=$db->createCommand("select * from jphoto order by img desc limit 1")->queryAll();
		//print_r($con);die;
		return $this->renderPartial('reportcard',['dat'=>$reportcarddata['data'],'pho'=>$con]);

	}

	/*
	修改密码
	 */
	public function actionChangepsw()
	{
		return $this->renderPartial('changepsw');
	}
	
	public function actionZui($data)
	{
		//echo "11";die;
		print_r($data);die;
	}




	/*
	到校路线
	 */
	public function actionRoute()
	{
		return $this->renderPartial('route');
	}

	/************************************************
	资讯帮助  常见问题
	 */
	public function actionCommonquestion()
	{
		return $this->renderPartial('commonquestion');
	}
	/*
	咨询解答
	 */
	public function actionAnswer()
	{
		return $this->renderPartial('answer');
	}	

	/*
	我要提问
	 */
	public function actionMyanswer()
	{
		$url="http://www.jiekou.com/index/tiwenurl";
		$method="GET";
		include("PostController.php"); 
		$tmpInfo=Response::urlPost($url,$method);
	    //print_r($tmpInfo);die;
		$reportcarddata=json_decode($tmpInfo,true);
		//print_r($reportcarddata);die;				
		return $this->renderPartial('myanswer',['tiwen'=>$reportcarddata['data']]);
	}	
	/*
	我要提问2
	 */
	public function actionTiwen()
	{
		return $this->renderPartial('tiwen');
	}	


}




?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="">
  <link rel="stylesheet" type="text/css" href="public/css/slick.css"/>
  <link rel="stylesheet" type="text/css" href="public/css/base.css"/>
  <link rel="stylesheet" type="text/css" href="public/css/style.css"/>
  <link rel="stylesheet" type="text/css" href="public/css/iconfont/iconfont.css"/>
  <title>宿舍预定</title>
	<body onload="showvalf()">
		<div class="header">
			<span>宿舍预定</span>
			<a href="javascript:history.go(-1)" class="back"><i class="iconfont icon-left"></i></a>
		</div>
		<div class="banner">
			<img src="public/img/self-report.png">
		</div>
		<div class="step">
			<ul class="fs0">
				<li>
    			<span class="step-icon passbg">1</span>
    			<p class="step-txt">个人信息</p>
    		</li>
    		<li>
    		<span class="step-icon passbg">2</span>
    			<p class="step-txt">宿舍预定</p>
    		</li>
    		<li>
    			<span class="step-icon">3</span>
    			<p>抵校登记</p>
    		</li>
    		<li>
    			<span class="step-icon">4</span>
    			<p>报到单</p>
    		</li>
    	</ul>
    	<span class="pro-line"><img src="public/img/pro-line.png"></span>
		</div>
		<ul class="dorm-book">
			<li>
		    <span class="book-tit">校区</span>
		    <input type="text" name="name" id="qu" placeholder="请选择你所在的校区" /> 
		    <span class="goin"><i class="iconfont icon-right"></i></span>
			</li>
			<li>
				<span class="book-tit">楼栋号</span>
		        <input type="text" name="name" id="lou" placeholder="请填写您宿舍的楼栋号" />  
		        <span class="goin"><i class="iconfont icon-right"></i></span>
			</li>
			<li>
				<span class="book-tit">宿舍类型</span>
		        <input type="text" name="name" id="lei" placeholder="请填写您的宿舍类型" />  
		        <span class="goin"><i class="iconfont icon-right"></i></span>
			</li>
			<li>
				<span class="book-tit">房间号</span>
		        <input type="text" name="name" id="hao" placeholder="请选择您的房间号" />  
		        <span class="goin"><i class="iconfont icon-right"></i></span>
			</li>
			<li>
				<span class="book-tit">铺位</span>
		        <input type="text" name="name" id="wei" placeholder="请选择您的床铺位置" />  
		        <span class="goin"><i class="iconfont icon-right"></i></span>
			</li>
			
		</ul>
		<div class="step-btn">
		<!-- href="index.php?r=index/arrive" -->
				<a href="index.php?r=index/user_info">上一步</a>
				<a href="index.php?r=index/arrive" id="next">下一步</a>
		</div>
	  <script src="public/js/jquery-1.10.2.min.js"></script>
      <script type="text/javascript" src="public/js/rem.js"></script>

      
	</body>
</html>
<script>
	$(function(){
		$("#next").click(function(){

			var qu=$("#qu").val();
			var lou=$("#lou").val();
			var lei=$("#lei").val();
			var hao=$("#hao").val();
			var wei=$("#wei").val();
				
			//alert(str)
			$.ajax({
				type:"get",
				url:"http://www.jiekou.com/index/user_infot",
				dataType:"jsonp",
				jsonp:"callback",
				data:{qu:qu,lou:lou,lei:lei,hao:hao,wei:wei},
				success:function(msg){
					
				}

			})
		})
	})
</script>

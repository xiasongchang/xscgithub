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
  <link rel="stylesheet" type="text/css" href="public/js/jquery.datetimepicker.css"/>
  <title>抵校登记</title>
	<body>
		<div class="header">
			<span>抵校登记</span>
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
    			<span class="step-icon passbg">3</span>
    			<p class="step-txt">抵校登记</p>
    		</li>
    		<li>
    			<span class="step-icon">4</span>
    			<p>报到单</p>
    		</li>
    	</ul>
    	<span class="pro-line"><img src="public/img/pro-line1.png"></span>
		</div>
		<ul class="dorm-book">
			<li>
			<div class="show-btn">
			    <span class="book-tit">交通方式</span>
				    <select name="" id="fangshi">
				    <option value="">---请选择---</option>
			    	<option value="飞机">飞机</option>
			    	<option value="火车">火车</option>
			    	<option value="汽车">汽车</option>
			    	</select>
			    
		   </div>
		    <!-- <span class="goin"><i class="iconfont icon-right"></i></span>

		    <div class="checkshow">

	        	<p class="checked"></p>
	        	<p></p>
	        	<p></p> 
	       </div>-->
			</li>
			<li>
				<span class="book-tit">接站站点</span>
		        <input type="text" name="name" id="zhandian" placeholder="请填写您目的地的站点位置" />  
		        <span class="goin"><i class="iconfont icon-right"></i></span>
			</li>
			<li>
				<span class="book-tit">出发时间</span>
		        <input type="text" name="name" id="begin" class="datetimepicker4" placeholder="请填写您的出发时间"/>  
		        <!-- <span class="goin"><i class="iconfont icon-right"></i></span> -->
			</li>
			<li>
				<span class="book-tit">到达时间</span>
		        <input type="text" name="name" id="end" class="datetimepicker5" placeholder="请填写您的到达时间"/>  
		        <!-- <span class="goin"><i class="iconfont icon-right"></i></span> -->
			</li>
			<li>
				<div class="show-btn">					
					<span class="book-tit">是否陪同</span>

					<!-- <input type="radio" name="sex" value="是" placeholder="是"/>是

					<input type="radio" name="sex" value="否" placeholder="否"/> -->
			      <select name="" id="tong">
				    <option value="">---请选择---</option>
			    	<option value="是">是</option>
			    	<option value="否">否</option>
			    	
			    	</select> 
		        </div>
		        <!-- <span class="goin"><i class="iconfont icon-right"></i></span>
		        <div class="checkshow">
	        	<p class="checked">是</p>
	        	<p>否</p> -->

			</li>


			<li>
				<span class="book-tit">陪同人数</span>
		        <input type="text" name="name" id="num" placeholder="请填写您的陪同人数" />  
			</li>
		</ul>
		<div class="step-btn">
			    <a href="index.php?r=index/dorm_book">上一步</a>
			    <!-- href="index.php?r=index/reportcard" -->
				<a href="index.php?r=index/reportcard" id="next">下一步</a>
		</div>
	  <script src="public/js/jquery-1.10.2.min.js"></script>
	  <script type="text/javascript" src="public/js/basic.js"></script>	
      <script type="text/javascript" src="public/js/rem.js"></script>	
	</body>
</html>
<script src="public/js/jquery.js"></script>
<script src="public/js/jquery.datetimepicker.js"></script>
<script>
	 $('.datetimepicker4').datetimepicker();
    $('.datetimepicker5').datetimepicker();
</script>

<script>
	$(function(){
		$("#next").click(function(){
			var fangshi=$("#fangshi").val();
			var zhandian=$("#zhandian").val();
			var begin=$("#begin").val();
			var end=$("#end").val();
			var tong=$("#tong").val();
			var num=$("#num").val();
			//alert(begin)
			$.ajax({
				type:"get",
				url:"http://www.jiekou.com/index/arrive",
				dataType:"jsonp",
				jsonp:"callback",
				data:{fangshi:fangshi,zhandian:zhandian,begin:begin,end:end,tong:tong,num:num},
				success:function(msg){
					
				}

			})
		})
	})
</script>

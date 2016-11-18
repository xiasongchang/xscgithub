<!DOCTYPE html>
<html lang="zh-CN">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
		<meta name="description" content="">
		<link rel="stylesheet" type="text/css" href="public/css/slick.css" />
		<link rel="stylesheet" type="text/css" href="public/css/base.css" />
		<link rel="stylesheet" type="text/css" href="public/css/style.css" />
		<link rel="stylesheet" type="text/css" href="public/css/iconfont/iconfont.css" />
		<title>我要提问</title>

		<body>
			<div class="header">
				<span>我要提问</span>
				<a href="javascript:history.go(-1)" class="back"><i class="iconfont icon-left"></i></a>
			</div>
			<div class="banner">
				<img src="public/img/self-report.png">
			</div>
			<div class="contain"  style="padding-top:3%;">
				 <div class="reason">	
				<textarea id="tiwen"  placeholder="请您在此输入您的申请原因，以便通过审核"></textarea>
			<input type="hidden" id="time"  value="<?php echo date('Y-m-d H:i:s');?>">
			</div>
			</div>
			<div class="step-btn">
				<a class="ta-center db" id="next">提交</a>
		</div>
		</body>

</html>
			<script src="public/js/jquery-1.10.2.min.js"></script>
			<script type="text/javascript" src="public/js/basic.js"></script>
			<script type="text/javascript" src="public/js/rem.js"></script>

<script>
	$(function(){
		$("#next").click(function(){
			var tiwen=$("#tiwen").val();
			var time=$("#time").val();
			$.ajax({
				type:"get",
				url:"http://www.jiekou.com/index/tiwen",
				dataType:"jsonp",
				jsonp:"callback",
				data:{tiwen:tiwen,time:time},
				success:function(msg){
					
				}

			})

		})
	})
</script>
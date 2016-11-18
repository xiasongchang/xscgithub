<!DOCTYPE html>
<html lang="zh-CN">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="">
  <link rel="stylesheet" type="text/css" href="public/css/base.css"/>
  <link rel="stylesheet" type="text/css" href="public/css/style.css"/>
  <link rel="stylesheet" type="text/css" href="public/css/iconfont/iconfont.css"/>
  <title>用户登录</title>
	</head>
	<body>
	<form action="">
		<div class="header">
			<span>用户登录</span>
			<!--<a href="#" class="back"><i class="iconfont icon-left"></i></a>-->
		</div>
		<ul class="login-box">
			<li>
				    <span class="login-name"><i class="iconfont icon-user"></i></span>
		        <input type="text" name="name" id="uname" placeholder="请输入用户名" />   
			</li>
			<li>
				<span class="login-psw"><i class="iconfont icon-psw"></i></span>
		        <input type="text" name="name" id="upwd" placeholder="请输入身份证号码后六位" />   
			</li>
		</ul>
		</div>
		<div class="confirm">
			<a href="" id="log">登录</a>
			<!-- <a href="#"></a> -->
			<p class="foget-psw"><a href="#">忘记密码</a></p>
		</div>
		</form>
	</body>
	<script src="public/js/jquery-1.10.2.min.js"></script>
     <script type="text/javascript" src="public/js/rem.js"></script>	
</html>
<script>
	$(function(){
		$("#log").click(function(){
			
			alert(12)
		})
		
	})
</script>

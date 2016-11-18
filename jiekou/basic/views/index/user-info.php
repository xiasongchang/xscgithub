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
  <title>个人信息</title>
	<body>
		<div class="header">
			<span>个人信息</span>
			<a href="javascript:history.go(-1)" class="back"><i class="iconfont icon-left"></i></a>
		</div>
		<div class="step">
			<ul class="fs0">
				<li>
    			<span class="step-icon passbg">1</span>
    			<p class="step-txt">个人信息</p>
    		</li>
    		<li>
    		<span class="step-icon">2</span>
    			<p>宿舍预定</p>
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
    	<span class="pro-line"><img src="public/img/pro-line4.png"></span>
		</div>
		<ul class="dorm-book">
		<form action="index.php?r=index/photo" method="post" enctype="multipart/form-data">
		<input name="_csrf" type="hidden" id="_csrf" value="<?= Yii::$app->request->csrfToken ?>">
			<li class="upload-head ta-center">
				<span>
					<img src="public/img/take-photo.png">
					<input type="file" name="photos"/>
				</span>
				<p><input type="submit" value="上传头像"></p>
			</li>
		</form>
			<li>
			    <span class="book-tit">姓名</span>
			    <input type="text" name="name" id="uname" placeholder="请输入姓名" /> 
			    <div class="sex">
			    	<label class="sex-check">男</label>
			    	<label id="sex">女</label>
			    </div>
			</li>
			<li>
				<span class="book-tit">邮箱</span>
		        <input type="text" name="name" id="email" placeholder="请填写您的个人邮箱地址" />  
			</li>
			<li>
				<span class="book-tit">手机</span>
		        <input type="text" name="name" id="tel" placeholder="请填写您的个人手机号码" />  
			</li>
				
			<li>
			    <span class="book-tit">紧急联系人电话</span>
			    <input type="text" name="name" id="teltwo" placeholder="请输紧急联系人电话" /> 
			</li>
			<li>
				<span class="book-tit">与当事人关系</span>
		        <input type="text" name="name" id="guanxi" placeholder="请填写您与联系人的关系" />  
			</li>
		
			
			<li>
				<span class="book-tit">详细地址</span>
		        <input type="text" name="name" id="info" placeholder="请填写您的详细地址" />  
			</li>
		</ul>
		<div class="step-btn">
		<!-- href="index.php?r=index/dorm_book"  -->
				<a href="index.php?r=index/dorm_book" class="ta-center db" id="next">下一步</a>
		</div>
  <script src="public/js/jquery-1.10.2.min.js"></script>
   <script type="text/javascript" src="public/js/basic.js"></script>	
  <script type="text/javascript" src="public/js/rem.js"></script>

  
	</body>
</html>
<script>
	$(function(){
		$("#next").click(function(){

			var uname=$("#uname").val();
			var email=$("#email").val();
			var tel=$("#tel").val();
			var teltwo=$("#teltwo").val();
			var guanxi=$("#guanxi").val();
			var info=$("#info").val();
				
			
			$.ajax({
				type:"get",
				url:"http://www.jiekou.com/index/user_info",
				dataType:"jsonp",
				jsonp:"callback",
				data:{uname:uname,email:email,tel:tel,teltwo:teltwo,guanxi:guanxi,info:info},
				success:function(msg){
					
				}

			})
		})
		
	})
</script>

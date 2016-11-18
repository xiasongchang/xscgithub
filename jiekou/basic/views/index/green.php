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
		<title>绿色通道</title>
		<body>
			<div class="header">
				<span>绿色通道</span>
				<a href="javascript:history.go(-1)" class="back"><i class="iconfont icon-left"></i></a>
			</div>
			<div class="banner">
				<img src="public/img/self-report.png">
			</div>
			<div class="contain">
				<ul class="dorm-book">
					<li class="state-box">
						申请状态：
						<span class="state-img"><img src="public/img/state.png"></span>
						<span class="state">审核通过</span>
					</li>
				</ul>
				<ul class="dorm-book mt3">
					<li>
						<div class="show-btn">
							<span class="book-tit">申请类型</span>
							<input type="text" name="name" placeholder="请选择您的申请类型" disabled="disabled" />
						</div>
						<div class="checkshow">
							<h4 class="ta-center">申请类型</h4>
							<p class="checked">缓交学费</p>
							<p>助学贷款</p>
							<p>免交学费</p>
							<span class="close">关闭</span>
						</div>
					</li>
				</ul>
				<div class="greenway">
					<ul class="hd clearfix">
						<li class="active">个人信息</li>
						<li>家庭情况</li>
						<li>申请原因</li>
						<li>证明材料</li>
					</ul>
					<div class="bd">
						<div style="display: block;">
							<ul class="dorm-book">
								<li>
									<span class="book-tit">姓名</span>
									<input type="text" name="name" id="ming" placeholder="请输入姓名" />
									<div class="sex">
										<label class="sex-check">男</label>
										<label>女</label>
									</div>
								</li>
								<li>
									<span class="book-tit">民族</span>
									<input type="text" name="name" id="min" placeholder="请填写您的民族类别" />
								</li>
								<li>
									<span class="book-tit">手机</span>
									<input type="text" name="name" id="tel" placeholder="请填写您的个人手机号码" />
								</li>
								<li>
									<span class="book-tit">出生年月</span>
									<input type="text" name="name" id="year" placeholder="请填写您的出生日期" />
								</li>
								<li>
									<span class="book-tit">身份证号</span>
									<input type="text" name="name" id="zheng" placeholder="请填写您的身份证号码" />
								</li>
								<li>
									<span class="book-tit">联系手机</span>
									<input type="text" name="name" id="shouji" placeholder="请填写您的手机联系号码" />
								</li>
								<li>
									<div class="show-btn">
										<span class="book-tit">户籍类型</span>
										<input type="text" name="name" placeholder="请选择您的户籍类型" disabled="disabled" />
									</div>
									<span class="goin"><i class="iconfont icon-right"></i></span>
									<div class="checkshow">
										<h4 class="ta-center">户籍类型</h4>
										<p class="checked">是</p>
										<p>否</p>
										<span class="close">关闭</span>
									</div>
								</li>
								<li>
									<div class="show-btn">
										<span class="book-tit">政治面貌</span>
										<input type="text" name="name" placeholder="请选择您的政治面貌" disabled="disabled" />
									</div>
									<span class="goin"><i class="iconfont icon-right"></i></span>
									<div class="checkshow">
										<p class="checked">群众</p>
										<p>团员</p>
										<p>党员</p>
										<span class="close">关闭</span>
									</div>
								</li>
								<li>
									<a href="adress.html">
										<span class="book-tit">居住地址</span>
										<input type="text" name="name" id="zhi" placeholder="请所在地地址" disabled="disabled" />
									</a>
									<span class="goin"><i class="iconfont icon-right"></i></span>
								</li>
								<li>
									<span class="book-tit">详细地址</span>
									<input type="text" name="name" id="info" placeholder="请填写您的详细地址" />
								</li>
							</ul>
						</div>
						<div>
							<ul class="dorm-book">
								<li>
									<span class="book-tit house">家庭成员</span>
									<input type="text" name="name" id="yuan" placeholder="请填写家庭成员1的姓名" class="house-input" />
								</li>
								<li>
									<span class="book-tit">关系</span>
									<input type="text" name="name" id="guanxi" placeholder="请填写您与家庭成员1的关系" class="house-input" />
								</li>
								<li>
									<span class="book-tit">工作单位</span>
									<input type="text" name="name" id="danwei" placeholder="请填写家庭成员1的工作单位" class="house-input" />
								</li>
								<li>
									<span class="book-tit">年收入</span>
									<input type="text" name="name" id="ru" placeholder="请填写家庭成员1的年收入情况" class="house-input" />
								</li>
							</ul>
							
							
						</div>
						<div class="reason">
							<textarea id="rong" placeholder="请您在此输入您的申请原因，以便通过审核"></textarea>
						</div>
						<div class="prove clearfix">
							<p>
							    <span><img src="img/add.png" /></span>
							    <input type="file" class="upload-prove" />
							</p>
								<p>
							    <span><img src="img/add.png" /></span>
							    <input type="file" class="upload-prove" />
							</p>
						</div>
					</div>
				</div>
				</div>
				<div class="step-btn">
					<a class="ta-center db" id="ti">提交</a>
				</div>
			<div class="cover-bg"></div>
			<script src="public/js/jquery-1.10.2.min.js"></script>
			<script type="text/javascript" src="public/js/basic.js"></script>
			<script type="text/javascript" src="public/js/rem.js"></script>
		</body>

</html>
<script>
	$(function(){
		$("#ti").click(function(){
			var ming=$("#ming").val();
			var min=$("#min").val();
			var tel=$("#tel").val();
			var year=$("#year").val();
			var zheng=$("#zheng").val();
			var shouji=$("#shouji").val();
			var info=$("#info").val();
			var zhi=$("#zhi").val();
			var yuan=$("#yuan").val();
			var guanxi=$("#guanxi").val();
			var ru=$("#ru").val();
			var rong=$("#rong").val();

			$.ajax({
				type:"get",
				url:"http://www.jiekou.com/index/green",
				dataType:"jsonp",
				jsonp:"callback",
				data:{ming:ming,min:min,tel:tel,year:year,zheng:zheng,shouji:shouji,info:info,zhi:zhi,yuan:yuan,guanxi:guanxi,ru:ru,rong:rong},
				success:function(msg){
					
				}

			})
		})
	})

</script>
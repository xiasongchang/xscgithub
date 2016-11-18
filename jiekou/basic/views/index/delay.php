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
		<title>推迟报到</title>

		<body>
			<div class="header">
				<span>推迟报到</span>
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
							<span class="book-tit delay">推迟报到类型</span>
							<input type="text" name="name" placeholder="请选择" disabled="disabled" class="delayinput"/>
						</div>
						<div class="checkshow">
							<h4 class="ta-center">推迟报到类型</h4>
							<p class="checked">事假</p>
							<p>病假</p>
							<p>服兵役</p>
							<span class="close">关闭</span>
						</div>
					</li>
				</ul>
				<div class="delayReport">
					<ul class="hd clearfix">
						<li class="active">个人申请信息</li>
						<li>申请原因</li>
					</ul>
					<div class="bd">
						<div style="display: block;">
							<ul class="dorm-book">
								<li>
									<span class="book-tit delay">姓名</span>
									<input type="text" name="name" id="ming" placeholder="请填写您的姓名" class="delayinput"/>
								</li>
								<li>
									<span class="book-tit delay">考生号</span>
									<input type="text" name="name" id="hao" placeholder="请填写您的考生号" class="delayinput"/>
								</li>
								<li>
									<span class="book-tit delay">学院</span>
									<input type="text" name="name" id="yuan" placeholder="请填写您所在的学院" class="delayinput"/>
								</li>
								<li>
									<span class="book-tit delay">专业</span>
									<input type="text" name="name" id="ye" placeholder="请填写您的专业" class="delayinput"/>
								</li>
								<li>
									<span class="book-tit delay">身份证号</span>
									<input type="text" name="name" id="shen" placeholder="请填写您的身份证号码" class="delayinput"/>
								</li>
								<li>
									<span class="book-tit delay">推迟报到时间</span>
									<input type="text" name="name" id="time" placeholder="请填选择" class="delayinput" />
									
								</li>
							</ul>
						</div>
						<div class="reason">
							<textarea id="yin"  placeholder="请您在此输入您的申请原因，以便通过审核"></textarea>
						</div>
					</div>
				</div>
			</div>
			<div class="step-btn">
					<a id="sub" class="ta-center db">提交</a>
			</div>
			<div class="cover-bg"></div>
			<script src="public/js/jquery-1.10.2.min.js"></script>
			<script type="text/javascript" src="public/js/basic.js"></script>
			<script type="text/javascript" src="public/js/rem.js"></script>
			<script type="text/javascript" src="public/js/ajax.js"></script>
		</body>
		<script>
		$(function(){
			$("#sub").click(function(){
				var ming=$("#ming").val();
				var hao=$("#hao").val();
				var yuan=$("#yuan").val();
				var ye=$("#ye").val();
				var shen=$("#shen").val();
				var time=$("#time").val();
				var yin=$("#yin").val();
				var data= {ming:ming,hao:hao,yuan:yuan,ye:ye,shen:shen,time:time,yin:yin};
				var url=ajax('delay',data);
				//alert(str);
				/*$.ajax({
				type:"get",
				url:"http://www.jiekou.com/index/delay",
				dataType:"jsonp",
				jsonp:"callback",
				data:{ming:ming,hao:hao,yuan:yuan,ye:ye,shen:shen,time:time,yin:yin},
				success:function(msg){
					
				}

			},'jsonp')*/
			})
		})
		</script>
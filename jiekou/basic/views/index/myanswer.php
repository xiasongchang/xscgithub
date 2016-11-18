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
		<title>我的提问</title>

		<body>
			<div class="header">
				<span>我的提问</span>
				<a href="javascript:history.go(-1)" class="back"><i class="iconfont icon-left"></i></a>
			</div>
			<div class="banner">
				<img src="public/img/self-report.png">
			</div>
			<div class="contain">
				<div class="myanswer-box">
				
						<ul class="myanswer">
							
							<?php foreach($tiwen as $key=>$val){?>
							
							<li>
								<span class="route-icon"><i class="iconfont icon-zixun"></i></span>
								<span class="route-word"><?php echo $val['tiwen']?></span>
								<span class="goin"><?php echo $val['time']?></span>
							</li>
							
							<?php } ?>
							
						</ul>
						
					</div>
				</div>
			</div>

			<script src="public/js/jquery-1.10.2.min.js"></script>
			<script type="text/javascript" src="public/js/basic.js"></script>
			<script type="text/javascript" src="public/js/rem.js"></script>
		</body>

</html>
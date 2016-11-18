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
  <title>报到单</title>
	<body>
		<div class="header">
			<span>报到单</span>
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
    			<span class="step-icon  passbg">4</span>
    			<p class="step-txt">报到单</p>
    		</li>
    	</ul>
    	<span class="pro-line"><img src="public/img/pro-line2.png"></span>
		</div>
		<?php foreach($dat as $key=>$val){?>
		<ul class="dorm-book mt3">
			<li class="info-top clearfix">
				<span class="heade-img">
				<?php foreach($pho as $k=>$v){?>
					<img src="<?php echo $v['img']?>">
					<?php } ?>
				</span>
			    <span class="stu-name"><?php echo $val['uname']?></span>
			    <span class="code"><img src="public/img/code.png"></span>
			</li>
			<li class="basic-tit">
			    宿舍基本信息
			</li>
			<li>
				<span class="book-tit">姓名</span>
		        <span class="info-middle"><?php echo $val['uname']?></span>  
			</li>
			<li>
				<span class="book-tit">性别</span>
		        <span class="info-middle">男</span>  
			</li>
			<li>
				<span class="book-tit">邮箱</span>
		        <span class="info-middle"><?php echo $val['email']?></span>  
			</li>
			<li>
				<span class="book-tit">手机号</span>
		    <span class="info-middle"><?php echo $val['tel']?></span>  
			</li>
			<li>
				<span class="book-tit">学院</span>
		        <span class="info-middle">软工</span>  
			</li>
			<li>
				<span class="book-tit">专业</span>
		        <span class="info-middle">php</span>  
			</li>
			<li>
				<span class="book-tit">宿舍号</span>
		        <span class="info-middle"><?php echo $val['hao']?></span>  
			</li>
			<li>
				<span class="book-tit">铺位</span>
		        <span class="info-middle"><?php echo $val['wei']?></span>  
			</li>
		</ul>
		<?php } ?>
		<ul class="dorm-book mt3">
			<li class="basic-tit">
			    学校费用
			</li>
			<li class="cost clearfix first">
				<span>类别</span>
				<span>属性</span>
				<span>费用</span>
			</li>
			<li class="cost clearfix">
				<span>2016秋季服装</span>
				<span>尺码：小号</span>
				<span>360:00</span>
			</li>
			<li class="cost clearfix">
				<span>学杂费</span>
				<span>尺码：小号</span>
				<span>360:00</span>
			</li>
			<li class="cost clearfix">
				<span>住宿费</span>
				<span>尺码：小号</span>
				<span>360:00</span>
			</li>
		</ul>
		<div class="reportcard">
			    <a href="#" class="db ta-center print">打印预览</a>
				<a class="db ta-center">保存到手机</a>
		</div>
	  <script src="public/js/jquery-1.10.2.min.js"></script>
	  <script type="text/javascript" src="public/js/basic.js"></script>	
      <script type="text/javascript" src="public/js/rem.js"></script>	
	</body>
</html>

<!DOCTYPE html>
<html lang="zh-CN">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
		<meta name="description" content="">
	<link rel="stylesheet" type="text/css" href="public/css/slick.css" />
	<link rel="stylesheet" type="text/css" href="public/css/base.css" />
	<link rel="stylesheet" type="text/css" href="public/css/style.css" />
	<link rel="stylesheet" type="text/css" href="public/css/all.css"/>
	<link rel="stylesheet" type="text/css" href="public/css/swiper.min.css"/>
	<link rel="stylesheet" type="text/css" href="public/css/iconfont/iconfont.css" />
		<title>首页</title>
	</head>

	<body>
		<div class="header">
			<span>优智源</span>
			<a href="user-center.html"><span class="user"><i class="iconfont icon-person"></i></span></a>
		</div>
		<!--<div class="banner autoplay">
			<div>
				<a href="#" class="banner-img"><img src="img/banner1.png" alt=""></a>
			</div>
			<div>
				<a href="#" class="banner-img"><img src="img/banner1.png" alt=""></a>
			</div>
			<div>
				<a href="#" class="banner-img"><img src="img/banner1.png" alt=""></a>
			</div>
		</div>-->
		<div class="banner swiper-container">
            <div class="swiper-wrapper">
            <?php foreach($imgd as $key=>$val){?>
                <div class="swiper-slide">
				
                <a href="javascript:void(0)"><img class="swiper-lazy" data-src="<?php echo $val["imgs"];?>" alt=""></a>
				
                </div>
            <?php } ?>
                <!-- <div class="swiper-slide"><a href="javascript:void(0)"><img class="swiper-lazy" data-src="public/img/banner1.png" alt=""></a></div>
                <div class="swiper-slide"><a href="javascript:void(0)"><img class="swiper-lazy" data-src="public/img/banner1.png" alt=""></a></div>
                <div class="swiper-slide"><a href="javascript:void(0)"><img class="swiper-lazy" data-src="public/img/banner1.png" alt=""></a></div> -->
            </div>
            <div class="swiper-pagination"></div>
        </div>
		<div class="menu">
			<ul class="clearfix">
				<li>
					<a href="index.php?r=index/self_report">
						<img src="public/img/icon1.png">
						<p class="menu-txt">自助报到</p>
					</a>
				</li>
				<li>
					<a href="index.php?r=index/green">
						<img src="public/img/icon2.png">
						<p class="menu-txt">绿色通道</p>
					</a>
				</li>
				<li>
					<a href="index.php?r=index/arrive">
						<img src="public/img/icon3.png">
						<p class="menu-txt">抵校登记</p>
					</a>
				</li>
				<li>
					<a href="index.php?r=index/delay">
						<img src="public/img/icon4.png">
						<p class="menu-txt">推迟报到</p>
					</a>
				</li>
			</ul>
			<ul class="clearfix">
				<li>
					<a href="index.php?r=index/must_know">
						<img src="public/img/icon5.png">
						<p class="menu-txt">入学须知</p>
					</a>
				</li>
				<li>
					<a href="index.php?r=index/notice">
						<img src="public/img/icon6.png">
						<p class="menu-txt">通知公告</p>
				</li>
				</a>
				<li>
					<a href="index.php?r=index/data">
						<img src="public/img/icon7.png">
						<p class="menu-txt">资料下载</p>
					</a>
				</li>
				<li>
					<a href="index.php?r=index/ask">
						<img src="public/img/icon8.png">
						<p class="menu-txt">咨询帮助</p>
					</a>
				</li>
			</ul>
		</div>
		<div class="brief">
			<h3 class="brief-tit">校园简介</h3>
			<?php foreach($newdata2 as $key=>$val){?>
			<div class="brirf-content clearfix">
				<div class="bc-left fl">
					<img src="<?php echo $val['img'];?>">
				</div>
			
				<div class="bc-right fr">
					<?php echo substr_replace($val['content'],'....',320);?>
				</div>
				
			</div>
			<?php } ?>
		</div>
		<dl class="news">
			<dt class="news-tit">校园资讯</dt>
			<?php foreach($newdata3 as $key=>$val){?>
			<dd class="news-content clearfix">
				<div class="nc-left fl">
					<img src="<?php echo $val['img']?>">
				</div>
				<div class="nc-right fr">
					<a class="ncr-top">
				<?php echo substr_replace($val['content'],'....',220);?>
					</a>
					<span class="nc-time"><?php echo $val['time']?></span>
				</div>
			</dd>
			<?php } ?>
		</dl>
		<div class="footer">
			<ul class="footer-page clearfix">
				<li class="page-item active">
					<a href="index.php?r=index/index">
						<i class="iconfont icon-index"></i>
						<p>首页</p>
					</a>
				</li>
				<li class="page-item">
					<a href="index.php?r=index/entrance">
						<i class="iconfont icon-computer"></i>
						<p>自助入学</p>
					</a>
				</li>
				<li class="page-item">
					<a href="index.php?r=index/ask">
						<i class="iconfont icon-ask"></i>
						<p>咨询帮助</p>
					</a>
				</li>
				<li class="page-item">
					<a href="index.php?r=index/user_center">
						<i class="iconfont icon-person1"></i>
						<p>个人中心</p>
					</a>
				</li>
			</ul>
		</div>
		<script src="public/js/jquery.min.js"></script>
0	    <script src="public/js/fastclick.js"></script>
		<script src="public/js/slick.min.js"></script>
		
		<script src="public/js/rem.js"></script>
		<script src="public/js/basic.js"></script>
		<script src="public/js/swiper.jquery.min.js"></script>
		<script>
			$(function() {
				$('.autoplay').slick({
				  slidesToScroll: 1,
				  autoplay: true,
				  autoplaySpeed: 2000,
				   dots:true,
				});
			});
		</script>
		<script >
		    $(function () {
		        var banner = new Swiper('.banner',{
		            autoplay: 5000,
		            pagination : '.swiper-pagination',
		            paginationClickable: true,
		            lazyLoading : true,
		            loop:true
		        });		
		    });
		</script>
	</body>
</html>
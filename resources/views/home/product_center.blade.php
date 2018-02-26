<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="/Home/css/style.css"/>
    <link rel="stylesheet" type="text/css" href="/Home/css/product.css"/>
    <link rel="stylesheet" type="text/css" href="/Home/css/swiper.css"/>
    <script src="/Home/js/swiper.js"></script>
	<script type="text/javascript">
		window.onload=function(){
			//1. banner轮播
		    new Swiper('.new_ban .swiper-container', {
		    	  slidesPerView: 1,
			      spaceBetween: 30,
			      loop:true,
			      effect: 'fade',
			      pagination: {
			        el: '.new_ban .swiper-pagination',
			        clickable: true
			      },
			      autoplay:{
			      	delay:1500
			      }
			    });
			
			//2. 新品推荐轮播
			new Swiper('.new_show .swiper-container', {
			      slidesPerGroup: 1,
			      loop: true,
			      loopFillGroupWithBlank: true,
			      navigation: {
			        nextEl: '.new_show .swiper-button-next',
			        prevEl: '.new_show .swiper-button-prev'
			      },
		    	});
		}
	</script>
</head>
<body class="product">
	<div class="headerWrap">
	    <div class="header">
	        <div class="inner">
	            <div class="log"><a href="index.html"><img src="/home/images/logo_03.jpg"/></a></div>
	            <ul class="nav clearfix">
	                <li><a href="index.html">网站首页</a></li>
	                <li><a href="company.html">关于我们</a></li>
	                <li><a href="news_center.html">新闻中心</a></li>
	                <li><a href="product_center.html">产品中心</a></li>
	                <li><a href="consult.html">门店资讯</a></li>
	                <li><a href="support.html">服务与支持</a></li>
	            </ul>
	            <ul class="icon">
	                <li><a href="login.html"></a></li>
	                <li><a href="shop_car.html"></a></li>
	                <li><a href="##"></a></li>
	            </ul>
	        </div>
	    </div>
	</div>
	<div class="banner banner_big new_ban">
		<div class="swiper-container">
		    <div class="swiper-wrapper">
		        <div class="swiper-slide Slide_1"><a href="##"><img src="/home/images/banner图.jpg"/></a></div>
		        <div class="swiper-slide Slide_2"><a href="##"><img src="/home/images/banner图2.jpg"/></a></div>
		        <div class="swiper-slide Slide_3"><a href="##"><img src="/home/images/banner图3.jpg"/></a></div>
		    </div>
		    <!-- 分页器 -->
		    <div class="swiper-pagination"></div>
		</div>
		<div class="inner">
			<div class="rect">
				<div class="ban_bg"><img src="/home/images/news_bg.png"/></div>
				<div class="text">
					<h2>NEWS</h2>
					<p>THE WORD IS AT YOU FEET</p>
				</div>
			</div>
		</div>
	</div>
	<div class="subNav">
		<div class="inner">
			<ul class="clearfix">
				<li><a href="" class="ac">自行车</a></li>
				<li><a href="">车身商品</a></li>
				<li><a href="">人身商品</a></li>
			</ul>
		</div>
	</div>
	<div class="new_show inner">
		<div class="title">
			<h3><span>新品</span><span>推荐</span></h3>
			<p>NEW SHOW</p>
		</div>
		<div class="swiper-container">
		    <div class="swiper-wrapper">
		        <div class="swiper-slide Slide_1"><a href="##"><img src="/home/images/product/0.jpg"/></a></div>
		        <div class="swiper-slide Slide_1"><a href="##"><img src="/home/images/product/0.jpg"/></a></div>
		        <div class="swiper-slide Slide_1"><a href="##"><img src="/home/images/product/0.jpg"/></a></div>
		    </div>
		    
		</div>
		<!--防止箭头被overflow，结构需写在外边-->
		<div class="swiper-button-prev"></div>
	    <div class="swiper-button-next"></div>
	</div>
	@foreach($res as $v)
	<div class="list">
		<div class="inner">
			<h3>{{$v['name']}}</h3>
			<ul class="clearfix">
				@foreach($v['goods'] as $val)
				<li style="margin-bottom: 20px;">
					<a href="/Home/Product/details" style="display: inline-block;width: 100%;height: 100%">
						<img src="/home/images/product/2_06.jpg"/>
						<p style="overflow: hidden;height: 30px" class="price">￥{{$val['price']}}</p>
						<p style="overflow: hidden;height: 30px" class="name">Giant捷安特{{$val['name']}}</p>
						<p style="overflow: hidden;height: 30px" class="Ename">{{$val['descr']}}</p>
					</a>
				</li>
				@endforeach
			</ul>
		</div>
	</div>
	@endforeach
	{{--<div class="list" id="fittings">--}}
		{{--<div class="inner">--}}
			{{--<h3>配件</h3>--}}
			{{--<ul class="clearfix">--}}
				{{--<li><a href="##"><img src="/home/images/product/6.png"/><span><p class="price">$99</p><p class="describe">描述描述描述</p></span></a></li>--}}
				{{--<li><a href="##"><img src="/home/images/product/6.png"/><span><p class="price">$99</p><p class="describe">描述描述描述</p></span></a></li>--}}
				{{--<li><a href="##"><img src="/home/images/product/6.png"/><span><p class="price">$99</p><p class="describe">描述描述描述</p></span></a></li>--}}
				{{--<li><a href="##"><img src="/home/images/product/6.png"/><span><p class="price">$99</p><p class="describe">描述描述描述</p></span></a></li>--}}
				{{--<li><a href="##"><img src="/home/images/product/6.png"/><span><p class="price">$99</p><p class="describe">描述描述描述</p></span></a></li>--}}
				{{--<li><a href="##"><img src="/home/images/product/6.png"/><span><p class="price">$99</p><p class="describe">描述描述描述</p></span></a></li>--}}
				{{--<li><a href="##"><img src="/home/images/product/6.png"/><span><p class="price">$99</p><p class="describe">描述描述描述</p></span></a></li>--}}
			{{--</ul>--}}
		{{--</div>--}}
	{{--</div>--}}
<div class="footer">
    <div class="f_main">
        <div class="inner">
            <dl>
                <dt><a href="company.html">关于我们</a></dt>
                <dd><a href="##">关于捷安达</a></dd>
                <dd><a href="##">捷安达影像</a></dd>
                <dd><a href="##">捷安达文化</a></dd>
            </dl>
            <dl>
                <dt><a href="product_center.html">产品中心</a></dt>
                <dd><a href="##">产品分类</a></dd>
                <dd><a href="##">热销产品</a></dd>
                <dd><a href="##">新品上线</a></dd>
            </dl>
            <dl>
                <dt><a href="news_center.html">新闻资讯</a></dt>
                <dd><a href="##">企业讯息</a></dd>
                <dd><a href="##">最新案例</a></dd>
                <dd><a href="##">企业文化</a></dd>
            </dl>
            <dl>
                <dt><a href="product_center.html">企业产品</a></dt>
                <dd><a href="##">产品讯息</a></dd>
                <dd><a href="##">最新案例</a></dd>
            </dl>
            <dl>
                <dt><a href="##">销售网点</a></dt>
                <dd><a href="##">深圳网点</a></dd>
                <dd><a href="##">成都网点</a></dd>
                <dd><a href="##">重庆网点</a></dd>
            </dl>
            <dl class="last">
                <dt><a href="##">订阅我们</a></dt>
                <dd><a href="##">第一时间了解企业资讯</a></dd>
                <dd><input type="text" placeholder="请输入您的邮箱"/><a href="##" class="arrow">></a></dd>
            </dl>
        </div>
    </div>
    <div class="bot">
        <div class="inner">
            <ul class="copy clearfix">
                <li>服务条款<span>|</span></li>
                <li>隐私政策<span>|</span></li>
                <li>版权所有<span></span></li>
            </ul>
            <div class="bei">蜀ICP备11014931号</div>
            <ul class="icon">
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </div>
    </div>
</div>
</body>
</html>

<!DOCTYPE html>


<?php
	include 'database/config.php';
	$getProd = "SELECT *
FROM product
INNER JOIN img ON img.prodId = product.id";
;
$result = mysqli_query($connect, $getProd);



?>


<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Shoes Shop</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
		<!-- bootstrap -->
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">      
		<link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
		
		<link href="themes/css/bootstrappage.css" rel="stylesheet"/>
		
		<!-- global styles -->
		<link href="themes/css/flexslider.css" rel="stylesheet"/>
		<link href="themes/css/main.css" rel="stylesheet"/>

		<!-- scripts -->
		<script src="themes/js/jquery-1.7.2.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>				
		<script src="themes/js/superfish.js"></script>	
		<script src="themes/js/jquery.scrolltotop.js"></script>
		<!--[if lt IE 9]>			
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<script src="js/respond.min.js"></script>
		<![endif]-->
	</head>
    <body>		
		<div id="top-bar" class="container">
			<div class="row">
				<div class="span4">
					<form method="POST" class="search_form">
						<input type="text" class="input-block-level search-query" Placeholder="">
					</form>
				</div>
				<div class="span8">
					<div class="account pull-right">
						<ul class="user-menu">				
							<li><a href="#">Tài Khoản</a></li>
							<li><a href="cart.html">Giỏ Hàng</a></li>
							<li><a href="checkout.html">Kiểm Tra</a></li>					
							<li><a href="register.php">Đăng nhập</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div id="wrapper" class="container">
			<section class="navbar main-menu">
				<div class="navbar-inner main-menu">				
					<a href="index.php" class="logo pull-left"><img src="themes/images/rsz_logo-200x200_0.png" class="site_logo" alt=""></a>
					<nav id="menu" class="pull-right">
						<ul>
							<li><a href="./products.html">Rick Owens</a>					
								<ul>
									<li><a href="./products.html">Rick Owens Chrome Hearts Geobasket</a></li>									
									<li><a href="./products.html">Rick Owens Adidas</a></li>
									<li><a href="./products.html">Rick Owens Adidas Tech Runner</a></li>									
								</ul>
							</li>															
							<li><a href="./products.html">Nike</a></li>			
							<li><a href="./products.html">Dr.Martin</a>
								<ul>									
									<li><a href="./products.html">Snearker</a></li>
									<li><a href="./products.html">Giày Tây</a></li>
									<li><a href="./products.html">Giày Boot</a></li>
								</ul>
							</li>							
							<li><a href="./products.html">Túi Xách</a></li>
							<li><a href="./products.html">Best Seller</a></li>
							<li><a href="./products.html">Top Seller</a></li>
						</ul>
					</nav>
				</div>
			</section>
			<section  class="homepage-slider" id="home-slider">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<img src="themes/images/carousel/banner-1.jpg" alt="" />
						</li>
						<li>
							<img src="themes/images/carousel/rsz_new-shoes-banner.jpg" alt="" />
							<div class="intro">
								<h1>Mid season sale</h1>
								<p><span>Up to 50% Off</span></p>
								<p><span>On selected items online and in stores</span></p>
							</div>
						</li>
					</ul>
				</div>			
			</section>
			<section class="header_text">
				We stand for top quality templates. Our genuine developers always optimized bootstrap commercial templates. 
				<br/>Don't miss to use our cheap abd best bootstrap templates.
			</section>
			<section class="main-content">
				<div class="row">
					<div class="span12">													
						<div class="row">
							<div class="span12">
								<h4 class="title">
									<span class="pull-left"><span class="text"><span class="line">Feature <strong>Products</strong></span></span></span>
									<span class="pull-right">
										<a class="left button" href="#myCarousel" data-slide="prev"></a><a class="right button" href="#myCarousel" data-slide="next"></a>
									</span>
								</h4>
								<div id="myCarousel" class="myCarousel carousel slide">
									<div class="carousel-inner">
										<div class="active item">
											<ul class="thumbnails">
                                                <?php
                                                if (isset($result) && mysqli_num_rows($result) > 0) {
                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                        echo "
                                                        <li class=\"span3\">
													    <div class=\"product-box\">
														<span class=\"sale_tag\"></span>
														<p><a href=\"product_detail.html\"><img src=\"${row['url']}\" alt=\"\" /></a></p>
														<a href=\"product_detail.html\" class=\"title\">${row['title']}</a><br/>
														<a href=\"products.html\" class=\"category\">Commodo consequat</a>
														<p class=\"price\">$17.25</p>
													</div>
												    </li>
                                                        ";
                                                    }
                                                }
                                                ?>
											</ul>
										</div>
									</div>							
								</div>
							</div>						
						</div>
						<br/>
						<div class="row">
							<div class="span12">
								<h4 class="title">
									<span class="pull-left"><span class="text"><span class="line">Latest <strong>Products</strong></span></span></span>
									<span class="pull-right">
										<a class="left button" href="#myCarousel-2" data-slide="prev"></a><a class="right button" href="#myCarousel-2" data-slide="next"></a>
									</span>
								</h4>
								<div id="myCarousel-2" class="myCarousel carousel slide">
									<div class="carousel-inner">
										<div class="active item">
											<ul class="thumbnails">												
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>
														<p><a href="product_detail.html"><img src="themes/images/cloth/rsz_1rick-owens-drkshdw-blue-ramones-sneaker-coated-denim-black-product-1-17114388-1-406682072-normal_large_flex.jpg" alt="" /></a></p>
														<a href="product_detail.html" class="title">Ut wisi enim ad</a><br/>
														<a href="products.html" class="category">Commodo consequat</a>
														<p class="price">$25.50</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="product_detail.html"><img src="themes/images/cloth/rsz_1thumbnail.jpg" alt="" /></a></p>
														<a href="product_detail.html" class="title">Quis nostrud exerci tation</a><br/>
														<a href="products.html" class="category">Quis nostrud</a>
														<p class="price">$17.55</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="product_detail.html"><img src="themes/images/cloth/rsz_1adidas-x-rick-owens-bộ-sưu-tập-thu-Đông-2015-1.jpg" alt="" /></a></p>
														<a href="product_detail.html" class="title">Know exactly turned</a><br/>
														<a href="products.html" class="category">Quis nostrud</a>
														<p class="price">$25.30</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="product_detail.html"><img src="themes/images/cloth/rsz_1adidas_rick_owens_runners_-_aq2824_-_fox_orange-2.jpg" alt="" /></a></p>
														<a href="product_detail.html" class="title">You think fast</a><br/>
														<a href="products.html" class="category">World once</a>
														<p class="price">$25.60</p>
													</div>
												</li>
											</ul>
										</div>
										<div class="item">
											<ul class="thumbnails">
												<li class="span3">
													<div class="product-box">
														<p><a href="product_detail.html"><img src="themes/images/cloth/rsz_2vifash_43bf11f1fed9b1630192a1eb886a8233.jpg" alt="" /></a></p>
														<a href="product_detail.html" class="title">Know exactly</a><br/>
														<a href="products.html" class="category">Quis nostrud</a>
														<p class="price">$45.50</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="product_detail.html"><img src="themes/images/cloth/rsz_1rick-owen-drkshdw-shoes-haven-5.jpg" alt="" /></a></p>
														<a href="product_detail.html" class="title">Ut wisi enim ad</a><br/>
														<a href="products.html" class="category">Commodo consequat</a>
														<p class="price">$33.50</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="product_detail.html"><img src="themes/images/cloth/rsz_1adidas-x-rick-owens-bộ-sưu-tập-thu-Đông-2015-11.jpg" alt="" /></a></p>
														<a href="product_detail.html" class="title">You think water</a><br/>
														<a href="products.html" class="category">World once</a>
														<p class="price">$45.30</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="product_detail.html"><img src="themes/images/cloth/rsz_1adidas-x-rick-owens-bộ-sưu-tập-thu-Đông-2015-5.jpg" alt="" /></a></p>
														<a href="product_detail.html" class="title">Quis nostrud exerci</a><br/>
														<a href="products.html" class="category">Quis nostrud</a>
														<p class="price">$25.20</p>
													</div>
												</li>																																	
											</ul>
										</div>
									</div>							
								</div>
							</div>						
						</div>
						<div class="row feature_box">						
							<div class="span4">
								<div class="service">
									<div class="responsive">	
										<img src="themes/images/feature_img_2.png" alt="" />
										<h4>MODERN <strong>DESIGN</strong></h4>
										<p>Lorem Ipsum is simply dummy text of the printing and printing industry unknown printer.</p>									
									</div>
								</div>
							</div>
							<div class="span4">	
								<div class="service">
									<div class="customize">			
										<img src="themes/images/feature_img_1.png" alt="" />
										<h4>FREE <strong>SHIPPING</strong></h4>
										<p>Lorem Ipsum is simply dummy text of the printing and printing industry unknown printer.</p>
									</div>
								</div>
							</div>
							<div class="span4">
								<div class="service">
									<div class="support">	
										<img src="themes/images/feature_img_3.png" alt="" />
										<h4>24/7 LIVE <strong>SUPPORT</strong></h4>
										<p>Lorem Ipsum is simply dummy text of the printing and printing industry unknown printer.</p>
									</div>
								</div>
							</div>	
						</div>		
					</div>				
				</div>
			</section>
			<section class="our_client">
				<h4 class="title"><span class="text">Manufactures</span></h4>
				<div class="row">					
					<div class="span2">
						<a href="#"><img alt="" src="themes/images/logo/rsz_2cc36f0fe87895df1d3925dbb7c6603a9.jpg"></a>
					</div>
					<div class="span2">
						<a href="#"><img alt="" src="themes/images/logo/rsz_190810adidas01.jpg"></a>
					</div>
					<div class="span2">
						<a href="#"><img alt="" src="themes/images/logo/rsz_converse-all-star.png"></a>
					</div>
					<div class="span2">
						<a href="#"><img alt="" src="themes/images/logo/rsz_dr_martens_logo_28842.jpg"></a>
					</div>
					<div class="span2">
						<a href="#"><img alt="" src="themes/images/logo/3.png"></a>
					</div>
					<div class="span2">
						<a href="#"><img alt="" src="themes/images/logo/rsz_nike-logo-47a65a59d5-seeklogocom.png"></a>
					</div>
				</div>
			</section>
			<section id="footer-bar">
				<div class="row">
					<div class="span3">
						<h4>Hướng Dẫn</h4>
						<ul class="nav">
							<li><a href="./index.php">Trang Chủ</a></li>
							<li><a href="./about.html">Nhận xét về chúng tôi</a></li>
							<li><a href="./contact.html">Liên Hệ Chúng Tôi</a></li>
							<li><a href="./cart.html">Giỏ Hàng</a></li>
							<li><a href="./register.php">Đăng Nhập</a></li>
						</ul>					
					</div>
					<div class="span4">
						<h4>Tài Khoản</h4>
						<ul class="nav">
							<li><a href="#">Tài Khoản</a></li>
							<li><a href="#">Lịch Sử Hóa Đơn</a></li>
							<li><a href="#">Danh Sách Yêu Thích</a></li>
							<li><a href="#">Bản Tin</a></li>
						</ul>
					</div>
					<div class="span5">
						<p class="logo"><img src="themes/images/logo.png" class="rsz_logo-200x200_0.png" alt=""></p>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. the  Lorem Ipsum has been the industry's standard dummy text ever since the you.</p>
						<br/>
						<span class="social_icons">
							<a class="facebook" href="#">Facebook</a>
							<a class="twitter" href="#">Twitter</a>
							<a class="skype" href="#">Skype</a>
							<a class="vimeo" href="#">Vimeo</a>
						</span>
					</div>					
				</div>	
			</section>
			<section id="copyright">
				<span>Số 8,Mã Mây,Hoàn Kiếm,Hà Nội.</span>
			</section>
		</div>
		<script src="themes/js/common.js"></script>
		<script src="themes/js/jquery.flexslider-min.js"></script>
		<script type="text/javascript">
			$(function() {
				$(document).ready(function() {
					$('.flexslider').flexslider({
						animation: "fade",
						slideshowSpeed: 4000,
						animationSpeed: 600,
						controlNav: false,
						directionNav: true,
						controlsContainer: ".flex-container" // the container that holds the flexslider
					});
				});
			});
		</script>
    </body>
</html>
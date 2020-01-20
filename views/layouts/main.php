<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <!--fonts-->
	<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
    <!--//fonts-->    
</head>
<body>
<?php $this->beginBody() ?>
<!--header-->
<div class="header">
	<div class="header-top">
		<div class="container">
			<div class="search">
					<form>
						<input type="text" value="Search " onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
						<input type="submit" value="Go">
					</form>
			</div>
			<div class="header-left">		
					<ul>
						<li ><a href="login.html"  >Вход</a></li>
						<li><a  href="register.html"  >Регистрация</a></li>
					</ul>
					<div class="cart box_1">
						<a href="checkout.html">
						<h3> <div class="total">
								<span>0,00 грн.</span> (<span>0</span> товаров)
							</div>
							<img src="images/cart.png" alt=""/>
						</h3>
						</a>						
					</div>
					<div class="clearfix"> </div>
			</div>
				    <div class="clearfix"> </div>
		</div>
	</div>
		<div class="container">
			<div class="head-top">
				<div class="logo">
					<a href="index.html"><img src="images/logo1.png" style="width: 80px; height: 80px;" alt=""></a>	
				</div>
				<div class=" h_menu4">
						<ul class="memenu skyblue">
							<li class="active grid"><a class="color8" href="index.html">Главная</a></li>	
							<li><a class="color1" href="#">Все товары</a></li>
							<li class="grid"><a class="color2" href="#">Категории товаров</a>
								<div class="mepanel">
								<div class="row">
									<div class="col1">
										<div class="h_nav">
											<ul>
												<li><a href="products.html">Accessories</a></li>
												<li><a href="products.html">Bags</a></li>
												<li><a href="products.html">Caps & Hats</a></li>
												<li><a href="products.html">Hoodies & Sweatshirts</a></li>
												<li><a href="products.html">Jackets & Coats</a></li>
												<li><a href="products.html">Jeans</a></li>
												<li><a href="products.html">Jewellery</a></li>
												<li><a href="products.html">Jumpers & Cardigans</a></li>
												<li><a href="products.html">Leather Jackets</a></li>
												<li><a href="products.html">Long Sleeve T-Shirts</a></li>
												<li><a href="products.html">Loungewear</a></li>
											</ul>	
										</div>							
									</div>
									<div class="col1">
										<div class="h_nav">
											<ul>
												<li><a href="products.html">Shirts</a></li>
												<li><a href="products.html">Shoes, Boots & Trainers</a></li>
												<li><a href="products.html">Shorts</a></li>
												<li><a href="products.html">Suits & Blazers</a></li>
												<li><a href="products.html">Sunglasses</a></li>
												<li><a href="products.html">Sweatpants</a></li>
												<li><a href="products.html">Swimwear</a></li>
												<li><a href="products.html">Trousers & Chinos</a></li>
												<li><a href="products.html">T-Shirts</a></li>
												<li><a href="products.html">Underwear & Socks</a></li>
												<li><a href="products.html">Vests</a></li>
											</ul>	
										</div>							
									</div>									
								</div>
							</div>
						</li>
						<li><a class="color4" href="blog.html">Наш блог</a></li>				
						<li><a class="color6" href="contact.html">Написать нам</a></li>
					</ul> 
				</div>				
				<div class="clearfix"> </div>
			</div>
		</div>
		</div>
	<div class="banner">
		<div class="container">			   
			<div  id="top" class="callbacks_container">
			<ul class="rslides" id="slider">
			    <li>		
					<div class="banner-text">
						<h3>Эко изделия из дерева</h3>
					<p>Наши товары сделаны из экологичекси чистого дерева бла бла, что в своюю очередь не даст вам бла бла отбросить копыта от токсичных дешовых китайских подделок..</p>
					<a href="about.html">Узать больше</a>
					</div>
				</li>
				<li>					
					<div class="banner-text">
						<h3>Только Handmade </h3>
					<p>Все деревяшки сделаны исключительно ручкамис душой человеками, а не бездушными машинами, готовящимся к восстанию против человечества.</p>
					<a href="about.html">Узать больше</a>
					</div>					
				</li>
				<li>
					<div class="banner-text">
					<h3>Дизайн и механника</h3>
					<p>Все дерквянные изделия бла бла бла сделаны по уникальной технологиии бла бла...развивает, умиляет, доставляет. бла бла бла бла бла бла.</p>
					<a href="about.html">Узать больше</a>
					</div>					
				</li>
			</ul>
		</div>
	</div>
	</div>

    <?=$content?>

	<div class="content-bottom">
		<ul>
			<li><a href="#"><img class="img-responsive" src="images/lo.png" alt=""></a></li>
			<li><a href="#"><img class="img-responsive" src="images/lo1.png" alt=""></a></li>
			<li><a href="#"><img class="img-responsive" src="images/lo2.png" alt=""></a></li>
			<li><a href="#"><img class="img-responsive" src="images/lo3.png" alt=""></a></li>
			<li><a href="#"><img class="img-responsive" src="images/lo4.png" alt=""></a></li>
			<li><a href="#"><img class="img-responsive" src="images/lo5.png" alt=""></a></li>
		<div class="clearfix"> </div>
		</ul>
	</div>
</div>
<div class="footer">
	<div class="container">
		<div class="footer-top-at">			
			<div class="col-md-4 amet-sed">
				<h4>MORE INFO</h4>
				<ul class="nav-bottom">
					<li><a href="#">How to order</a></li>
					<li><a href="#">FAQ</a></li>
					<li><a href="contact.html">Location</a></li>
					<li><a href="#">Shipping</a></li>
					<li><a href="#">Membership</a></li>	
				</ul>	
			</div>
			<div class="col-md-4 amet-sed ">
				<h4>CONTACT US</h4>			
				<p>Contrary to popular belief</p>
				<p>The standard chunk</p>
				<p>office:  +12 34 995 0792</p>
				<ul class="social">
					<li><a href="#"><i> </i></a></li>						
					<li><a href="#"><i class="twitter"> </i></a></li>
					<li><a href="#"><i class="rss"> </i></a></li>
					<li><a href="#"><i class="gmail"> </i></a></li>					
				</ul>
			</div>
			<div class="col-md-4 amet-sed">
				<h4>Newsletter</h4>
				<p>Sign Up to get all news update and promo</p>
				<form>
					<input type="text" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
					<input type="submit" value="Sign up">
				</form>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<div class="footer-class">
		<p >© 2015 New store All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
	</div>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

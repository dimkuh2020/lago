<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use  yii\web\Session;

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
						<a href="#" onclick="getCart()">						
						<h3>
						<img src="/images/cart.png" alt=""/>
							<?php if (!empty(Yii::$app->session['cart'])):?>
							<div class="total">
								<span><?=round(Yii::$app->session['cart.sum'], 2)?> грн.</span> (<span><?=Yii::$app->session['cart.qty']?></span> товаров)
							</div>						
							<?php else:?>
							<div class="total">
								<span>0,00 грн.</span> (<span>0</span> товаров)
							</div>
							<?php endif;?>

						</h3>
						</a>						
					</div>
					<div class="clearfix"> </div>
			</div>
				    <div class="clearfix"> </div>
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
<?php
\yii\bootstrap\Modal::begin([
    'header' => '<h2>Ваша корзина</h2>',
    'id' => 'cart',
	'size' => 'modal-lg',	
    'footer' => '<center><button type="button" class="btn btn-default" data-dismiss="modal" style="margin-bottom: 5px;">Продолжить покупки</button>
                <a href="' . \yii\helpers\Url::to(['cart/view']) .'" class="btn btn-success" style="margin-bottom: 5px;">Оформить заказ</a>
                <button type="button" class="btn btn-danger" style="margin-bottom: 5px;" onclick="clearCart()">Очистить корзину</button></center>',

]);

\yii\bootstrap\Modal::end();
?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

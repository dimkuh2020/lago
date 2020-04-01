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
use yii\helpers\Url;

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
					<form action="<?=Url::to(['category/search'])?>" method="get">
						<input type="text" placeholder="Поиск" name="q">
						<input type="submit" value="Найти">
					</form>
			</div>
			<div class="header-left">		
					<ul>
					<?php if(Yii::$app->user->identity->email == 'admin@lago.net'):?>
						<li><a type="button" style="margin-bottom: -15px; margin-top: -15px;" class ="btn btn-success" href="<?=Url::to(['/admin'])?>">Админка</a></li>
					<?php endif;?>
					<?php if(Yii::$app->user->isGuest):?>
						<li ><a href="<?=Url::to(['/site/login'])?>"  >Вход</a></li>
					<?php endif;?>	
					<?php if(!Yii::$app->user->isGuest):?> <!--показываем сылку на выход если не гость-->
						<li><a href="<?=Url::to(['/site/logout'])?>"><?=Yii::$app->user->identity['name']?> (Выход)</a></li>
					<?php endif;?>
					<?php if(Yii::$app->user->isGuest):?>
						<li><a  href="<?=Url::to(['/site/signup'])?>"  >Регистрация</a></li>
					<?php endif;?>
					</ul>
					<?php if(Yii::$app->user->identity->email != 'admin@lago.net'):?>
					<div class="cart box_1">
						<a href="#" onclick="getCart()">						
						<h3>
							<div class="total">
								<span>Корзина</span>
							</div>
						<img src="/images/cart.png" alt=""/>							
						</h3>
						</a>						
					</div>
					<?php endif;?>
					<div class="clearfix"> </div>
			</div>
				    <div class="clearfix"> </div>
		    </div>
		</div>
		<?=\app\components\MenuWidget::widget(['tpl' => 'menu'])?>
	</div>
    <br>
    <br>		

    <?=$content?>

<div class="content-bottom">		
	<div class="clearfix"> </div>		
</div>
</div>
<div class="footer">
	<div class="container">
		<div class="footer-top-at">		
			<div class="col-md-6 amet-sed ">
				<h4>НАШИ КОНТАКТЫ</h4>			
				<p>Украина, город Киев</p>
				<p>улица Радужная, 100500 </p>
				<p>телефоны:  +380963552478</p>
				<p>e-mail: lago2020@ukr.net</p>
				<ul class="social">
					<li><a href="#"><i> </i></a></li>						
					<li><a href="#"><i class="twitter"> </i></a></li>
					<li><a href="#"><i class="rss"> </i></a></li>
					<li><a href="#"><i class="gmail"> </i></a></li>					
				</ul>
			</div>			
			<div class="col-md-6 amet-sed">	
				<div style="text-align: center; float: left;">		
					<h4>ОСНОВАТЕЛЬ LaGo</h4>
					
						<a href="https://www.facebook.com/sergey.kosyachenko.5">
							<img src="/images/kos.jpg" class="kos">	
							<p>Sergey Kosyachenko</p>
						</a>
					
				</div>								
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

<?php
use yii\helpers\Html;
use yii\helpers\Url; // подкл хелпер для картинок и т.д.
/* @var $this yii\web\View */
?>
<?php

/* @var $this yii\web\View */

$this->title = 'LaGo';
?>
	</div>
		<?=\app\components\MenuWidget::widget(['tpl' => 'menu'])?>
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
<!--content-->
<div class="content">
	<div class="container">
	<div class="content-top">
		<h1>NEW RELEASED</h1>
		<div class="grid-in">
			<div class="col-md-4 grid-top">
				<a href="single.html" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="/images/pi.jpg" alt="">
					<div class="b-wrapper">
						<h3 class="b-animate b-from-left    b-delay03 ">
							<span>T-Shirt</span>	
						</h3>
					</div>
				</a>
				<p><a href="single.html">Contrary to popular</a></p>
			</div>
			<div class="col-md-4 grid-top">
				<a href="single.html" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="/images/pi1.jpg" alt="">
					<div class="b-wrapper">
						<h3 class="b-animate b-from-left    b-delay03 ">
							<span>Shoe</span>	
						</h3>
					</div>
				</a>
			<p><a href="single.html">classical Latin</a></p>
			</div>
			<div class="col-md-4 grid-top">
				<a href="single.html" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="/images/pi2.jpg" alt="">
					<div class="b-wrapper">
						<h3 class="b-animate b-from-left    b-delay03 ">
							<span>Bag</span>	
						</h3>
					</div>
				</a>
				<p><a href="single.html">undoubtable</a></p>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="grid-in">
			<div class="col-md-4 grid-top">
				<a href="single.html" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="/images/pi3.jpg" alt="">
					<div class="b-wrapper">
						<h3 class="b-animate b-from-left    b-delay03 ">
							<span>Shirt</span>	
						</h3>
					</div>
				</a>
			<p><a href="single.html">suffered alteration</a></p>
			</div>
			<div class="col-md-4 grid-top">
				<a href="single.html" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="/images/pi4.jpg" alt="">
					<div class="b-wrapper">
						<h3 class="b-animate b-from-left    b-delay03 ">
							<span>Bag</span>	
						</h3>
					</div>
				</a>
			    <p><a href="single.html">Content here</a></p>
			</div>
			<div class="col-md-4 grid-top">
				<a href="single.html" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="/images/pi5.jpg" alt="">
					<div class="b-wrapper">
						<h3 class="b-animate b-from-left    b-delay03 ">
							<span>Shoe</span>	
						</h3>
					</div>
				</a>
			<p><a href="single.html">readable content</a></p>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!----->	
	<div class="content-top-bottom">
		<h2>Featured Collections</h2>
		<div class="col-md-6 men">
			<a href="single.html" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="/images/t1.jpg" alt="">
				<div class="b-wrapper">
					<h3 class="b-animate b-from-top top-in   b-delay03 ">
						<span>Lorem</span>	
					</h3>
				</div>
			</a>
		</div>
		<div class="col-md-6">
			<div class="col-md1 ">
				<a href="single.html" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="/images/t2.jpg" alt="">
					<div class="b-wrapper">
						<h3 class="b-animate b-from-top top-in1   b-delay03 ">
							<span>Lorem</span>	
						</h3>
					</div>
				</a>				
			</div>
			<div class="col-md2">
				<div class="col-md-6 men1">
					<a href="single.html" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="/images/t3.jpg" alt="">
						<div class="b-wrapper">
							<h3 class="b-animate b-from-top top-in2   b-delay03 ">
								<span>Lorem</span>	
							</h3>
						</div>
					</a>
				</div>
				<div class="col-md-6 men2">
					<a href="single.html" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="/images/t4.jpg" alt="">
						<div class="b-wrapper">
							<h3 class="b-animate b-from-top top-in2   b-delay03 ">
								<span>Lorem</span>	
							</h3>
						</div>
					</a>					
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="clearfix"> </div>
	</div>
</div>
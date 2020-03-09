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
			<h1>КАТЕГОРИИ ДЕРЕВЯШКЭ</h1>
			<div class="grid-in">
			<?php for($i=0; $i<3; $i++) :?>			
				<div class="col-md-4 grid-top">
					<a href="<?=Url::to(['category/view', 'id' => $result[$i]->id])?>" class="b-link-stripe b-animate-go  thickbox"><?=Html::img("@web/images/products/{$result[$i]->img}", ['class' => 'img-responsive'],  ['alt' => $result[$i]->name])?>
						<div class="b-wrapper">
							<h3 class="b-animate b-from-left    b-delay03 ">
								<span><?=$result[$i]->name;?></span>	
							</h3>
						</div>
					</a>				
				</div>						
			<?php endfor;?>
			</div>
			<div class="clearfix"></div>
			<div class="grid-in">
			<?php for($i=3; $i<6; $i++) :?>			
				<div class="col-md-4 grid-top">
					<a href="<?=Url::to(['category/view', 'id' => $result[$i]->id])?>" class="b-link-stripe b-animate-go  thickbox"><?=Html::img("@web/images/products/{$result[$i]->img}", ['class' => 'img-responsive'],  ['alt' => $result[$i]->name])?>
						<div class="b-wrapper">
							<h3 class="b-animate b-from-left    b-delay03 ">
								<span><?=$result[$i]->name;?></span>	
							</h3>
						</div>
					</a>				
				</div>						
			<?php endfor;?>
			</div>
			<div class="clearfix"></div>
		</div>
	<!----->	
		<div class="content-top-bottom">			
		<div class="col-md-6">
		<br>
			<h2>Новинки</h2>				
				<div class="col-md2">
					<div class="col-md-6 men">
						<a href="single.html" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="/images/products/pres_lovekorobka.jpg" alt="">
							<div class="b-wrapper">
								<h3 class="b-animate b-from-top top-in2   b-delay03 ">
									<span>Lorem</span>	
								</h3>
							</div>
						</a>
					</div>
					<div class="col-md-6 men">
						<a href="single.html" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="/images/products/pres_lovekorobka.jpg" alt="">
							<div class="b-wrapper">
								<h3 class="b-animate b-from-top top-in2   b-delay03 ">
									<span>Lorem</span>	
								</h3>
							</div>
						</a>					
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md2">
					<div class="col-md-6 men">
						<a href="single.html" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="/images/products/pres_lovekorobka.jpg" alt="">
							<div class="b-wrapper">
								<h3 class="b-animate b-from-top top-in2   b-delay03 ">
									<span>Lorem</span>	
								</h3>
							</div>
						</a>
					</div>
					<div class="col-md-6 men">
						<a href="single.html" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="/images/products/pres_lovekorobka.jpg" alt="">
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
			<div class="col-md-6">
			<br>
			<h2>Хит продаж</h2>				
				<div class="col-md2">
					<div class="col-md-6 men">
						<a href="single.html" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="/images/products/tel_flower.jpg" alt="">
							<div class="b-wrapper">
								<h3 class="b-animate b-from-top top-in2   b-delay03 ">
									<span>Lorem</span>	
								</h3>
							</div>
						</a>
					</div>
					<div class="col-md-6 men">
						<a href="single.html" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="/images/products/tel_flower.jpg" alt="">
							<div class="b-wrapper">
								<h3 class="b-animate b-from-top top-in2   b-delay03 ">
									<span>Lorem</span>	
								</h3>
							</div>
						</a>					
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md2">
					<div class="col-md-6 men">
						<a href="single.html" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="/images/products/tel_flower.jpg" alt="">
							<div class="b-wrapper">
								<h3 class="b-animate b-from-top top-in2   b-delay03 ">
									<span>Lorem</span>	
								</h3>
							</div>
						</a>
					</div>
					<div class="col-md-6 men">
						<a href="single.html" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="/images/products/tel_flower.jpg" alt="">
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
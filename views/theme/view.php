<?php
use yii\helpers\Html; // подкл хелпер для картинок и т.д.
use yii\helpers\Url;
/* @var $this yii\web\View */
?>

</div>
	<?=\app\components\MenuWidget::widget(['tpl' => 'menu'])?>
	</div>
		<div class="product">
			<div class="container">
				<div class="col-md-3 product-price">                      
                    <div class="product-bottom">
                        <div class="of-left-in">
                            <h3 class="best">Топ продажи</h3>                            
                        </div>
                        <div class="product-go">
                            <div class=" fashion-grid">
                                <a href="single.html"><img class="img-responsive " src="/images/p1.jpg" alt=""></a>
                            </div>
                            <div class=" fashion-grid1">
                                <h6 class="best2"><a href="single.html">тут кидаеи всякую рекламу по выбранной категории</a></h6>                    
                                <span class=" price-in1"> $40.00</span>
                            </div>                    
                            <div class="clearfix"></div>
                        </div>
                        <div class="product-go">
                            <div class=" fashion-grid">
                                <a href="single.html"><img class="img-responsive " src="/images/p1.jpg" alt=""></a>
                            </div>
                            <div class=" fashion-grid1">
                                <h6 class="best2"><a href="single.html" >и тут тоже....</a></h6>                    
                                <span class=" price-in1"> $40.00</span>
                            </div>
                            <div class="clearfix"></div>
                        </div> 
                    </div>
                   тут создать виджет по слайдеру цены-->                        
                </div>
        <div class="col-md-9 product1">
            <div class="bottom-product">
            <div class="row" style="padding-bottom: 20px;">
                <div class="col-sm-2" style="text-align: center;">
                    <!--пустой див для центровки-->
                </div> 
                <div class="col-md-8" style="text-align: center;">
                    <h3><?=$theme->name?></h3>
                </div>
                <div class="col-sm-2" style="text-align: center;">
                    <h3>виджет</h3> 
                </div>               
            </div>
        <?php if(!empty($products)) :?>   <!--если есть продукты в массиве-->
        <?php $i=0; foreach($products as $product) :?>
                <div class="col-sm-4" style="padding-bottom: 15px;">
                    <div>
                        <a href="<?=Url::to(['product/view', 'id' => $product->id])?>"><?=Html::img("@web/images/products/{$product->img}",['class' => 'prodpics'], ['alt' => $product->name])?></a>	
                    </div>
                    <p class="tun"><?=$product->name?></p>
                    <a href="#" class="item_add"><p class="number item_price"><i> </i><?=$product->price?></p></a>					
                </div>
        <?php endforeach;?>                      
            </div>                 
         </div>         
<?php else :?>	
    <h2>Здесь товаров пока нет.....</h2>
<?php endif;?>				
    </div>
</div>
<nav class="in">
    <?php echo yii\widgets\LinkPager::widget(['pagination' => $pages]);?>
</nav>

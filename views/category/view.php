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
				    <div class=" rsidebar span_1_of_left">
                        <div class="of-left">
                            <h3 class="cate">Categories</h3>
                        </div>
                        <ul class="menu">
                            <li class="item1"><a href="#">Men </a></li>
                            <li class="item2"><a href="#">Women </a></li>
                            <li class="item3"><a href="#">Kids</a></li>
                            <li class="item4"><a href="#">Accesories</a></li>
                            <li class="item4"><a href="#">Shoes</a></li>
                        </ul>
	                </div>
                <div class="product-middle">
                <div class="fit-top">
                    <h6 class="shop-top">Lorem Ipsum</h6>
                    <a href="single.html" class="shop-now">SHOP NOW</a>
                <div class="clearfix"></div>
            </div>
	    </div>	 
        <div class="sellers">
            <div class="of-left-in">
                <h3 class="tag">Tags</h3>
            </div>
            <div class="tags">
                <ul>
                    <li><a href="#">design</a></li>
                    <li><a href="#">fashion</a></li>
                    <li><a href="#">lorem</a></li>
                    <li><a href="#">dress</a></li>
                    <li><a href="#">fashion</a></li>
                    <li><a href="#">dress</a></li>
                    <li><a href="#">design</a></li>
                    <li><a href="#">dress</a></li>
                    <li><a href="#">design</a></li>
                    <li><a href="#">fashion</a></li>
                    <li><a href="#">lorem</a></li>
                    <li><a href="#">dress</a></li>                
                    <div class="clearfix"> </div>
                </ul>        
            </div>                
	    </div>
    <div class="product-bottom">
        <div class="of-left-in">
            <h3 class="best">Best Sellers</h3>
        </div>
        <div class="product-go">
            <div class=" fashion-grid">
                <a href="single.html"><img class="img-responsive " src="/images/p1.jpg" alt=""></a>
            </div>
                <div class=" fashion-grid1">
                    <h6 class="best2"><a href="single.html" >Lorem ipsum dolor sit amet consectetuer</a></h6>                    
                    <span class=" price-in1"> $40.00</span>
                </div>                    
                <div class="clearfix"></div>
            </div>
            <div class="product-go">
                <div class=" fashion-grid">
                    <a href="single.html"><img class="img-responsive " src="/images/p2.jpg" alt=""></a>
                </div>
                <div class="fashion-grid1">
                    <h6 class="best2"><a href="single.html" >Lorem ipsum dolor sit amet consectetuer </a></h6>                
                    <span class=" price-in1"> $40.00</span>
                </div>                    
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class=" per1">
                <a href="single.html" ><img class="img-responsive" src="/images/pro.jpg" alt="">
                <div class="six1">
                    <h4>DISCOUNT</h4>
                    <p>Up to</p>
                    <span>60%</span>
                </div></a>
            </div>
        </div>
        <div class="col-md-9 product1">
        <?php if(!empty($products)) :?>   <!--если есть продукты в массиве-->
        <?php $i=0; foreach($products as $product) :?>
            <div class=" bottom-product">
                <div class="col-md-4 bottom-cd simpleCart_shelfItem">
                    <div class="product-at ">
                        <a href="<?=Url::to(['product/view', 'id' => $product->id])?>"><?=Html::img("@web/images/products/{$product->img}",['class' => 'img-responsive'], ['alt' => $product->name])?></a>	
                    </div>
                    <p class="tun"><?=$product->name?></p>
                    <a href="#" class="item_add"><p class="number item_price"><i> </i><?=$product->price?></p></a>					
                </div>
               
        <?php endforeach;?>
        <?php endif;?>                
            </div>                        
         </div>
         <div class="clearfix"> </div>
         <nav class="in">
            <ul class="pagination">
                <li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                <li><a href="#">2 <span class="sr-only"></span></a></li>
                <li><a href="#">3 <span class="sr-only"></span></a></li>
                <li><a href="#">4 <span class="sr-only"></span></a></li>
                <li><a href="#">5 <span class="sr-only"></span></a></li>
                <li> <a href="#" aria-label="Next"><span aria-hidden="true">»</span> </a> </li>
            </ul>
        </nav>
    </div>
</div>

<?php
use yii\helpers\Html; // подкл хелпер для картинок и т.д.
use yii\helpers\Url;
use yii\bootstrap\Modal;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
?>


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
                                <h6 class="best2"><a href="single.html">тут кидаем всякую рекламу по выбранной категории</a></h6>                    
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
                <div style="margin-bottom: 10px;"></div>
                </div>
                <div class="col-md-9 product-price1">
				    <div class="col-md-5 single-top">	
                        <?=Html::img("@web/images/products/{$product->img}",['class' => 'prodpics'], ['alt' => $product->name])?>
					</div>	
					<div class="col-md-7 single-top-in simpleCart_shelfItem">
						<div class="single-para" style="text-align: center">
                            <h4><?=$product->name?></h4>
                            <h5 class="item_price"><?=$product->price?> грн.</h5>
                            <div style="text-align: left">
                                <p><?=$product->content?></p>
                                <?php if($product->quantity > 0):?>
                                    <p><b>В наличии: </b>Да</p>
                                <?php else:?>
                                    <p><b>В наличии: </b>Нет</p>  
                                <?php endif;?>                          
                                <p><b>Категоря:</b><a href="<?=Url::to(['category/view', 'id' => $product->category->id])?>"> <?=$product->category->name?></a></p> 
                                <span>                                
                                    <label>Количество:</label>
                                    <input type="text" pattern="\d [0-9]" value="1" id="qty" class="qty" /> <!--добваляем id="qty" для передачи на бекенд-->
                                    <a href="<?=Url::to(['cart/add', 'id'=> $product->id])?>" data-id="<?=$product->id?>" class="add-cart item_add"> <!--меняем button на a-->
                                        ДОБАВИТЬ В КОРЗИНУ
                                    </a>
                                </span>                            
                            </div>                           
						</div>
					</div>
				    <div class="clearfix"> </div>
			<!---->
					<div class="cd-tabs">
			            <nav><ul class="cd-tabs-navigation"><!--для масштабирования--></ul></nav>
	                    <ul class="cd-tabs-content">
                        <h5>Отзывы:</h5>
                            <li data-content="television" class="selected">
                                <div class="comments-top-top">
                                    
                                    <?php foreach($comment_result as $res):?>
                                    <div class="top-comment-right">
                                        <h6><a href="#"><?=$res->user?></a> <?=$res->date?></h6>                                        
                                        <p><?=$res->comment?></p>
                                    </div>
                                    <?php endforeach;?>
                                    <div class="clearfix"> </div>
                                    <a class="add-re" href="#" onclick="getComment()">ДОБАВИТЬ ОТЗЫВ</a>                                    
                                </div>      
                            </li>
                            <div class="clearfix"></div>
	                    </ul> 
                    </div> 
		            <div class=" bottom-product">
                        <?php foreach($bottomresult as $res):?>
                        <div class="col-md-4 bottom-cd simpleCart_shelfItem">
                            <div class="product-at ">
                                <a href="<?=Url::to(['product/view', 'id' => $res->id])?>"><?=Html::img("@web/images/products/{$res->img}",['class' => 'prodpics'], ['alt' => $res->name])?></a>	
                            </div>
                            <p class="tun"><?=$res->name?></p>
                            <a href="<?=Url::to(['cart/add', 'id'=> $res->id])?>" data-id="<?=$res->id?>" class="item_add"><p class="number item_price"><i> </i><?=$res->price?></p></a>
                        </div>
                        <?php endforeach;?>
                        <div class="clearfix"> </div>
				    </div>
                </div> 
		        <div class="clearfix"> </div>
		    </div>
		</div>

<?php
    Modal::begin([
        'header' => '<h2>' . $user .'</h2>',
        'id' => 'comment',
        'size' => 'modal-sm', 
    ]);
?>
<?php $form = ActiveForm::begin(['id' => 'Comment'])?>
      <div>
        <?= $form->field($comment, 'comment')->textarea(['style' => 'height: 120px; width: 100%; resize: none;'])?>
      </div> 
      <?= Html::submitButton('Добавить отзыв', ['class' => 'btn btn-success'])?>
<?php ActiveForm::end();?>
<?php Modal::end();?>
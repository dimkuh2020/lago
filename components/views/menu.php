<?php use yii\helpers\Url;?>

<div class="container">
        <div class="head-top">
            <div class="logo">
                <a href="/"><img src="/images/logo1.png" style="width: 80px; height: 80px;" alt=""></a>	
            </div>
            <div class=" h_menu4">
                    <ul class="memenu skyblue">
                        <li class="active grid"><a class="color8" href="/">Главная</a></li>	
                        <li><a class="color1" href="<?=Url::to(['product/index'])?>">Все товары</a></li>
                        <li class="grid"><a class="color2" href="#">Категории товаров</a>
                        <div class="mepanel">
                            <div class="row">
                                <div class="col1">
                                    <div class="h_nav">
                                        <h4>Товары по виду</h4>
                                        <ul>
                                            <?php foreach($categories as $category): ?>
                                                <li><a href="<?=Url::to(['category/view', 'id' => $category['id']])?>">
                                                    <?=$category['name'];?></a>
                                                </li>
                                            <?php endforeach;?>												
                                        </ul>	
                                    </div>							
                                </div>
                                <div class="col1">
                                    <div class="h_nav">
                                    <h4>Товары по теме</h4>
                                        <ul>
                                            <?php foreach($themes as $theme): ?>
                                            <li><a href="<?=Url::to(['theme/view', 'id' => $theme['id']])?>">
                                                    <?=$theme['name'];?></a>
                                                </li>
                                            <?php endforeach;?>												
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
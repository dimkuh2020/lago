<?php
use yii\helpers\Html;
use yii\helpers\Url;
?>
</div>
	<?=\app\components\MenuWidget::widget(['tpl' => 'menu'])?>
    </div>
    <br>
    <br>

    <div class="container">
        <div class="row" style="text-align: center">
            <div class="col-md-4">
                <a type="button" style="width: 130px" class ="btn btn-primary" href="<?=Url::to(['/admin/product/index'])?>">Товары</a>
            </div>
            <div class="col-md-4">
            <a type="button" style="width: 130px" class ="btn btn-primary" href="<?=Url::to(['/admin/category/index'])?>">Категории</a>
            </div>
            <div class="col-md-4">
            <a type="button" style="width: 130px" class ="btn btn-primary" href="<?=Url::to(['/admin/order/index'])?>">Заказы</a>
            </div>
        </div>
    </div>

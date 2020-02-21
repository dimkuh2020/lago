<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
?>

</div>
	<?=\app\components\MenuWidget::widget(['tpl' => 'menu'])?>
	</div>
<div class="container">
<!--вывод флеш-сообщений-->
<?php if( Yii::$app->session->hasFlash('success') ): ?>
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <?php echo Yii::$app->session->getFlash('success'); ?>
        </div>
    <?php endif;?>

    <?php if( Yii::$app->session->hasFlash('error') ): ?>
        <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <?php echo Yii::$app->session->getFlash('error'); ?>
        </div>
    <?php endif;?>
    <?php if(!empty($session['cart'])): ?>    
        <div class="table-bordered" style="margin:10px 0px 10px 0px;">
            <table class="table">
                <thead>
                    <tr>
                        <th  style="text-align: center;">Фото</th>
                        <th  style="text-align: center;">Наименование</th>
                        <th  style="text-align: center;">Кол-во</th>                    
                    </tr>
                </thead>
                <tbody>
                <?php foreach($session['cart'] as $id => $item):?>            
                    <tr style="text-align: center;">
                        <td><?= \yii\helpers\Html::img("@web/images/products/{$item['img']}", ['alt' => $item['name'], 'height' => 70])?></td>
                        <td><h5><a href="<?= Url::to(['product/view', 'id' => $id])?>"><?=$item['name']?></a></h5></td>
                        <td><h5><?=$item['qty']?></h5></td>                    
                    </tr>
                <?php endforeach;?>
                </tbody>
            </table>
            <hr/>
            <table class="table table-borderless">
                <tbody>
                    <tr>                
                        <td colspan="4" style="margin-top: 3%; border: 0px;"><h4>Всего товаров:</h4></td>
                        <td style="text-align: center; float: right; border: 0px;"><h4><?=$session['cart.qty']?></h4></td>
                    </tr>
                    <tr>                
                        <td colspan="4" style="border: 0px;"><h4>На сумму: </h4></td>
                        <td style="text-align: center; float: right; border: 0px;"><h4><?=$session['cart.sum']?> грн.</h4></td>
                    </tr>
                </tbody>
            </table>
        </div>
        
        <?php $form = ActiveForm::begin()?>
            <?= $form->field($order, 'name')?>
            <?= $form->field($order, 'email')?>
            <?= $form->field($order, 'phone')?>
            <?= $form->field($order, 'address')?>
            <?= Html::submitButton('Заказать', ['class' => 'btn btn-success'])?>
        <?php ActiveForm::end()?>
    <?php else: ?>
        <h3>Корзина пуста</h3>
    <?php endif;?>
</div>
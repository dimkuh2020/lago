<?php if (!empty($session['cart'])):?>
    <div class="table-responsive">
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th  style="text-align: center;">Фото</th>
                    <th  style="text-align: center;">Наименование</th>
                    <th  style="text-align: center;">Количество</th>
                    <th  style="text-align: center;">Цена</th>
                    <th  style="text-align: center;">Удалить</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($session['cart'] as $id => $item):?>
                <tr style="text-align: center;">
                    <td><?= \yii\helpers\Html::img("@web/images/products/{$item['img']}", ['alt' => $item['name'], 'height' => 70])?></td>
                    <td><?=$item['name']?></td>
                    <td>
                        <button data-id="<?=$id?>" data-qty="<?=$item['qty']?>"class="minus-item">-</button>
                        <?=$item['qty']?>
                        <button data-id="<?=$id?>" class="plus-item">+</button></td>
                    <td><?=$item['price']?> грн.</td>
                    <td><span data-id="<?=$id?>" class="glyphicon glyphicon-remove text-danger del-item" aria-hidden="true" style="cursor: pointer;"></span></td>
                </tr>
            <?php endforeach;?>
            </tbody>
        </table>
    </div>

    <div>
        <table class="table table-borderless">
            <tbody>
                <tr>                
                    <td colspan="4" style="margin-top: 3%; border: 0px;"><h4>Всего товаров:</h4></td>
                    <td style="text-align: center; float: right; border: 0px;"><h4><?=$session['cart.qty']?></h4></td>
                </tr>
                <tr>                
                    <td colspan="4" style="border: 0px;"><h4>На сумму: </h4></td>
                    <td style="text-align: center; float: right; border: 0px;"><h4><?=round($session['cart.sum'], 2)?> грн.</h4></td>
                </tr>
            </tbody>
        </table>
    </div>

<?php else:?>
    <h3>Корзина пуста!</h3>
<?php endif;?>
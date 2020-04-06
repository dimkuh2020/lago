<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Order */

$this->title = "Заказ №" . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Orders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>


    <br>
    

    <div class="container">
        <div class="row" style="text-align: center;">
            <div class="col-md-3">
                <a type="button" style="width: 130px; margin-bottom: 20px" class ="btn btn-primary" href="<?=Url::to(['/admin/product/index'])?>">Товары</a>
            </div>
            <div class="col-md-3">
                <a type="button" style="width: 130px; margin-bottom: 20px" class ="btn btn-primary" href="<?=Url::to(['/admin/category/index'])?>">Категории</a>
            </div>
            <div class="col-md-3">
                <a type="button" style="width: 130px; margin-bottom: 20px" class ="btn btn-primary" href="<?=Url::to(['/admin/theme/index'])?>">Темы</a>
            </div>
            <div class="col-md-3">
                <a type="button" style="width: 130px; margin-bottom: 20px" class ="btn btn-primary" href="<?=Url::to(['/admin'])?>">Заказы</a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="order-view">
            <h1>Информация по заказу № <?= Html::encode($model->id) ?></h1>
            <br>
            <p>
                <?= Html::a('Редактировать', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
                <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
                    'class' => 'btn btn-danger',
                    'data' => [
                        'confirm' => 'Точно удалить этот заказ?',
                        'method' => 'post',
                    ],
                ]) ?>
            </p>
            <br>

            <?= DetailView::widget([
                'model' => $model,
                'attributes' => [
                    //'id',
                    'created_at',
                    //'updated_at',
                    'qty',
                    'sum',
                    [
                        'attribute' => 'status', //для измененний статуса заказов вместо 0/1
                        'value' => function($data){
                            return $data->status ? '<span class="text-danger">Завершён</span>' : '<span class="text-success">Активен</span>';// если  $data->status = 1(true)
                        },
                        'format' => 'html', //для форматирования
                    ],
                    'name',
                    'surname',
                    'email:email',
                    'phone',
                    'address',
                ],
            ]) ?>

    <?php $items =$model->orderItems;?>
    <div class="table-responsive">
        <table class="table table-hover table-striped">
            <thead>
                <tr>                    
                    <th>Наименование</th>
                    <th>Количество</th>
                    <th>Цена</th>
                    <th>Сумма</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($items as $item):?>            
                <tr>                    
                    <td><h5><?=$item['name']?></h5></td>
                    <td><h5><?=$item['qty_item']?></h5></td>
                    <td><h5><?=$item['price']?> грн.</h5></td>
                    <td><h5><?=$item['sum_item']?></h5></td>
                    <td></td>
                </tr>
            <?php endforeach;?>
            </tbody>
        </table>
    </div>           
    </div>
</div>



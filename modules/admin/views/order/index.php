<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Заказы';
$this->params['breadcrumbs'][] = $this->title;
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
    <div class="order-index">
        <div class="container">
            <h1><?= Html::encode($this->title) ?></h1>
            <br>
            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'columns' => [                     
                    'id',
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
                    //'name',
                    //'surname',
                   // 'email:email',
                   // 'phone',
                   // 'address',

                    ['class' => 'yii\grid\ActionColumn'],
                ],
            ]); ?>
        </div>
    </div>

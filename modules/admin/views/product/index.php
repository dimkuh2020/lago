<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Товары';
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
<div class="container">
    <div class="product-index">

        <h1><?= Html::encode($this->title) ?></h1>
        <br>
        <p>
            <?= Html::a('Добавить товар', ['create'], ['class' => 'btn btn-success']) ?>
        </p>


        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'columns' => [ 
                'id',
                'category_id',
                'theme_id',
                'name',
                'content:ntext',
                'price',
                //'keywords',
                //'description',
                [
                    'attribute' => 'img',
                    'format' => 'html',
                    //'label' => 'Image',
                    'value' => function ($data) { // показ картинки
                               return Html::img('/images/products/' . $data->img,
                               ['width' => '80px',
                                'height' => '80px']);
                              },
                ],
                [
                    'attribute' => 'hit', 
                    'value' => function($data){
                        return $data->hit ? '<span class="text-success">Да</span>' : '<span class="text-danger">Нет</span>';
                    },
                    'format' => 'html', //для форматирования
                ],
                [
                    'attribute' => 'new', 
                    'value' => function($data){
                        return $data->new ? '<span class="text-success">Да</span>' : '<span class="text-danger">Нет</span>';
                    },
                    'format' => 'html', //для форматирования
                ],
                [
                    'attribute' => 'sale', 
                    'value' => function($data){
                        return $data->sale ? '<span class="text-success">Да</span>' : '<span class="text-danger">Нет</span>';
                    },
                    'format' => 'html', //для форматирования
                ],
                'quantity',

                ['class' => 'yii\grid\ActionColumn'],
            ],
        ]); ?>

    </div>
</div>

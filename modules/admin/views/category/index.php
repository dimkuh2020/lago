<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Категории';
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
    <div class="category-index">

        <h1><?= Html::encode($this->title) ?></h1>
        <br>

        <p>
            <?= Html::a('Добавить категорию', ['create'], ['class' => 'btn btn-success']) ?>
        </p>


        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'columns' => [ 
                'id',
                'name',
                'keywords',
                'description',
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

                ['class' => 'yii\grid\ActionColumn'],
            ],
        ]); ?>

    </div>
    <br>
    <br>
</div>

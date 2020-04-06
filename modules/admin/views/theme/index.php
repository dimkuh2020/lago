<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Темы';
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
    <div class="theme-index">

        <h1><?= Html::encode($this->title) ?></h1>
        <br>

        <p>
            <?= Html::a('Создать тему', ['create'], ['class' => 'btn btn-success']) ?>
        </p>


        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                'id',
                'name',
                'keywords',
                'description',

                ['class' => 'yii\grid\ActionColumn'],
            ],
        ]); ?>

    </div>
</div>

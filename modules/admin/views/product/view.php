<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Product */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Products', 'url' => ['index']];
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
    <div class="product-view">

        <h1><?= Html::encode($this->title) ?></h1>
        <br>
        <p>
            <?= Html::a('Редактировать', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
            <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => 'Удалить этот товар?',
                    'method' => 'post',
                ],
            ]) ?>
        </p>
        <br>

        <?= DetailView::widget([
            'model' => $model,
            'attributes' => [
                'id',
                [
                    'attribute' => 'category_id',
                    'value' => function($data){ //категории вместо номеров
                        return $data->category->name;
                    } 
                ],
                [
                    'attribute' => 'theme_id',
                    'value' => function($data){ //категории вместо номеров
                        return $data->theme->name;
                    } 
                ],
                'name',
                'content:ntext',
                'price',
                'keywords',
                'description',
                [
                    'attribute' => 'img',
                    'format' => 'html',
                    //'label' => 'Image',
                    'value' => function ($data) { // показ картинки
                               return Html::img('/images/products/' . $data->img,
                               ['width' => '150px',
                                'height' => '150px']);
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
            ],
        ]) ?>
    </div>
</div>

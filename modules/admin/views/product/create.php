<?php

use yii\helpers\Html;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Product */

$this->title = 'Создать новый товар';
$this->params['breadcrumbs'][] = ['label' => 'Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<br>
<div class="container">
    <div class="product-create">

        <h1><?= Html::encode($this->title) ?></h1>

        <?= $this->render('_form', [
            'model' => $model, 'model1' => $model1,
        ]) ?>
    </div>
</div>

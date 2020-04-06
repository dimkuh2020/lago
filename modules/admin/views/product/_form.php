<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Product */
/* @var $form yii\widgets\ActiveForm */
?>
</div>
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
    <div class="product-form">

        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'category_id')->textInput() ?>

        <?= $form->field($model, 'theme_id')->textInput() ?>

        <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'content')->textarea(['rows' => 6]) ?>

        <?= $form->field($model, 'price')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'keywords')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'img')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'hit')->dropDownList([ '0' => 'Нет', '1' => 'Да'])?>

        <?= $form->field($model, 'new')->dropDownList([ '0' => 'Нет', '1' => 'Да']) ?>

        <?= $form->field($model, 'sale')->dropDownList([ '0' => 'Нет', '1' => 'Да']) ?>

        <?= $form->field($model, 'quantity')->textInput() ?>

        <div class="form-group">
            <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
        </div>

        <?php ActiveForm::end(); ?>
    </div>
</div>

<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Order */
/* @var $form yii\widgets\ActiveForm */
?>
</div>
    <div class="container">
        <div class="row" style="text-align: center;">
            <div class="col-md-4">
                <a type="button" style="width: 130px; margin-bottom: 20px" class ="btn btn-primary" href="<?=Url::to(['/admin/product/index'])?>">Товары</a>
            </div>
            <div class="col-md-4">
            <a type="button" style="width: 130px; margin-bottom: 20px" class ="btn btn-primary" href="<?=Url::to(['/admin/category/index'])?>">Категории</a>
            </div>
            <div class="col-md-4">
            <a type="button" style="width: 130px; margin-bottom: 20px" class ="btn btn-primary" href="<?=Url::to(['/admin'])?>">Заказы</a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="order-form">

            <?php $form = ActiveForm::begin(); ?>

            <?= $form->field($model, 'created_at')->textInput() ?>

            <?= $form->field($model, 'updated_at')->textInput() ?>

            <?= $form->field($model, 'qty')->textInput() ?>

            <?= $form->field($model, 'sum')->textInput() ?>

            <?= $form->field($model, 'status')->dropDownList([ '0' => 'Активен', '1' => 'Завершён']) ?>

            <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'surname')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

            <div class="form-group">
                <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
            </div>

            <?php ActiveForm::end(); ?>

        </div>
    </div>

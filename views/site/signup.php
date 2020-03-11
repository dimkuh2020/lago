<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\widgets\MaskedInput;

$this->title = 'Регистрация';
$this->params['breadcrumbs'][] = $this->title;
?>
</div>
	<?=\app\components\MenuWidget::widget(['tpl' => 'menu'])?>
	</div>
    <div class="container">
        <div class="site-signup">
            <h1 style="margin-left: 10%;"><?= Html::encode($this->title) ?></h1>
            <br>
            <br>
            
            <?php $form = ActiveForm::begin([
                'id' => 'signup-form',
                'layout' => 'horizontal',
                'fieldConfig' => [
                    'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
                    'labelOptions' => ['class' => 'col-lg-1 control-label'],
                ],
            ]); ?>

                <?= $form->field($model, 'name')?>
                <?= $form->field($model, 'surname')?>
                <?= $form->field($model, 'password')->passwordInput() ?>
                <?= $form->field($model, 'phone')->widget(MaskedInput::className(),['mask' => '+38(099)999-99-99'])?>
                <?= $form->field($model, 'email')->input('email');?>
                
                <div class="form-group">
                    <div class="col-lg-offset-1 col-lg-11">
                        <?= Html::submitButton('Регистрация', ['class' => 'btn btn-primary']) ?>
                    </div>
                </div>
            <?php ActiveForm::end(); ?>
            
        </div>
    </div>


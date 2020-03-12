<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = "404";
?>
</div>
	<?=\app\components\MenuWidget::widget(['tpl' => 'menu'])?>
	</div>
    <div class="container">
        <div id="notfound">
            <div class="notfound">
                <div class="notfound-404">
                    <div></div>
                    <h1>404</h1>
                </div>
                <h2>Ой! Cтраница не найдена</h2>
                <br>
                <a href="<?=Url::to(['/'])?>">На главную</a>
            </div>
        </div>
    </div>


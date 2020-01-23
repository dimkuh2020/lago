<?php
namespace app\components;

use app\models\Category;
use app\models\Theme;
use app\models\Product;
use yii\base\Widget;

class MenuWidget extends Widget{

    public $tpl; //шаблон для init()
    public $categories;  
    public $themes;

    public function init(){
        parent::init(); 
        if($this->tpl === null){
            $this->tpl = 'menu';
        }
        $this->tpl.='.php';       
    }

    public function run(){
        $this->categories = Category::find()->asArray()->all();  
        $this->themes = Theme::find()->asArray()->all();
        //debug($this->categories);

        return $this->render('menu', ['categories'=> $this->categories, 'themes'=> $this->themes]);
    }
}
?>
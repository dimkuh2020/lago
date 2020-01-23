<?php
namespace app\models;

use yii\db\ActiveRecord;

class Product extends ActiveRecord{

    public static function tableName(){
        return 'product'; //название табл
    }

    public function getCategory(){
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }

    public function getTheme(){
        return $this->hasOne(Category::className(), ['id' => 'theme_id']);
    }


}

?>
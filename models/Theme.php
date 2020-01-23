<?php
namespace app\models;

use yii\db\ActiveRecord;

class Theme extends ActiveRecord{

    public static function tableName(){
        return 'theme'; //название табл
    }

    public function getProducts(){
        return $this->hasMany(Product::className(), ['theme_id' => 'id']);
    }


}

?>
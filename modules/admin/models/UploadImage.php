<?php
namespace app\modules\admin\models;
 
use yii\base\Model;
use yii\web\UploadedFile;
 
class UploadImage extends Model{ //модель для загрузки картинки
 
    public $image;
 
    public function rules(){
        return[
            [['image'], 'file', 'extensions' => 'png, jpg'],            
        ];
    }

    public function attributeLabels(){
        return [
            'image' => 'Загрузка картинки'
        ];
    }
 
    public function upload(){
        if($this->validate()){
            if($this->image!=null){            
                $this->image->saveAs("images/products/{$this->image->baseName}.{$this->image->extension}"); // пут сохранения + наименование + расширение
            }
        }
        else{
            return false;
        }
    }
 
}
?>
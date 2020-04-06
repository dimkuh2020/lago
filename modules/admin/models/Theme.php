<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "theme".
 *
 * @property int $id
 * @property string $name
 * @property string $keywords
 * @property string $description
 */
class Theme extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'theme';
    }

    public function getProducts(){
        return $this->hasMany(Product::className(), ['theme_id' => 'id']);
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'keywords', 'description'], 'required'],
            [['name', 'keywords', 'description'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Наименование',
            'keywords' => 'Ключевые слова',
            'description' => 'Описание',
        ];
    }
}

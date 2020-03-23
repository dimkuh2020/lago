<?php

namespace app\models;

use \yii\db\ActiveRecord;
use \yii\behaviors\TimestampBehavior;
use yii\db\Expression;
use Yii;


class Comment extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'comments';
    }

    public function behaviors(){  // метод для автоматического проставления даты при сохранении заказа (Timestamp)
        return [                  // из www
            [
                'class' => TimestampBehavior::className(),
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['date'], //перед вставкой записи
                ],
                // если вместо метки времени UNIX используется datetime:
                'value' => new Expression('NOW()'),
            ],
        ];

    }

    public function getUser(){ //для связи с user
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    public function getProduct(){ //для связи с user
        return $this->hasOne(Product::className(), ['id' => 'product_id']);
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [           
            [['date'], 'safe'],
            [['comment'], 'string', 'max' => 350],            
        ];
    }

    public function attributeLabels()
    {
        return [            
            'comment' => 'Oтзыв о товаре',            
        ];
    }
    
}

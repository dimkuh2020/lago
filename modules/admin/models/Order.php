<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "order".
 *
 * @property int $id
 * @property string $created_at
 * @property string $updated_at
 * @property int $qty
 * @property float $sum
 * @property string $status
 * @property string $name
 * @property string $surname
 * @property string $email
 * @property string $phone
 * @property string $address
 */
class Order extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'order';
    }

    public function getOrderItems(){ // для связи с OrderItems 
        return $this->hasMany(OrderItems::className(),['order_id' => 'id']);
    } 

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['created_at', 'updated_at', 'qty', 'sum', 'name', 'surname', 'email', 'phone', 'address'], 'required'],
            [['created_at', 'updated_at'], 'safe'],
            [['qty'], 'integer'],
            [['sum'], 'number'],
            [['status'], 'string'],
            [['name', 'surname', 'email', 'phone', 'address'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => '№ Заказа',
            'created_at' => 'Дата заказа',
            'updated_at' => 'Дата изменения',
            'qty' => 'Количество',
            'sum' => 'Сумма',
            'status' => 'Статус',
            'name' => 'Имя',
            'surname' => 'Фамилия',
            'email' => 'E-mail',
            'phone' => 'Телефон',
            'address' => 'Адрес доставки',
        ];
    }
}

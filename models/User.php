<?php

namespace app\models;
use \yii\db\ActiveRecord;
use \yii\web\IdentityInterface;
use Yii;

/**
 * This is the model class for table "users".
 *
 * @property int $id
 * @property string $name
 * @property string|null $surname
 * @property string|null $password
 * @property string|null $phone
 * @property string|null $email
 * @property string|null $auth_key
 * @property string|null $access_token
 */
class User extends ActiveRecord implements IdentityInterface //через GII
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['email'], 'required'],
            [['name', 'surname', 'password', 'phone', 'email', 'auth_key', 'access_token'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'surname' => 'Surname',
            'password' => 'Password',
            'phone' => 'Phone',
            'email' => 'Email',
            'auth_key' => 'Auth Key',
            'access_token' => 'Access Token',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public static function findIdentity($id)
    {
        return static::findOne($id); // возвращаем найденого пользователя по id
    }

    /**
     * {@inheritdoc}
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
       // return static::findOne(['access_token' => $token]); // токен
    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($email)
    {
        return static::findOne(['email' => $email]); // поиск по имени
    }

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthKey()
    {
        return $this->auth_key; // поле из табл users
    }

    /**
     * {@inheritdoc}
     */
    public function validateAuthKey($authKey) // для cookie
    {
        return $this->auth_key === $authKey; // поле из табл users
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return \Yii::$app->security->validatePassword($password, $this->password); //для хеша
    }
}

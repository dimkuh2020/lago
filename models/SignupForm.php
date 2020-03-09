<?php

namespace app\models;

use Yii;
use yii\base\Model;

class SignupForm extends Model{
    public $name;
    public $surname;
    public $password;
    public $phone;
    public $email;

    public function rules(){    //правила валидации формы signup
        return [
            [['name','surname','password','phone','email'], 'required'],                       
            ['email', 'unique', 'targetClass' => User::className(),  'message' => 'Этот почтовый ящик уже занят'],            
            ['password', 'string','min' => 2, 'max' => 20], //от 2 до 20 символов
            ['email', 'email'],
        ];
    }

    public function attributeLabels() {
        return [
            'name' => 'Имя',
            'surname' => 'Фамилия',
            'password' => 'Пароль',
            'phone' => 'Телефон',
            'email' => 'E-mail',
        ];
    }
    
}
<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace frontend\models;
use yii\base\Model;
use yii\db\ActiveRecord;
/**
 * Description of TestForm
 *
 * @author artem
 */
class TestForm extends ActiveRecord  {
//public $name;
//public $email;
//public $text;
public static function tableName() {
    return 'posts';
}
// название полей в форме
public function attributeLabels() {
    return [
        'name' => 'Имя',
         'email' => 'Email',
         'text' => 'Текст',
    ];
}
    
public function rules() {
    return [
        [['name','email'], 'required'],
        ['email', 'email'],
        ['name', 'string', 'length' => [2,10]],
        ['text', 'trim'],
      //  ['name', 'string', 'min' => 2],
       // [['name','email'], 'required', 'message' => 'Поле обязательно для заполнения' ], 
       
    ];
}
    //put your code here
}

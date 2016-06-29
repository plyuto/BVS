<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace frontend\models;
use yii\db\ActiveRecord;
use yii\base\Model;

/**
 * Description of Vacancies
 *
 * @author artem
 */
class Vacancies extends ActiveRecord {
    //put your code here
    public function getCategories () {
        
        return $this->hasMany(Categories::className(), ['id' => 'category_id']);
    }
    
    public function attributeLabels() {
    return [
        'name' => 'Имя',
         'descriprion' => 'Описание',
         'country' => 'Страна',
    ];
}

public function rules() {
    return [
        [['name','description', 'category_id', 'country'], 'required'],
        
      //  ['name', 'string', 'min' => 2],
       // [['name','email'], 'required', 'message' => 'Поле обязательно для заполнения' ], 
       
    ];
}
}

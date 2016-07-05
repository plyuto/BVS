<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace frontend\models;
use yii\db\ActiveRecord;

/**
 * Description of Countries
 *
 * @author artem
 */
class Countries extends ActiveRecord {
   public function rules() {
    return [
        ['country', 'save'],
        ['id', 'save'],
        
      //  ['name', 'string', 'min' => 2],
       // [['name','email'], 'required', 'message' => 'Поле обязательно для заполнения' ], 
       
     ];}
}

<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace frontend\models;
use yii\db\ActiveRecord;
/**
 * Description of Category
 *
 * @author artem
 */
class Categories extends ActiveRecord{
   
    public function getVacancies () {
        
        return $this->hasMany(Vacancies::className(), ['category_id' => 'id']);
    }
    //   public static function tableName() {
   //     return 'categories';
    //}
     public function rules() {
    return [
        ['category_name', 'required'],
        ['id', 'save'],
        
      //  ['name', 'string', 'min' => 2],
       // [['name','email'], 'required', 'message' => 'Поле обязательно для заполнения' ], 
       
     ];}
}

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
}

<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace frontend\models;
use yii\db\ActiveRecord;

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
}

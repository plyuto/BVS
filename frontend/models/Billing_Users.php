<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace frontend\models;

/**
 * Description of Billing_Users
 *
 * @author artem
 */
class Billing_Users extends \yii\db\ActiveRecord{
    //put your code here
    public static function tableName() {
    return 'billing_user';
}

    public function rules() {
    return [
       [['user', 'balance', 'user_id'], 'trim'],
      ['id', 'trim'],
        
    
       
     ];
    
    }
}

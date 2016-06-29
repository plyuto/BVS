<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace frontend\models;
use yii\base\Model;

/**
 * Description of SearchForm
 *
 * @author artem
 */
class SearchForm extends Model{
    //put your code here
    public $q;
    public $category;
    public $country;
}

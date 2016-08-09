<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace frontend\controllers;
use yii\web\Controller;
/**
 * Description of AppController
 *
 * @author artem
 */
class AppController extends Controller {
    //put your code here
    public function debug($arr) {
        echo '<pre>' .print_r($arr, true). '</pre>';
        
    }
}

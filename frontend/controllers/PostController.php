<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace frontend\controllers;
use Yii;
//use frontend\controllers\AppController;
/**
 * Description of PostController
 *
 * @author artem
 */
class PostController extends AppController {
    
   // public $layout = 'basic';
    
    public function actionTest() {
        $names = ['Ivanov', 'Petrov', 'Sidorov'];
   //     print_r($names);
     //   var_dump($names);
     //   var_dump(Yii::$app);
     //   $this->debug(Yii::$app);
       return $this->render('test');
    }
    
    public function actionIndex() {
        return $this->render('index');
        
    }
    
    public function actionShow() {
    //    $this->layout = 'basic';
        $this->view->title = 'Одна статья';
    $this->view->registerMetaTag(['name' => 'keywords', 'content' => 'наши ключевики'] );
    $this->view->registerMetaTag(['name' => 'description', 'content' => 'описание страницы'] );
        return $this->render('show');
        
    }
    
    }


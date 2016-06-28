<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace frontend\controllers;
use Yii;
use yii\db\ActiveRecord;
use frontend\models\TestForm;
use frontend\models\Categories;
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
       // debug (Yii::$app->request->post());
        $model = new TestForm();
        
 //       $model->name = 'Вася';
 //        $model->email = 'mail@mail.ru';
 //         $model->text = 'Текст поста здесь будет';
 //         $model->save();
              
        if ( $model->load(Yii::$app->request->post())) {
       if ($model->save()) {
            
           Yii::$app->session->setFlash('success', 'Данные приняты');
           return $this->refresh();
       }  else {
           Yii::$app->session->setFlash('error', 'Ошибка');     
           }
            
        };
       
        return $this->render('index', compact('model'));
        
    }
    
    public function actionShow() {
    //    $this->layout = 'basic';
        $this->view->title = 'Одна статья';
    $this->view->registerMetaTag(['name' => 'keywords', 'content' => 'наши ключевики'] );
    $this->view->registerMetaTag(['name' => 'description', 'content' => 'описание страницы'] );
      
  //  $cats = Categories::find()->all();
   // $cats = Categories::find()->orderBy(['id' => SORT_DESC])->all();
 //    $cats = Categories::find()->asArray()->where('id=2')->all();
 //    $cats = Categories::find()->asArray()->where(['id' => '4'])->all();
 //   $cats = Categories::find()->asArray()->where(['like', 'category_name', 'T'])->all();
 //   $cats = Categories::find()->asArray()->where(['<=', 'id', '3'])->all();
 //   $cats = Categories::find()->asArray()->where(['id' => '4'])->one();
 //    $cats = Categories::findOne(['id' => '3']);
  //  $cats = Categories::findOne(2);
    $cats = Categories::find()->with('vacancies')->where('id=2')->all();
    
    
    return $this->render('show', compact('cats'));
        
    }
    
    }


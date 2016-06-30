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
use frontend\models\Vacancies;
use frontend\models\SearchForm;
use yii\helpers\Html;
//use frontend\controllers\AppController;
/**
 * Description of PostController
 *
 * @author artem
 */
class PostController extends AppController {
    
 //   public $layout = 'basic';
    public function beforeAction($action) {
       $model = new SearchForm;
       if ($model->load(Yii::$app->request->post())) {
            $q = Html::encode($model->q);
            $category = Html::encode($model->category);
            $country = Html::encode($model->country);
       return $this->redirect(Yii::$app->urlManager->createUrl(['post/search', ['q' => $q, 'category' => $category, 'country' => $country]]));
        }
        return true;
   }


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
        $model = new SearchForm;
        $search_cat = Categories::find()->asArray()->all();
        $quary = Vacancies::find();
        $pagination = new \yii\data\Pagination(['totalCount' => $quary->count(),'pageSize' => 2, 'pageSizeParam' => false, 'forcePageParam' => false]);
        $listvac = $quary->offset($pagination->offset)->limit($pagination->limit)->all();
        
        $vacancies = new Vacancies();
         if ( $vacancies->load(Yii::$app->request->post())) {
       if ($vacancies->save()) {
            
           Yii::$app->session->setFlash('success', 'Данные приняты');
           return $this->refresh();
       }  else {
           Yii::$app->session->setFlash('error', 'Ошибка');     
           }
            
        };
        
   //     $model = new TestForm();
//       $model->name = 'Вася';
 //        $model->email = 'mail@mail.ru';
 //         $model->text = 'Текст поста здесь будет';
 //         $model->save();             
//        if ( $model->load(Yii::$app->request->post())) {
 //      if ($model->save()) {           
 //          Yii::$app->session->setFlash('success', 'Данные приняты');
 //          return $this->refresh();
 //      }  else {
 //          Yii::$app->session->setFlash('error', 'Ошибка');     
 //          }
            
   //     };
       
        return $this->render('index', compact('model', 'vacancies', 'listvac', 'pagination', 'search_cat'));
        
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
  //  $cats = Categories::find()->with('vacancies')->where('id=2')->all();
    $show = Vacancies::findOne(Yii::$app->request->get());
    
    return $this->render('show', compact('show'));
        
    }
    
    public function actionSearch() {
      //  $q = Yii::$app->getRequest()->getQueryParam('q');
     //   $country = Yii::$app->getRequest()->getQueryParam('country');
     //   $category = Yii::$app->getRequest()->getQueryParam('category');
      //   $country = Yii::$app->request->get('country');
      //   $category = Yii::$app->request->get('category');
        
        $q = Yii::$app->request->get(1);
      
        $category = $q['category'];
        $country = $q['country'];
       // $q = $q[1]['q'];
       $q = $q['q'];
     
    $quary = Vacancies::find()->where(['like', 'name', $q])->andWhere(['country' => $country])/*->andWhere(['category_id' => $category])/*->where(['category_id' => $category])/*->where(['like', 'category_id', $category])->where(['like', 'country', $country])*/;
     
    $pagination = new \yii\data\Pagination(['totalCount' => $quary->count(),'pageSize' => 2, 'pageSizeParam' => false, 'forcePageParam' => false]);
        $listvac = $quary->offset($pagination->offset)->limit($pagination->limit)->all();
        
        return $this->render('search', compact('pagination', 'listvac', 'q', 'country', 'category', 'model'));
    }
    
    }


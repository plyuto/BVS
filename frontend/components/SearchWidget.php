<?php

namespace frontend\components;
use yii\base\Widget;
use frontend\models\SearchForm;
use frontend\models\Categories;
use frontend\models\Vacancies;
use frontend\models\Countries;
use yii\helpers\Html;
use Yii;

class SearchWidget extends Widget{
    
    public $name;
    
    public function init() {
        parent::init();
        if ($this->name === null ) $this->name = 'Гость';
        
    }

    public function run() {
    //    return "<h1>{$this->name} Hello World</h1>";
       $model = new SearchForm;
    //  if ($model->load(Yii::$app->request->post())) {
   //        $q = Html::encode($model->q);
    //       $category = Html::encode($model->category);
   //        $country = Html::encode($model->country);
   //   }
        
   //     $model = new SearchForm;
        $search_cat = Categories::find()->asArray()->all();
        $search_country = Countries::find()->asArray()->all();
        $search_cat = \yii\helpers\ArrayHelper::map($search_cat, 'id', 'category_name' );
        $search_country = \yii\helpers\ArrayHelper::map($search_country, 'id', 'country' );
    //    $quary = Vacancies::find();
    //    $pagination = new \yii\data\Pagination(['totalCount' => $quary->count(),'pageSize' => 2, 'pageSizeParam' => false, 'forcePageParam' => false]);
    //    $listvac = $quary->offset($pagination->offset)->limit($pagination->limit)->all();
    return $this->render('search', compact('model', 'search_cat', 'search_country', 'quary', 'pagination', 'listvac'));
   // return $this->redirect(Yii::$app->urlManager->createUrl(['post/search', ['q' => $q, 'category' => $category, 'country' => $country]]));
   // return $this->redirect(Yii::$app->urlManager->createUrl(['post/search', ['q' => $q, 'category' => $category, 'country' => $country]]));
        
     //   return true;
    }
}

    

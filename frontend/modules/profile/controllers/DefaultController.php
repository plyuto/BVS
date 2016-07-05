<?php

namespace app\modules\profile\controllers;

use yii\web\Controller;
use frontend\models\Vacancies;
use Yii;
use frontend\models\Categories;
use frontend\models\Countries;

/**
 * Default controller for the `profile` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        $author = Yii::$app->user->identity->username;
        $quary = Vacancies::find()->where(['author' => $author]);
      //  debug($quary);
        $pagination = new \yii\data\Pagination(['totalCount' => $quary->count(),'pageSize' => 5, 'pageSizeParam' => false, 'forcePageParam' => false]);
       $listvac = $quary->offset($pagination->offset)->limit($pagination->limit)->all();
        return $this->render('index', compact('pagination', 'listvac', 'author', 'quary'));
    }
    public function actionAddVac () {
        $search_cat = Categories::find()->asArray()->all();
        $search_country = Countries::find()->asArray()->all();
        $vacancies = new Vacancies();
         if ( $vacancies->load(Yii::$app->request->post())) {
       if ($vacancies->save()) {
            
           Yii::$app->session->setFlash('success', 'Данные приняты');
           return $this->refresh();
       }  else {
           Yii::$app->session->setFlash('error', 'Ошибка');     
           }
            
        }
        return $this->render('addvac', compact('vacancies', 'search_cat', 'search_country'));
    }
}

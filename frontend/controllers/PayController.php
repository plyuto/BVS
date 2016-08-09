<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace frontend\controllers;
use frontend\models\Billing_Users;
use Yii;
use yii\web\IdentityInterface;
use common\models\User;
use yii\filters\AccessControl;
use \yii\filters\VerbFilter;
/**
 * Description of PayController
 *
 * @author artem
 */
class PayController extends AppController {
    
     public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['payment'],
                'rules' => [
                  
                    [
                        'actions' => [''],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['payment'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }
    
    public function beforeAction($action) {
        if ($action->id == 'result') {
            $this->enableCsrfValidation = false;
        }
        return true;
    }
    public function actionPayment() {
           $author = Yii::$app->user->identity->username;
 //          $billuser = new Billing_Users();
 //          if ($billuser->user == $author) {} else {
 //   $billuser->user = $author;
 //   $billuser->user_id = 
 //   $billuser->save();
//}
//$balance = Billing_Users::find()->where(['user' => $author])->one();
$balance = User::find()->where(['username' => $author])->one();
        return $this->render('payment', compact('author', 'balance') ) ;
    }

        public function actionResult() {
         $author = Yii::$app->request->post('ik_pm_no');  
        $balance = User::findOne(['username' => $author]);
            return $this->render('result', compact('balance', 'user_id'));
    }
    //put your code here
}

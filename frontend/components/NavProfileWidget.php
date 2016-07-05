<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace frontend\components;
use yii\base\Widget;
use Yii;
/**
 * Description of NavProfileWidget
 *
 * @author artem
 */
class NavProfileWidget extends Widget{
    public function run() {
        $action = Yii::$app->controller->action->id;
        return $this->render('navprofile', compact('action'));
    }
    
}

<?php

debug($url);
//$url = Yii::$app->request->post($url);
//$request = Yii::$app->request->getServerName($url);
//debug($url);
$url = \yii\helpers\Json::decode($url);
debug($url);
$id = $url['item']['id'];
debug($id);
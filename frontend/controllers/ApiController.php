<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace frontend\controllers;

/**
 * Description of ApiController
 *
 * @author artem
 */
class ApiController extends AppController {
    public function actionIndex () {
        $shop_id = 8456;
$api_key = "4d07b2d97e1eec4266b7c6679799ba71";

$method = "getitem";
$params = ["item_id" => 1106759, "vendor" => "simaland", "shop_id" => $shop_id];
$params2 = [];
# Сортируем переменные
ksort($params);

# Конвертируем массив к виду GET запроса
$string = http_build_query($params);

# Создаем подпись
$sig = md5($string.$api_key);

# Создаем запрос для получения данных
$url = "http://admin.openmall.info/api/method/".$method."?".$string."&sig=".$sig;
debug($url);
//$url = file_get_contents($url);

    return $this->render('index', compact('url'));
    }
}

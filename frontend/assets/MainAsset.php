<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace frontend\assets;
use yii\web\AssetBundle;
/**
 * Description of MainAsset
 *
 * @author artem
 */
class MainAsset extends AssetBundle {
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
       // 'css/site.css',
      //  'source/css/font-awesome.min.css',
        'source/css/animate-custom.css',
        'source/css/icomoon.css',
        'source/css/main.css',
        'source/css/custom.css',
        'source/css/owl.carousel.css',
        'source/css/owl.theme.default.css',
        //'source/css/style2.css',
    ];
    public $js = [
        'source/js/smoothscroll.js',
        'source/js/retina.js',
        'source/js/modernizr.custom.js',
        'source/js/jquery.easing.1.3.js',
        'source/js/jquery-func.js',
        'source/js/interact.js',
     //   'source/js/jquery.waypoints.min.js',
      //  'source/js/jquery.counterup.min.js',
        'source/js/owl.carousel.min.js',
        'source/js/main.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset'
    ];
 // public $jsOptions = [
   //        'position' => View::POS_HEAD,
  // ];
    //put your code here
}

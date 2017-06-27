<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/gallerybox.css',
        'css/animate.css',
        'css/owl.carousel.min.css',
        'css/font-awesome.min.css',
        'css/site.css',
    ];
    public $js = [
        'https://maps.googleapis.com/maps/api/js?key=AIzaSyACzvbJ4E9TUEi6FmtHuwn1EMKXLvGQtZw&callback=myMap',
        'js/jquery.gallerybox.js',
        'js/owl.carousel.min.js',
        'js/velocity.min.js',
        'js/site.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}

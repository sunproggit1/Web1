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
        'css/site.css',
        'css/sliderstyle.css',
        'css/animate.min.css',
        'bootstrap.min.css',
        'font-awesome.min.css',
        'owl.carousel.css',
        'owl.theme.css',
        'owl.transitions',
        'responsive.css',
        'style.css'
    ];
    public $js = [
        'js/slider.js',
        'js/jquery-1.11.3.min.js',
        'js/bootstrap.min.js',
        'js/owl.carousel.min.js',
        'js/jquery.stickit.min.js',
        'js/menu.js',
        'js/scripts.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}

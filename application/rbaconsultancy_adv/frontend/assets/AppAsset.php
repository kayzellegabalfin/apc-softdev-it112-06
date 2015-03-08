<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
       // 'css/site.css',
        'css/component.css',
        'css/lightbox.css',
        'css/responsiveslides.css',
        'css/sidebar.css',
        'css/style.css',
        'css/tabs.css',
        'css/verticaltimeline.css',
    ];
    public $js = [
        'js/cbpFWTabs.js',
        'js/fliplightbox.min.js',
        'js/init.js',
        'js/jquery.dropotron.min.js',
        'js/jquery.easing.min.js',
        'js/jquery.lightbox.js',
        'js/jquery.min.js',
        'js/jquery.mixitup.min.js',
        'js/jquery.scrollex.min.js',
        'js/jquery.scrolly.min.js',
        'js/jquery-1.2.3.min.js',
        'js/menu.js',
        'js/modernizr.custom.js',
        'js/responsiveslides.min.js',
        'js/sidebar.js',
        'js/skel.min.js',
        'js/skel-layers.min.js',

    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}

<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/animate.css',
        //'css/bootstrap.min.css',
        'css/classy-nav.min.css',
        'css/core-style.css',
        //'css/core-style.css.map',
        'css/font-awesome.min.css',
        'css/jquery-ui.min.css',
        'css/magnific-popup.css',
        'css/nice-select.css',
        'css/owl.carousel.css',
        'css/site.css',
    ];
    public $js = [
        'js/active.js',
        //'js/bootstrap.min.js',
        'js/classy-nav.min.js',
        'js/map-active.js',
        'js/plugins.js',
        'js/popper.min.js',

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}

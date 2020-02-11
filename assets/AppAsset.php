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
        //'css/bootstrap.css',
        'css/flexslider.css',
        'css/memenu.css',
        'css/style.css',               
        //'css/site.css',
    ];

    public $js = [
        'js/jquery.flexslider.js',
        //'js/jquery.min.js',
        'js/main.js',
        'js/memenu.js',
        'js/responsiveslides.min.js',
        //'js/simpleCart.min.js',         
    ];
    public $depends = [
       'yii\web\YiiAsset',
       'yii\web\JqueryAsset',       
       'yii\bootstrap\BootstrapPluginAsset',
    ];

    public $jsOptions = ['position' => \yii\web\View::POS_HEAD];
}

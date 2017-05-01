<?php
/**
 * -----------------------------------------------------------------------------
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 * -----------------------------------------------------------------------------
 */

namespace frontend\assets;

use yii\web\AssetBundle;
use Yii;

// set @themes alias so we do not have to update baseUrl every time we change themes
Yii::setAlias('@themes', Yii::$app->view->theme->baseUrl);

/**
 * -----------------------------------------------------------------------------
 * @author Qiang Xue <qiang.xue@gmail.com>
 *
 * @since 2.0
 * -----------------------------------------------------------------------------
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@themes';

    public $css = [
        'css/site.css',
        'css/custom.css',
        'js\angular\angular\angular-csp.css',
    ];
    public $js = [
        'js\modernizr.custom.86080.js',
        'js\angular\angular\angular.min.js',
        'js\angular\angular-animate\angular-animate.min.js',
        'js\angular\angular-route\angular-route.min.js',
        'js\app.js',
    ];
    
    public $depends = [
        'yii\web\YiiAsset',
    ];
}


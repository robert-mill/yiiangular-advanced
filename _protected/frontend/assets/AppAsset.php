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

        '//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css',
        'js\angular\angular\angular-csp.css',
        'css/custom.css',
    ];
    public $js = [
        'http://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyCmPwt0aGdI8MJF1DwjRdlva610ntM67zs&sensor=false',

        'js\modernizr.custom.86080.js',

        'js\angular\angular\angular.min.js',
        'js\angular\angular-animate\angular-animate.min.js',
        'js\angular\angular-route\angular-route.min.js',
        'js\app.js',

        //'auto\ngAutocomplete.js',
       // 'auto\script.js',

    ];
    
    public $depends = [
        'yii\web\YiiAsset',
    ];
}


<?php
use frontend\assets\AppAsset;
use frontend\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body ng-app="spaApp"  ng-controller="index">
    <?php $this->beginBody() ?>
    <ul class="cb-slideshow">
        <li><span>Image 01</span><div><h3>Security</h3></div></li>
        <li><span>Image 02</span><div><h3>Confidence</h3></div></li>
        <li><span>Image 03</span><div><h3>Reliability</h3></div></li>
        <li><span>Image 04</span><div><h3>Trust</h3></div></li>
        <li><span>Image 05</span><div><h3>Friendly</h3></div></li>
        <li><span>Image 06</span><div><h3>Professional</h3></div></li>
    </ul>
    <div class="clr"></div>
    <div class="wrap" >
        <?php
            NavBar::begin([
                'brandLabel' => Yii::t('app', Yii::$app->name),
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-default navbar-fixed-top',
                ],
            ]);

            // everyone can see Home page
            $menuItems[] = ['label' => Yii::t('app', 'Home'), 'url' => ['/site/index']];

            // we do not need to display Article/index, About and Contact pages to editor+ roles
            if (!Yii::$app->user->can('editor')) 
            {
                $menuItems[] = ['label' => Yii::t('app', 'Articles'), 'url' => ['/article/index']];
                $menuItems[] = ['label' => Yii::t('app', 'About'), 'url' => ['/site/about']];
                $menuItems[] = ['label' => Yii::t('app', 'Contact'), 'url' => ['/site/contact']];
            }

            // display Article admin page to editor+ roles
            if (Yii::$app->user->can('editor'))
            {
                $menuItems[] = ['label' => Yii::t('app', 'Articles'), 'url' => ['/article/admin']];
            }            
            
            // display Signup and Login pages to guests of the site
            if (Yii::$app->user->isGuest) 
            {
                $menuItems[] = ['label' => Yii::t('app', 'Signup'), 'url' => ['/site/signup']];
                $menuItems[] = ['label' => Yii::t('app', 'Login'), 'url' => ['/site/login']];
            }
            // display Logout to all logged in users
            else 
            {
                $menuItems[] = [
                    'label' => Yii::t('app', 'Logout'). ' (' . Yii::$app->user->identity->username . ')',
                    'url' => ['/site/logout'],
                    'linkOptions' => ['data-method' => 'post']
                ];
            }
           
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => $menuItems,
            ]);
            NavBar::end();
        ?>

        <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        {{888}}
        <?= $content ?>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
        <p class="pull-left">&copy; <?= Yii::t('app', Yii::$app->name) ?> <?= date('Y') ?></p>
        <p class="pull-right"><?= Yii::powered() ?></p>
        </div>
    </footer>

    <?php $this->endBody() ?>
</body>
<script>
    var app = angular.module("spaApp", []);
    app.controller("index",  ['$scope', '$http', function($scope,$http) {
        $scope.messageego = "HI";
       $scope.SendData = function(){
           var dataobj = {
               alt_frontTitle: "test title",
               alt_fronmtBody: "test text",
               alt_frontimg: "image.svg"
           };
           var config = {
               headers: {
                   'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
               }
           }
           $.ajax({
                   url: 'http://localhost/angularYii_TEMPLATE/alt-front/create',
                   type:'get',
                   data: dataobj
               })
               .success(function(data, status, header, config){

                   $scope.PostDataResponse = data;
               })
               .error(function(data, status, header, config){
                   $scope.PostDataResponse = "Data: " + data + "<hr>Status:" + status + "<hr>headers: " + header + "<hr>config: " + config;
               });
       };
    }]);
</script>
</html>
<?php $this->endPage() ?>

<?php

/* @var $this yii\web\View */
use frontend\models\AltFront;

$this->title = Yii::t('app', Yii::$app->name);
$altfrontClass = new AltFront();
$altfrontData = $altfrontClass->find()->all();
?>
<div class="site-index section">

    <div class="jumbotron row" >
        <div class="col-xs-12">

            <div id="myCarousel" class="carousel slide col-lg-7 col-md-7 col-sm-6 col-xs-12" data-ride="carousel">
                <ol class="carousel-indicators">
                    <?php
                    $i=0;
                    foreach ($altfrontData as $data1):?>
                    <?php if($i===0):?>
                        <li data-target="#myCarousel" data-slide-to="<?=$i?>" class="active"></li>
                    <?php else: ?>
                        <li data-target="#myCarousel" data-slide-to="<?=$i?>"></li>
                    <?php endif;?>
                    <?php
                    $i++;
                    endforeach;?>
                </ol>
                <div class="carousel-inner">
                    <?php $i=0; foreach ($altfrontData as $data2): ?>
                        <?php if($i===0):?>
                    <div class="item active">
                        <img src="<?=Yii::getAlias('@web')?>/assets/images/<?=$data2->alt_frontimg?>" alt="Diversity" style="width:100%;">
                    </div>
                         <?php else:?>
                        <div class="item">
                            <img src="<?=Yii::getAlias('@web')?>/assets/images/<?=$data2->alt_frontimg?>" alt="Diversity" style="width:100%;">
                        </div>
                        <?php endif;?>

                    <?php $i++; endforeach;?>



                </div>
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <div class="ccol-lg-5 col-md-5 col-sm-6 col-xs-12">{{messageego}}
                <ul>
                    <li ng-repeat="product in products">{{product}}</li>
                </ul>
                <button ng-click="SendData()">Send</button>
                {{PostDataResponse}}
            </div>
        </div>

    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-3">
                <h3>Yii documentation</h3>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>
            </div>
            <div class="col-lg-3">
                <h3>Yii forum</h3>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>
            </div>
            <div class="col-lg-3">
                <h3>Yii extensions</h3>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
            </div>
            <div class="col-lg-3">
                <h3>Freetuts.org</h3>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.freetuts.org/">Freetuts.org &raquo;</a></p>
            </div>
        </div>

    </div>
</div>






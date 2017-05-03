<?php

/* @var $this yii\web\View */
use frontend\models\AltFront;
use frontend\models\Front;

$this->title = Yii::t('app', Yii::$app->name);
$altfrontClass = new AltFront();
$altfrontData = $altfrontClass->find()->all();
$frontClass = new Front();
$frontData = $frontClass->find()->all();
?>
<div class="site-index section">

    <div class="jumbotron row" >
        <div class="col-xs-12">

            <div id="myCarousel" class="carousel slide col-lg-12 col-md-12 col-sm-6 col-xs-12" data-ride="carousel">
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
                            <div class="col-lg-7 col-md-7 col-sm-6 col-xs-12">
                                <img src="<?=Yii::getAlias('@web')?>/assets/images/<?=$data2->alt_frontimg?>" alt="Diversity" style="width:100%;">
                                </div>
                                <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
                                    <?php if($data2->alt_frontTitle&&$data2->alt_frontTitle!==""): ?>
                                        <h3><?=$data2->alt_frontTitle?></h3>
                                        <p><?=$data2->alt_fronmtBody?></p>
                                    <?php else:?>
                                        <p style="background: rgba(255,255,255,1.0); padding: 4px; color:rgba(0,0,0,1.0); "><?=$data2->alt_fronmtBody?></p>
                                    <?php endif;?>

                                </div>
                        </div>
                         <?php else:?>
                        <div class="item">
                            <div class="col-lg-7 col-md-7 col-sm-6 col-xs-12">
                                <img src="<?=Yii::getAlias('@web')?>/assets/images/<?=$data2->alt_frontimg?>" alt="Diversity" style="width:100%;">
                            </div>
                            <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
                                <?php if($data2->alt_frontTitle&&$data2->alt_frontTitle!==""): ?>
                                    <h3><?=$data2->alt_frontTitle?></h3>
                                    <p><?=$data2->alt_fronmtBody?></p>
                                <?php else:?>
                                    <p style="background: rgba(255,255,255,1.0); padding: 4px; color:rgba(0,0,0,1.0); "><?=$data2->alt_fronmtBody?></p>
                                <?php endif;?>

                            </div>
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

        </div>

    </div>

   <!-- <div class="body-content">

        <div class="row">

            <?php foreach ($frontData as $fd):?>
            <div class="col-lg-4">
                <h3><?=$fd->home_title ?></h3>
                <p><?=$fd->home_body?></p>

            </div>
            <?php endforeach;?>


        </div>

    </div>-->
</div>






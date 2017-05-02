<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\modules\AltFrontSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Alt Fronts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="alt-front-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Alt Front', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'alt_frontID',
            'alt_frontTitle',
            'alt_fronmtBody:ntext',
            'alt_frontimg',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

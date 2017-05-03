<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\FrontSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Fronts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="front-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Front', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'home_id',
            'section_id',
            'home_title',
            'home_body:ntext',
            'section',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

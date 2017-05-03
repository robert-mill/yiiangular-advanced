<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Front */

$this->title = $model->home_id;
$this->params['breadcrumbs'][] = ['label' => 'Fronts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="front-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->home_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->home_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'home_id',
            'section_id',
            'home_title',
            'home_body:ntext',
            'section',
        ],
    ]) ?>

</div>

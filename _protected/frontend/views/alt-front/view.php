<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\modules\AltFront */

$this->title = $model->alt_frontID;
$this->params['breadcrumbs'][] = ['label' => 'Alt Fronts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="alt-front-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->alt_frontID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->alt_frontID], [
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
            'alt_frontID',
            'alt_frontTitle',
            'alt_fronmtBody:ntext',
            'alt_frontimg',
        ],
    ]) ?>

</div>

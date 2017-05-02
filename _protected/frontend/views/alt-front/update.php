<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\modules\AltFront */

$this->title = 'Update Alt Front: ' . $model->alt_frontID;
$this->params['breadcrumbs'][] = ['label' => 'Alt Fronts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->alt_frontID, 'url' => ['view', 'id' => $model->alt_frontID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="alt-front-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Front */

$this->title = 'Update Front: ' . $model->home_id;
$this->params['breadcrumbs'][] = ['label' => 'Fronts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->home_id, 'url' => ['view', 'id' => $model->home_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="front-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Front */

$this->title = 'Create Front';
$this->params['breadcrumbs'][] = ['label' => 'Fronts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="front-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

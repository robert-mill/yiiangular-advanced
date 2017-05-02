<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\modules\AltFront */

$this->title = 'Create Alt Front';
$this->params['breadcrumbs'][] = ['label' => 'Alt Fronts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="alt-front-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

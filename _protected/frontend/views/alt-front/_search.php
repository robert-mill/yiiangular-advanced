<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\modules\AltFrontSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="alt-front-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'alt_frontID') ?>

    <?= $form->field($model, 'alt_frontTitle') ?>

    <?= $form->field($model, 'alt_fronmtBody') ?>

    <?= $form->field($model, 'alt_frontimg') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\FrontSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="front-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'home_id') ?>

    <?= $form->field($model, 'section_id') ?>

    <?= $form->field($model, 'home_title') ?>

    <?= $form->field($model, 'home_body') ?>

    <?= $form->field($model, 'section') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

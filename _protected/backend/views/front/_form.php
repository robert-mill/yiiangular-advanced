<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Front */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="front-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'section_id')->textInput() ?>

    <?= $form->field($model, 'home_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'home_body')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'section')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\modules\AltFront */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="alt-front-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'alt_frontTitle')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alt_fronmtBody')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'alt_frontimg')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

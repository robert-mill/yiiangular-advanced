<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\TeacherReg */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="teacher-reg-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'type_of_position')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'core_subject')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nationality')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'prefered_school_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'prefered_location')->textInput() ?>

    <?= $form->field($model, 'current_residence')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'univsersity_attended')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'other_university')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'other_university_country')->textInput() ?>

    <?= $form->field($model, 'first_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'last_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'skype')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dob')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'start_from')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cv')->textInput() ?>

    <?= $form->field($model, 'pic')->textInput() ?>

    <?= $form->field($model, 'vids')->textInput() ?>

    <?= $form->field($model, 'dbs')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'live')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

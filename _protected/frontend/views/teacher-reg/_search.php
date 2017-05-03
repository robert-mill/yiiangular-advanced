<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\TeacherRegSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="teacher-reg-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'type_of_position') ?>

    <?= $form->field($model, 'core_subject') ?>

    <?= $form->field($model, 'nationality') ?>

    <?= $form->field($model, 'prefered_school_type') ?>

    <?php // echo $form->field($model, 'prefered_location') ?>

    <?php // echo $form->field($model, 'current_residence') ?>

    <?php // echo $form->field($model, 'univsersity_attended') ?>

    <?php // echo $form->field($model, 'other_university') ?>

    <?php // echo $form->field($model, 'other_university_country') ?>

    <?php // echo $form->field($model, 'first_name') ?>

    <?php // echo $form->field($model, 'last_name') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'skype') ?>

    <?php // echo $form->field($model, 'dob') ?>

    <?php // echo $form->field($model, 'phone') ?>

    <?php // echo $form->field($model, 'start_from') ?>

    <?php // echo $form->field($model, 'cv') ?>

    <?php // echo $form->field($model, 'pic') ?>

    <?php // echo $form->field($model, 'vids') ?>

    <?php // echo $form->field($model, 'dbs') ?>

    <?php // echo $form->field($model, 'live') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

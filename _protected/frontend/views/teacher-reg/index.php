<?php

use frontend\models\TeacherReg;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\TeacherRegSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
$model = new TeacherReg();

?>
<div class="teacher-reg-index row">


    <div class="teacher-reg-form  col-xs-12">
        <?php
        $this->title = 'Teacher Regs';
        $this->params['breadcrumbs'][] = $this->title;
        ?>
        <h1><?= Html::encode($this->title) ?></h1>



        <?php $form = ActiveForm::begin(); ?>

       <div class="col-xs-12">
           <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12"><?= $form->field($model, 'first_name')->textInput(['maxlength' => true, 'placeholder'=>'First name'])->label(false) ?></div>
           <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12"><?= $form->field($model, 'last_name')->textInput(['maxlength' => true, 'placeholder'=>'Last name'])->label(false)  ?></div>
        </div>
        <div class="col-xs-12">
            <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12"><?= $form->field($model, 'email')->textInput(['maxlength' => true, 'placeholder'=>'Email'])->label(false) ?></div>
            <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12"><?= $form->field($model, 'skype')->textInput(['maxlength' => true, 'placeholder'=>'Skype address'])->label(false) ?></div>
        </div>
        <div class="col-xs-12">
            <div class="col-lg-4 col-md-3 col-sm-6 col-xs-12"><?= $form->field($model, 'type_of_position')->textInput(['maxlength' => true, 'placeholder'=>'Type of position'])->label(false) ?></div>
            <div class="col-lg-4 col-md-3 col-sm-6 col-xs-12"><?= $form->field($model, 'core_subject')->textInput(['maxlength' => true, 'placeholder'=>'Core Subject'])->label(false) ?></div>
            <div class="col-lg-4 col-md-3 col-sm-6 col-xs-12"><?= $form->field($model, 'prefered_school_type')->textInput(['maxlength' => true, 'placeholder'=>'Preferred School type'])->label(false) ?></div>
        </div>
        <div class="col-xs-12">

            <div class="form-group move-down col-lg-4 col-md-3 col-sm-6 col-xs-12">
                <label for="Autocomplete"></label>
                <?= $form->field($model, 'prefered_location')->textInput(['maxlength' => true, 'id'=>'Autocomplete','ng-autocomplete'=>'result1', 'details'=>'details1','options'=>'options1', 'placeholder'=>'Enter Preferred Location'])->label(false) ?>
            </div>

            <div class="form-group move-down col-lg-4 col-md-3 col-sm-6 col-xs-12">
            <label for="Autocomplete"></label>
            <?= $form->field($model, 'current_residence')->textInput(['maxlength' => true, 'id'=>'Autocomplete','ng-autocomplete'=>'result1', 'details'=>'details1','options'=>'options1', 'placeholder'=>'Enter Current Residence'])->label(false) ?>
            </div>


            <div class="form-group move-down col-lg-4 col-md-3 col-sm-6 col-xs-12">
                <label for="Autocomplete"></label>
                <?= $form->field($model, 'univsersity_attended')->textInput(['maxlength' => true, 'id'=>'Autocomplete','ng-autocomplete'=>'result1', 'details'=>'details1','options'=>'options1', 'placeholder'=>'Enter University Attended'])->label(false) ?>
            </div>
        </div>


        <div class="col-xs-12">
            <div class=" col-lg-4 col-md-3 col-sm-6 col-xs-12">
                <?= $form->field($model, 'dob')->textInput(['maxlength' => true, 'placeholder'=>'D.O.B'])->label(false) ?>
            </div>
            <div class=" col-lg-4 col-md-3 col-sm-6 col-xs-12">
                <?= $form->field($model, 'phone')->textInput(['maxlength' => true, 'placeholder'=>'Enter Phone'])->label(false) ?>
            </div>
            <div class=" col-lg-4 col-md-3 col-sm-6 col-xs-12">
                <?= $form->field($model, 'start_from')->textInput(['maxlength' => true, 'placeholder'=>'Start from'])->label(false) ?>
            </div>
        </div>

        <div class="col-xs-12">
                <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12"><?= $form->field($model, 'cv')->textInput(['placeholder'=>'Add CV'])->label(false) ?></div>

                <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12"><?= $form->field($model, 'pic')->textInput(['placeholder'=>'Add Photo'])->label(false) ?></div>
        </div>

        <div class="col-xs-12">
                <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12"><?= $form->field($model, 'vids')->textInput(['placeholder'=>'Upload Video'])->label(false) ?></div>
                <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12"><?= $form->field($model, 'dbs')->textInput(['maxlength' => true,'placeholder'=>'Upload Dbs'])->label(false) ?></div>
        </div>


        <div class="form-group">
            <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>
</div>


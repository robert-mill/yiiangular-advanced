<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\TeacherReg */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Teacher Regs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="teacher-reg-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'type_of_position',
            'core_subject',
            'nationality',
            'prefered_school_type',
            'prefered_location',
            'current_residence',
            'univsersity_attended',
            'other_university',
            'other_university_country',
            'first_name',
            'last_name',
            'email:email',
            'skype',
            'dob',
            'phone',
            'start_from',
            'cv',
            'pic',
            'vids',
            'dbs',
            'live',
        ],
    ]) ?>

</div>

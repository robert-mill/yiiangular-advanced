<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\TeacherRegSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Teacher Regs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="teacher-reg-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Teacher Reg', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'type_of_position',
            'core_subject',
            'nationality',
            'prefered_school_type',
            // 'prefered_location',
            // 'current_residence',
            // 'univsersity_attended',
            // 'other_university',
            // 'other_university_country',
            // 'first_name',
            // 'last_name',
            // 'email:email',
            // 'skype',
            // 'dob',
            // 'phone',
            // 'start_from',
            // 'cv',
            // 'pic',
            // 'vids',
            // 'dbs',
            // 'live',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

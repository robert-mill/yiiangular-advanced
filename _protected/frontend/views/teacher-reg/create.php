<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\TeacherReg */

$this->title = 'Create Teacher Reg';
$this->params['breadcrumbs'][] = ['label' => 'Teacher Regs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="teacher-reg-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

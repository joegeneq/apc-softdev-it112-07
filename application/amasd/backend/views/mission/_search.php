<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\missionSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mission-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'mission_location') ?>

    <?= $form->field($model, 'mission_length') ?>

    <?= $form->field($model, 'mission_start_date') ?>

    <?= $form->field($model, 'mission_end_date') ?>

    <?php // echo $form->field($model, 'mission_status') ?>

    <?php // echo $form->field($model, 'alumni_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

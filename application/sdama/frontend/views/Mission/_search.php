<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\MissionSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mission-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'mission_name') ?>

    <?= $form->field($model, 'mission_desc') ?>

    <?= $form->field($model, 'mission_num_of_volunteer_needed') ?>

    <?= $form->field($model, 'mission_location') ?>

    <?php // echo $form->field($model, 'mission_contact_person_lname') ?>

    <?php // echo $form->field($model, 'mission_contact_person_fname') ?>

    <?php // echo $form->field($model, 'mission_contact_num') ?>

    <?php // echo $form->field($model, 'mission_email_address') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

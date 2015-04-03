<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var backend\models\volunteerSearch $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="volunteer-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'volunteer_status') ?>

    <?= $form->field($model, 'volunteer_code') ?>

    <?= $form->field($model, 'volunteer_fname') ?>

    <?= $form->field($model, 'volunteer_lname') ?>

    <?php // echo $form->field($model, 'volunteer_mname') ?>

    <?php // echo $form->field($model, 'volunteer_bdate') ?>

    <?php // echo $form->field($model, 'volunteer_age') ?>

    <?php // echo $form->field($model, 'volunteer_school_graduated') ?>

    <?php // echo $form->field($model, 'volunteer_year_graduated') ?>

    <?php // echo $form->field($model, 'volunteer_address') ?>

    <?php // echo $form->field($model, 'volunteer_contact_num') ?>

    <?php // echo $form->field($model, 'volunteer_start_date') ?>

    <?php // echo $form->field($model, 'batch_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\AlumniSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="alumni-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'alumni_code') ?>

    <?= $form->field($model, 'alumni_fname') ?>

    <?= $form->field($model, 'alumni_lname') ?>

    <?= $form->field($model, 'alumni_mname') ?>

    <?php // echo $form->field($model, 'alumn_bdate') ?>

    <?php // echo $form->field($model, 'alumni_age') ?>

    <?php // echo $form->field($model, 'alumni_school_graduated') ?>

    <?php // echo $form->field($model, 'alumni_year_graduated') ?>

    <?php // echo $form->field($model, 'alumni_address') ?>

    <?php // echo $form->field($model, 'alumni_contact_num') ?>

    <?php // echo $form->field($model, 'alumni_reg_date') ?>

    <?php // echo $form->field($model, 'alumni_occupation') ?>

    <?php // echo $form->field($model, 'alumni_company_name') ?>

    <?php // echo $form->field($model, 'alumni_company_contact_num') ?>

    <?php // echo $form->field($model, 'alumni_company_address') ?>

    <?php // echo $form->field($model, 'admin_id') ?>

    <?php // echo $form->field($model, 'volunteer_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

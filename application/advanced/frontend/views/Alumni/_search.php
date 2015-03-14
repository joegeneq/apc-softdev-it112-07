<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\AlumniSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="alumni-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'alumni_lname') ?>

    <?= $form->field($model, 'alumni_fname') ?>

    <?= $form->field($model, 'alumni_mname') ?>

    <?= $form->field($model, 'alumni_gender') ?>

    <?php // echo $form->field($model, 'alumni_birthdate') ?>

    <?php // echo $form->field($model, 'alumni_marital_stat') ?>

    <?php // echo $form->field($model, 'alumni_address') ?>

    <?php // echo $form->field($model, 'alumni_mobile') ?>

    <?php // echo $form->field($model, 'alumni_landline') ?>

    <?php // echo $form->field($model, 'alumni_email') ?>

    <?php // echo $form->field($model, 'alumni_photo') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

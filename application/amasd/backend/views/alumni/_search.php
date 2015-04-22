<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\alumniSearch */
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

    <?php // echo $form->field($model, 'alumni_nationality') ?>

    <?php // echo $form->field($model, 'alumni_occupation') ?>

    <?php // echo $form->field($model, 'alumni_marital_stat') ?>

    <?php // echo $form->field($model, 'alumni_address') ?>

    <?php // echo $form->field($model, 'alumni_mobile') ?>

    <?php // echo $form->field($model, 'alumni_landline') ?>

    <?php // echo $form->field($model, 'alumni_email') ?>

    <?php // echo $form->field($model, 'alumni_school_graduated_from') ?>

    <?php // echo $form->field($model, 'alumni_school_year_grad') ?>

    <?php // echo $form->field($model, 'alumni_school_address') ?>

    <?php // echo $form->field($model, 'alumni_school_contact_num') ?>

    <?php // echo $form->field($model, 'alumni_father_name') ?>

    <?php // echo $form->field($model, 'alumni_father_address') ?>

    <?php // echo $form->field($model, 'alumni_father_occupation') ?>

    <?php // echo $form->field($model, 'alumni_father_contact_num') ?>

    <?php // echo $form->field($model, 'alumni_mother_name') ?>

    <?php // echo $form->field($model, 'alumni_mother_address') ?>

    <?php // echo $form->field($model, 'alumni_mother_occupation') ?>

    <?php // echo $form->field($model, 'alumni_mother_contact_num') ?>

    <?php // echo $form->field($model, 'alumni_num_siblings') ?>

    <?php // echo $form->field($model, 'alumni_spouse') ?>

    <?php // echo $form->field($model, 'alumni_num_children') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

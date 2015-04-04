<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Alumni */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="alumni-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'alumni_code')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'alumni_fname')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'alumni_lname')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'alumni_mname')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'alumn_bdate')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'alumni_age')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'alumni_school_graduated')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'alumni_year_graduated')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'alumni_address')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'alumni_contact_num')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'alumni_reg_date')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'alumni_occupation')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'alumni_company_name')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'alumni_company_contact_num')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'alumni_company_address')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'admin_id')->textInput() ?>

    <?= $form->field($model, 'volunteer_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

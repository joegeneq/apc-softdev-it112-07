<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;
/* @var $this yii\web\View */
/* @var $model backend\models\alumni */
/* @var $form yii\widgets\ActiveForm */


?>

<div class="alumni-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'alumni_lname')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'alumni_fname')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'alumni_mname')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'alumni_gender')->dropDownList([
				''=> '', 'Male' => 'Male', 'Female' => 'Female' ])
				->label('Gender') ?>

    <?= $form->field($model, 'alumni_birthdate')->widget(
	DatePicker::className(), [
        // inline too, not bad
         'inline' => false, 
		 'options' => ['placeholder' => 'Select date of birth...'],
         // modify template for custom rendering
        //'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
        'clientOptions' => [
            'autoclose' => true,
            'format' => 'dd-M-yyyy'
        ]
	]);?>

    <?= $form->field($model, 'alumni_nationality')->dropDownList([
				''=> '', 'American' => 'American', 'Filipino' => 'Filipino', 'Indian' => 'Indian', 
				'Chinese' => 'Chinese', 'Japanese' => 'Japanese', 'Korean' => 'Korean' ])
				->label('Nationality') ?> 

    <?= $form->field($model, 'alumni_occupation')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'alumni_marital_stat')->dropDownList([
				''=> '', 'Single' => 'Single', 'Married' => 'Married', 'Widowed' => 'Widowed', 'Separated' => 'Separated' ])
				->label('Marital Status') ?>

    <?= $form->field($model, 'alumni_address')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'alumni_mobile')->textInput(['maxlength' => 15]) ?>

    <?= $form->field($model, 'alumni_landline')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'alumni_email')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'alumni_school_graduated_from')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'alumni_school_year_graduated')->dropDownList([
				''=> '', '1970' => '1970', '1980' => '1980', '1990' => '1990', 
				'2000' => '2000', '2010' => '2010', '2014' => '2014' ])
				->label('School Year Graduated') ?> 

    <?= $form->field($model, 'alumni_school_address')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'alumni_school_contact_num')->textInput() ?>

    <?= $form->field($model, 'alumni_photo')->textInput() ?>

    <?= $form->field($model, 'alumni_father_name')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'alumni_father_address')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'alumni_father_occupation')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'alumni_father_contact_num')->textInput() ?>

    <?= $form->field($model, 'alumni_mother_name')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'alumni_mother_address')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'alumni_mother_occupation')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'alumni_mother_contact_num')->textInput() ?>

    <?= $form->field($model, 'alumni_num_siblings')->textInput() ?>

    <?= $form->field($model, 'alumni_spouse')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'alumni_num_children')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

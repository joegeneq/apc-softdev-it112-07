<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
//use yii\jui\DatePicker;
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

    <?= $form->field($model, 'alumni_gender')->textInput(['maxlength' => 6]) ?>

    <?= $form->field($model, 'alumni_birthdate')->widget(
    DatePicker::className(), [
        // inline too, not bad
         'inline' => false, 
		 'options' => ['placeholder' => 'Select Birth Date ...'],
         // modify template for custom rendering
        //'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
        'clientOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-mm-dd'
        ]
	]);?>

    <?= $form->field($model, 'alumni_nationality')->dropDownList([
				''=> 'Select nationality', 'American' => 'American', 'Filipino' => 'Filipino', 'Indian' => 'Indian', 
				'Chinese' => 'Chinese', 'Japanese' => 'Japanese', 'Korean' => 'Korean' ]); ?> 

    <?= $form->field($model, 'alumni_occupation')->textInput(['maxlength' => 45]) ?>

   <?= $form->field($model, 'alumni_marital_stat')->dropDownList([
				''=> 'Select marital status', 'Single' => 'Single', 'Married' => 'Married', 'Widowed' => 'Widowed', 'Separated' => 'Separated' ]); ?>

	<?= $form->field($model, 'alumni_address')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'alumni_mobile')->textInput(['maxlength' => 12]) ?>

    <?= $form->field($model, 'alumni_landline')->textInput(['maxlength' => 7]) ?>

   <?= $form->field($model, 'alumni_email')->input('email') ?>

    <?= $form->field($model, 'alumni_school_graduated_from')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'alumni_school_year_grad')->dropDownList([
				''=> 'Select college graduation year', '1970' => '1970','1971' => '1971','1972' => '1972',
				'1973' => '1973','1974' => '1974', 
				'1975' => '1975','1976' => '1976',
				'1977' => '1977','1978' => '1978',
				'1979' => '1979','1980' => '1980', 
				'1981' => '1981','1982' => '1982', 
				'1983' => '1983','1984' => '1984',
				'1985' => '1985','1986' => '1986',
				'1987' => '1987','1988' => '1988',
				'1989' => '1989','1990' => '1990', 
				'1991' => '1991','1992' => '1992',
				'1993' => '1993','1994' => '1994',
				'1995' => '1995','1996' => '1996',
				'1997' => '1997','1998' => '1998',
				'1999' => '1999','2000' => '2000', 
				'2001' => '2001','2002' => '2002',
				'2003' => '2003','2004' => '2004',
				'2005' => '2005','2006' => '2006',
				'2007' => '2007','2008' => '2008',
				'2009' => '2009','2010' => '2010', 
				'2011' => '2011','2012' => '2012',
				'2013' => '2013','2014' => '2014' ]); ?>

    <?= $form->field($model, 'alumni_school_address')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'alumni_school_contact_num')->textInput() ?>

    <?= $form->field($model, 'alumni_father_name')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'alumni_father_address')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'alumni_father_occupation')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'alumni_father_contact_num')->textInput(['maxlength' => 12]) ?>

    <?= $form->field($model, 'alumni_mother_name')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'alumni_mother_address')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'alumni_mother_occupation')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'alumni_mother_contact_num')->textInput(['maxlength' => 12]) ?>

    <?= $form->field($model, 'alumni_num_siblings')->textInput() ?>

    <?= $form->field($model, 'alumni_spouse')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'alumni_num_children')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

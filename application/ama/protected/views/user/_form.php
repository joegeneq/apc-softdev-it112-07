<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'user_name'); ?>
		<?php echo $form->textField($model,'user_name',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'user_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_password'); ?>
		<?php echo $form->textField($model,'user_password',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'user_password'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_type'); ?>
		<?php echo $form->dropDownList($model,'user_type',array('User Type'=>'Admin','Encoder'),array());?>
		<?php echo $form->error($model,'user_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_lname'); ?>
		<?php echo $form->textField($model,'user_lname',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'user_lname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_fname'); ?>
		<?php echo $form->textField($model,'user_fname',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'user_fname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_mname'); ?>
		<?php echo $form->textField($model,'user_mname',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'user_mname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_gender'); ?>
		<?php echo $form->dropDownList($model,'user_gender',array('Gender'=>'Male','Female'),array());?>
		<?php echo $form->error($model,'user_gender'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_birthdate'); ?>
		<?php echo $form->textField($model,'user_birthdate'); ?>
		<?php echo $form->error($model,'user_birthdate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_marital_stat'); ?>
		<?php echo $form->dropDownList($model,'user_marital_stat',array('Marital Status'=>'Single','Married','Widowed','Separated','Divorced'),array());?>
		<?php echo $form->error($model,'user_marital_stat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_address'); ?>
		<?php echo $form->textField($model,'user_address',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'user_address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_mobile'); ?>
		<?php echo $form->textField($model,'user_mobile',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'user_mobile'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_landline'); ?>
		<?php echo $form->textField($model,'user_landline',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'user_landline'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_email'); ?>
		<?php echo $form->textField($model,'user_email',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'user_email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_photo'); ?>
		<?php echo $form->textField($model,'user_photo'); ?>
		<?php echo $form->error($model,'user_photo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
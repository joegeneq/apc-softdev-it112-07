<?php
/* @var $this VolunteerController */
/* @var $model Volunteer */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'volunteer-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'v_lname'); ?>
		<?php echo $form->textField($model,'v_lname',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'v_lname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'v_fname'); ?>
		<?php echo $form->textField($model,'v_fname',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'v_fname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'v_mname'); ?>
		<?php echo $form->textField($model,'v_mname',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'v_mname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'v_gender'); ?>
		<?php echo $form->dropDownList($model,'v_gender',array('Gender'=>'Male','Female'),array());?>
		<?php echo $form->error($model,'v_gender'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'v_birthdate'); ?>
		<?php echo $form->textField($model,'v_birthdate'); ?>
		<?php echo $form->error($model,'v_birthdate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'v_marital_status'); ?>
		<?php echo $form->dropDownList($model,'v_marital_status',array('Marital Status'=>'Single','Married','Widowed','Separated','Divorced'),array());?>
		<?php echo $form->error($model,'v_marital_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'v_address'); ?>
		<?php echo $form->textField($model,'v_address',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'v_address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'v_mobile'); ?>
		<?php echo $form->textField($model,'v_mobile',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'v_mobile'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'v_landline'); ?>
		<?php echo $form->textField($model,'v_landline',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'v_landline'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'v_email'); ?>
		<?php echo $form->textField($model,'v_email',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'v_email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'v_photo'); ?>
		<?php echo $form->textField($model,'v_photo'); ?>
		<?php echo $form->error($model,'v_photo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
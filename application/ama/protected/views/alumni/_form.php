<?php
/* @var $this AlumniController */
/* @var $model Alumni */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'alumni-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'alumni_lname'); ?>
		<?php echo $form->textField($model,'alumni_lname',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'alumni_lname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'alumni_fname'); ?>
		<?php echo $form->textField($model,'alumni_fname',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'alumni_fname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'alumni_mname'); ?>
		<?php echo $form->textField($model,'alumni_mname',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'alumni_mname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'alumni_gender'); ?>
		<?php echo $form->dropDownList($model,'alumni_gender',array('Gender'=>'Male','Female'),array());?>
		<?php echo $form->error($model,'alumni_gender'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'alumni_birthdate'); ?>
		<?php echo $form->textField($model,'alumni_birthdate'); ?>
		<?php echo $form->error($model,'alumni_birthdate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'alumni_marital_stat'); ?>
		<?php echo $form->dropDownList($model,'alumni_marital_stat',array('Marital Status'=>'Single','Married','Widowed','Separated','Divorced'),array());?>
		<?php echo $form->error($model,'alumni_marital_stat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'alumni_address'); ?>
		<?php echo $form->textField($model,'alumni_address',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'alumni_address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'alumni_mobile'); ?>
		<?php echo $form->textField($model,'alumni_mobile',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'alumni_mobile'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'alumni_landline'); ?>
		<?php echo $form->textField($model,'alumni_landline',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'alumni_landline'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'alumni_email'); ?>
		<?php echo $form->textField($model,'alumni_email',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'alumni_email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'alumni_photo'); ?>
		<?php echo $form->textField($model,'alumni_photo'); ?>
		<?php echo $form->error($model,'alumni_photo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
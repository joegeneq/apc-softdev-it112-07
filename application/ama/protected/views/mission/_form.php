<?php
/* @var $this MissionController */
/* @var $model Mission */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'mission-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
		<?php echo $form->error($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mission_name'); ?>
		<?php echo $form->textField($model,'mission_name',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'mission_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mission_description'); ?>
		<?php echo $form->textField($model,'mission_description',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'mission_description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mission_num_of_volunteer_needed'); ?>
		<?php echo $form->textField($model,'mission_num_of_volunteer_needed'); ?>
		<?php echo $form->error($model,'mission_num_of_volunteer_needed'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mission_location'); ?>
		<?php echo $form->textField($model,'mission_location',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'mission_location'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mission_contact_person_lname'); ?>
		<?php echo $form->textField($model,'mission_contact_person_lname',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'mission_contact_person_lname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mission_contact_person_fname'); ?>
		<?php echo $form->textField($model,'mission_contact_person_fname',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'mission_contact_person_fname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mission_contact_num'); ?>
		<?php echo $form->textField($model,'mission_contact_num',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'mission_contact_num'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mission_email_address'); ?>
		<?php echo $form->textField($model,'mission_email_address',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'mission_email_address'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
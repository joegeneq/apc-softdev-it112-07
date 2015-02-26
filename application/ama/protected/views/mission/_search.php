<?php
/* @var $this MissionController */
/* @var $model Mission */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mission_name'); ?>
		<?php echo $form->textField($model,'mission_name',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mission_description'); ?>
		<?php echo $form->textField($model,'mission_description',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mission_num_of_volunteer_needed'); ?>
		<?php echo $form->textField($model,'mission_num_of_volunteer_needed'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mission_location'); ?>
		<?php echo $form->textField($model,'mission_location',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mission_contact_person_lname'); ?>
		<?php echo $form->textField($model,'mission_contact_person_lname',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mission_contact_person_fname'); ?>
		<?php echo $form->textField($model,'mission_contact_person_fname',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mission_contact_num'); ?>
		<?php echo $form->textField($model,'mission_contact_num',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mission_email_address'); ?>
		<?php echo $form->textField($model,'mission_email_address',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
<?php
/* @var $this VolunteerController */
/* @var $model Volunteer */
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
		<?php echo $form->label($model,'v_lname'); ?>
		<?php echo $form->textField($model,'v_lname',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'v_fname'); ?>
		<?php echo $form->textField($model,'v_fname',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'v_mname'); ?>
		<?php echo $form->textField($model,'v_mname',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'v_gender'); ?>
		<?php echo $form->textField($model,'v_gender',array('size'=>6,'maxlength'=>6)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'v_birthdate'); ?>
		<?php echo $form->textField($model,'v_birthdate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'v_marital_status'); ?>
		<?php echo $form->textField($model,'v_marital_status',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'v_address'); ?>
		<?php echo $form->textField($model,'v_address',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'v_mobile'); ?>
		<?php echo $form->textField($model,'v_mobile',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'v_landline'); ?>
		<?php echo $form->textField($model,'v_landline',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'v_email'); ?>
		<?php echo $form->textField($model,'v_email',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'v_photo'); ?>
		<?php echo $form->textField($model,'v_photo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
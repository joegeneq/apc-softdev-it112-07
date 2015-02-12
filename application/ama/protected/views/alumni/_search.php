<?php
/* @var $this AlumniController */
/* @var $model Alumni */
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
		<?php echo $form->label($model,'alumni_lname'); ?>
		<?php echo $form->textField($model,'alumni_lname',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'alumni_fname'); ?>
		<?php echo $form->textField($model,'alumni_fname',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'alumni_mname'); ?>
		<?php echo $form->textField($model,'alumni_mname',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'alumni_gender'); ?>
		<?php echo $form->textField($model,'alumni_gender',array('size'=>6,'maxlength'=>6)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'alumni_birthdate'); ?>
		<?php echo $form->textField($model,'alumni_birthdate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'alumni_marital_stat'); ?>
		<?php echo $form->textField($model,'alumni_marital_stat',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'alumni_address'); ?>
		<?php echo $form->textField($model,'alumni_address',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'alumni_mobile'); ?>
		<?php echo $form->textField($model,'alumni_mobile',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'alumni_landline'); ?>
		<?php echo $form->textField($model,'alumni_landline',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'alumni_email'); ?>
		<?php echo $form->textField($model,'alumni_email',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'alumni_photo'); ?>
		<?php echo $form->textField($model,'alumni_photo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
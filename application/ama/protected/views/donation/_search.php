<?php
/* @var $this DonationController */
/* @var $model Donation */
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
		<?php echo $form->label($model,'donation_type'); ?>
		<?php echo $form->textField($model,'donation_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'donation_status'); ?>
		<?php echo $form->textField($model,'donation_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'donation_date'); ?>
		<?php echo $form->textField($model,'donation_date'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
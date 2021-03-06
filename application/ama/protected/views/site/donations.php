<?php
/* @var $this DonationController */
/* @var $model Donation */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'donation-donations-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// See class documentation of CActiveForm for details on this,
	// you need to use the performAjaxValidation()-method described there.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'donation_type'); ?>
		<?php echo $form->textField($model,'donation_type'); ?>
		<?php echo $form->error($model,'donation_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'donation_status'); ?>
		<?php echo $form->textField($model,'donation_status'); ?>
		<?php echo $form->error($model,'donation_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'donation_date'); ?>
		<?php echo $form->textField($model,'donation_date'); ?>
		<?php echo $form->error($model,'donation_date'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
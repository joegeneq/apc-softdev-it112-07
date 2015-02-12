<?php
/* @var $this AlumniController */
/* @var $data Alumni */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alumni_lname')); ?>:</b>
	<?php echo CHtml::encode($data->alumni_lname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alumni_fname')); ?>:</b>
	<?php echo CHtml::encode($data->alumni_fname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alumni_mname')); ?>:</b>
	<?php echo CHtml::encode($data->alumni_mname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alumni_gender')); ?>:</b>
	<?php echo CHtml::encode($data->alumni_gender); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alumni_birthdate')); ?>:</b>
	<?php echo CHtml::encode($data->alumni_birthdate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alumni_marital_stat')); ?>:</b>
	<?php echo CHtml::encode($data->alumni_marital_stat); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('alumni_address')); ?>:</b>
	<?php echo CHtml::encode($data->alumni_address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alumni_mobile')); ?>:</b>
	<?php echo CHtml::encode($data->alumni_mobile); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alumni_landline')); ?>:</b>
	<?php echo CHtml::encode($data->alumni_landline); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alumni_email')); ?>:</b>
	<?php echo CHtml::encode($data->alumni_email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alumni_photo')); ?>:</b>
	<?php echo CHtml::encode($data->alumni_photo); ?>
	<br />

	*/ ?>

</div>
<?php
/* @var $this VolunteerController */
/* @var $data Volunteer */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_lname')); ?>:</b>
	<?php echo CHtml::encode($data->v_lname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_fname')); ?>:</b>
	<?php echo CHtml::encode($data->v_fname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_mname')); ?>:</b>
	<?php echo CHtml::encode($data->v_mname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_gender')); ?>:</b>
	<?php echo CHtml::encode($data->v_gender); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_birthdate')); ?>:</b>
	<?php echo CHtml::encode($data->v_birthdate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_marital_status')); ?>:</b>
	<?php echo CHtml::encode($data->v_marital_status); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('v_address')); ?>:</b>
	<?php echo CHtml::encode($data->v_address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_mobile')); ?>:</b>
	<?php echo CHtml::encode($data->v_mobile); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_landline')); ?>:</b>
	<?php echo CHtml::encode($data->v_landline); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_email')); ?>:</b>
	<?php echo CHtml::encode($data->v_email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('v_photo')); ?>:</b>
	<?php echo CHtml::encode($data->v_photo); ?>
	<br />

	*/ ?>

</div>
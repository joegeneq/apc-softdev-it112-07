<?php
/* @var $this UserController */
/* @var $data User */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_name')); ?>:</b>
	<?php echo CHtml::encode($data->user_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_password')); ?>:</b>
	<?php echo CHtml::encode($data->user_password); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_type')); ?>:</b>
	<?php echo CHtml::encode($data->user_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_lname')); ?>:</b>
	<?php echo CHtml::encode($data->user_lname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_fname')); ?>:</b>
	<?php echo CHtml::encode($data->user_fname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_mname')); ?>:</b>
	<?php echo CHtml::encode($data->user_mname); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('user_gender')); ?>:</b>
	<?php echo CHtml::encode($data->user_gender); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_birthdate')); ?>:</b>
	<?php echo CHtml::encode($data->user_birthdate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_marital_stat')); ?>:</b>
	<?php echo CHtml::encode($data->user_marital_stat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_address')); ?>:</b>
	<?php echo CHtml::encode($data->user_address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_mobile')); ?>:</b>
	<?php echo CHtml::encode($data->user_mobile); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_landline')); ?>:</b>
	<?php echo CHtml::encode($data->user_landline); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_email')); ?>:</b>
	<?php echo CHtml::encode($data->user_email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_photo')); ?>:</b>
	<?php echo CHtml::encode($data->user_photo); ?>
	<br />

	*/ ?>

</div>
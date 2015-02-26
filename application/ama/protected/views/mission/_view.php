<?php
/* @var $this MissionController */
/* @var $data Mission */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mission_name')); ?>:</b>
	<?php echo CHtml::encode($data->mission_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mission_description')); ?>:</b>
	<?php echo CHtml::encode($data->mission_description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mission_num_of_volunteer_needed')); ?>:</b>
	<?php echo CHtml::encode($data->mission_num_of_volunteer_needed); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mission_location')); ?>:</b>
	<?php echo CHtml::encode($data->mission_location); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mission_contact_person_lname')); ?>:</b>
	<?php echo CHtml::encode($data->mission_contact_person_lname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mission_contact_person_fname')); ?>:</b>
	<?php echo CHtml::encode($data->mission_contact_person_fname); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('mission_contact_num')); ?>:</b>
	<?php echo CHtml::encode($data->mission_contact_num); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mission_email_address')); ?>:</b>
	<?php echo CHtml::encode($data->mission_email_address); ?>
	<br />

	*/ ?>

</div>
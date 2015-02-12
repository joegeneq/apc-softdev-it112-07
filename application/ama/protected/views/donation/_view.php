<?php
/* @var $this DonationController */
/* @var $data Donation */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('donation_type')); ?>:</b>
	<?php echo CHtml::encode($data->donation_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('donation_status')); ?>:</b>
	<?php echo CHtml::encode($data->donation_status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('donation_date')); ?>:</b>
	<?php echo CHtml::encode($data->donation_date); ?>
	<br />


</div>
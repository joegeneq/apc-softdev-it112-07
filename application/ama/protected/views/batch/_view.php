<?php
/* @var $this BatchController */
/* @var $data Batch */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('batch_code')); ?>:</b>
	<?php echo CHtml::encode($data->batch_code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('batch_year')); ?>:</b>
	<?php echo CHtml::encode($data->batch_year); ?>
	<br />


</div>
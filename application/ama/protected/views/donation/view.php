<?php
/* @var $this DonationController */
/* @var $model Donation */

$this->breadcrumbs=array(
	'Donations'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Donation', 'url'=>array('index')),
	array('label'=>'Create Donation', 'url'=>array('create')),
	array('label'=>'Update Donation', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Donation', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Donation', 'url'=>array('admin')),
);
?>

<h1>View Donation #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'donation_type',
		'donation_status',
		'donation_date',
	),
)); ?>

<?php
/* @var $this BatchController */
/* @var $model Batch */

$this->breadcrumbs=array(
	'Batches'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Batch', 'url'=>array('index')),
	array('label'=>'Create Batch', 'url'=>array('create')),
	array('label'=>'Update Batch', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Batch', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Batch', 'url'=>array('admin')),
);
?>

<h1>View Batch #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'batch_code',
		'batch_year',
	),
)); ?>

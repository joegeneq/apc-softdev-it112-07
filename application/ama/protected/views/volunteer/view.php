<?php
/* @var $this VolunteerController */
/* @var $model Volunteer */

$this->breadcrumbs=array(
	'Volunteers'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Volunteer', 'url'=>array('index')),
	array('label'=>'Create Volunteer', 'url'=>array('create')),
	array('label'=>'Update Volunteer', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Volunteer', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Volunteer', 'url'=>array('admin')),
);
?>

<h1>View Volunteer #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'v_lname',
		'v_fname',
		'v_mname',
		'v_gender',
		'v_birthdate',
		'v_marital_status',
		'v_address',
		'v_mobile',
		'v_landline',
		'v_email',
		'v_photo',
	),
)); ?>

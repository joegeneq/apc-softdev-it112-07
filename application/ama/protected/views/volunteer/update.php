<?php
/* @var $this VolunteerController */
/* @var $model Volunteer */

$this->breadcrumbs=array(
	'Volunteers'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Volunteer', 'url'=>array('index')),
	array('label'=>'Create Volunteer', 'url'=>array('create')),
	array('label'=>'View Volunteer', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Volunteer', 'url'=>array('admin')),
);
?>

<h1>Update Volunteer <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
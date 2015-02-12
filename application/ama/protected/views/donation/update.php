<?php
/* @var $this DonationController */
/* @var $model Donation */

$this->breadcrumbs=array(
	'Donations'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Donation', 'url'=>array('index')),
	array('label'=>'Create Donation', 'url'=>array('create')),
	array('label'=>'View Donation', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Donation', 'url'=>array('admin')),
);
?>

<h1>Update Donation <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
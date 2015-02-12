<?php
/* @var $this VolunteerController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Volunteers',
);

$this->menu=array(
	array('label'=>'Create Volunteer', 'url'=>array('create')),
	array('label'=>'Manage Volunteer', 'url'=>array('admin')),
);
?>

<h1>Volunteers</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

<a href="/ama/index.php?r=volunteer/create"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/css/images/icon-write.png" width="40px" height="40px" /></a>
<a href="/ama/index.php?r=volunteer/admin"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/css/images/icon-edit.png" width="40px" height="40px" /></a>

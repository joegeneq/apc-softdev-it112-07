<?php
/* @var $this AlumniController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Alumnus',
);

$this->menu=array(
	array('label'=>'Create Alumni', 'url'=>array('create')),
	array('label'=>'Manage Alumni', 'url'=>array('admin')),
);
?>

<h1>Alumnus / Alumnae</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

<a href="/ama/index.php?r=alumni/create"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/css/images/icon-write.png" width="40px" height="40px" /></a>
<a href="/ama/index.php?r=alumni/admin"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/css/images/icon-edit.png" width="40px" height="40px" /></a>

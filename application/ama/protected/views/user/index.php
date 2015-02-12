<?php
/* @var $this UserController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Users',
);

$this->menu=array(
	array('label'=>'Create User', 'url'=>array('create')),
	array('label'=>'Manage User', 'url'=>array('admin')),
);
?>

<h1>Users</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

<a href="/ama/index.php?r=user/create"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/css/images/icon-write.png" width="40px" height="40px" /></a>
<a href="/ama/index.php?r=user/admin"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/css/images/icon-edit.png" width="40px" height="40px" /></a>


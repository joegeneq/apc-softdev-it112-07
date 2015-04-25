<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\batch; 
use backend\models\area; 
use yii\helpers\ArrayHelper;
use dosamigos\datepicker\DatePicker;

/* @var $this yii\web\View */
/* @var $model backend\models\Mission */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mission-form">

    <?php $form = ActiveForm::begin(); ?>
	
	<?php
	        $batch=batch::find()->all();
	
	        $listData=ArrayHelper::map($batch,'id','batch_code');
	
	        echo $form->field($model, 'batch_id')->dropDownList(
	                                $listData,
	                                ['prompt'=>'Select batch'])->label('Batch') ;
	    ?>

    <?php
	        $area=area::find()->all();
	
	        $listData=ArrayHelper::map($area,'id','area_location');
	
	        echo $form->field($model, 'area_id')->dropDownList(
	                                $listData,
	                                ['prompt'=>'Select location'])->label('Location') ;
	    ?>
	
	<?php echo $form->field($model, 'mission_length')->dropDownList(['' => '', 'Six months' => 'Six months', 'One year' => 'One year']); ?>
   
     <?= $form->field($model, 'mission_start_date')->widget(
    DatePicker::className(), [
        // inline too, not bad
         'inline' => false, 
		 'options' => ['placeholder' => 'Select date created'],
         // modify template for custom rendering
        //'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
        'clientOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-mm-dd'
        ]
	]);?>

     <?= $form->field($model, 'mission_end_date')->widget(
    DatePicker::className(), [
        // inline too, not bad
         'inline' => false, 
		 'options' => ['placeholder' => 'Select date created'],
         // modify template for custom rendering
        //'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
        'clientOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-mm-dd'
        ]
	]);?>

    <?php echo $form->field($model, 'mission_status')->dropDownList(['' => '', 'Ongoing' => 'Ongoing', 'Finished' => 'Finished']); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

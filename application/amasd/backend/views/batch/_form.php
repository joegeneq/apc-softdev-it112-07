<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\alumni; 
use yii\helpers\ArrayHelper;
use dosamigos\datepicker\DatePicker;
 
/* @var $this yii\web\View */
/* @var $model backend\models\batch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="batch-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'batch_code')->textInput(['maxlength' => 11]) ?>

    <?php
	        $alumni=alumni::find()->all();
	
	        $listData=ArrayHelper::map($alumni,'id','alumni_lname');
	
	        echo $form->field($model, 'alumni_id')->dropDownList(
	                                $listData,
	                                ['prompt'=>'Select alumni'])->label('Alumni Name') ;
	    ?>

	
	 <?= $form->field($model, 'batch_created_date')->widget(
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

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

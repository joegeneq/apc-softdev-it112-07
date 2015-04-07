<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\alumni;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $model backend\models\mission */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mission-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php
		$alumni = alumni::find()->all(); 
		$listData = ArrayHelper::map($alumni, 'id', 'alumni_lname');
		echo $form->field($model, 'alumni_id')->dropDownList(
							$listData,
							['prompt'=>'Select alumni name'])
	?>

    <?= $form->field($model, 'mission_location')->textInput() ?>

    <?= $form->field($model, 'mission_length')->dropDownList(['' => 'Select mission period', 'Six months' => 'Six months', 'One year' => 'One year']); ?>

    <?= $form->field($model, 'mission_start_date')->textInput() ?>

    <?= $form->field($model, 'mission_end_date')->textInput() ?>

    <?= $form->field($model, 'mission_status')->dropDownList(['' => 'Select mission status', 'ongoing' => 'ongoing', 'finished' => 'finished']); ?>
	

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

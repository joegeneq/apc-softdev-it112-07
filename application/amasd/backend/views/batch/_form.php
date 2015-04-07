<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\alumni;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $model backend\models\batch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="batch-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'batch_code')->textInput() ?>

    <?= $form->field($model, 'batch_created_date')->textInput() ?>

    <?php
		$alumni = alumni::find()->all(); 
		$listData = ArrayHelper::map($alumni, 'id', 'alumni_lname');
		echo $form->field($model, 'alumni_id')->dropDownList(
							$listData,
							['prompt'=>'Select alumni name'])
	?>
	
	<div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Alumni */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="alumni-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'alumni_lname')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'alumni_fname')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'alumni_mname')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'alumni_gender')->textInput(['maxlength' => 6]) ?>

    <?= $form->field($model, 'alumni_birthdate')->textInput() ?>

    <?= $form->field($model, 'alumni_marital_stat')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'alumni_address')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'alumni_mobile')->textInput(['maxlength' => 15]) ?>

    <?= $form->field($model, 'alumni_landline')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'alumni_email')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'alumni_photo')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

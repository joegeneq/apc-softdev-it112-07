<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\mission */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mission-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'mission_num_of_volunteer')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'mission_location')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'mission_contact_person_lname')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'mission_contact_person_fname')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'mission_contact_num')->textInput(['maxlength' => 12]) ?>

    <?= $form->field($model, 'mission_email_address')->textInput(['maxlength' => 255]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

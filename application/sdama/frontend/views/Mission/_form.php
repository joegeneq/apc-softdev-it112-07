<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Mission */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mission-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'mission_name')->textInput() ?>

    <?= $form->field($model, 'mission_desc')->textInput() ?>

    <?= $form->field($model, 'mission_num_of_volunteer_needed')->textInput() ?>

    <?= $form->field($model, 'mission_location')->textInput() ?>

    <?= $form->field($model, 'mission_contact_person_lname')->textInput() ?>

    <?= $form->field($model, 'mission_contact_person_fname')->textInput() ?>

    <?= $form->field($model, 'mission_contact_num')->textInput() ?>

    <?= $form->field($model, 'mission_email_address')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

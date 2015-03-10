<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var frontend\models\Volunteer $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="volunteer-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'volunteer_status')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'volunteer_code')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'volunteer_fname')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'volunteer_lname')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'volunteer_mname')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'volunteer_bdate')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'volunteer_age')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'volunteer_school_graduated')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'volunteer_year_graduated')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'volunteer_address')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'volunteer_contact_num')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'volunteer_start_date')->textInput(['maxlength' => 45]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

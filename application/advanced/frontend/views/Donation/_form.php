<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Donation */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="donation-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'donation_type')->textInput() ?>

    <?= $form->field($model, 'donation_status')->textInput() ?>

    <?= $form->field($model, 'donation_date')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

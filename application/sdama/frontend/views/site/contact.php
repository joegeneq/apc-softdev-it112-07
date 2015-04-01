<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

$this->title = 'Contact';
//$this->params['breadcrumbs'][] = $this->title;
?>
<link href='http://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
<center><img src="http://s9.postimg.org/e9vzmb48v/ama.png"></center>
		<center><h1>AMA Foundation</h1>
        <h4>Associate Missionaries of the Assumption Foundation</h4><br>
		</center><br><br><br><br>
<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>
    <p>
        If you have business inquiries or other questions, please fill out the following form to contact us. Thank you.
    </p>
    <div class="row">
        <div class="col-lg-4">
            <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
                <?= $form->field($model, 'name') ?>
                <?= $form->field($model, 'email') ?>
                <?= $form->field($model, 'subject') ?>
                <?= $form->field($model, 'body')->textArea(['rows' => 6]) ?>
                <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                    'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                ]) ?>
                <div class="form-group">
                    <?= Html::submitButton('Submit', ['class' => 'btn', 'name' => 'contact-button']) ?>
                </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>

</div>

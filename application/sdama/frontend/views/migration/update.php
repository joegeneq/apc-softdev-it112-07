<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var frontend\models\Migration $model
 */

$this->title = 'Update Migration: ' . $model->version;
$this->params['breadcrumbs'][] = ['label' => 'Migrations', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->version, 'url' => ['view', 'id' => $model->version]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="migration-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

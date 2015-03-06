<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var frontend\models\Logs $model
 */

$this->title = 'Create Logs';
$this->params['breadcrumbs'][] = ['label' => 'Logs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="logs-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

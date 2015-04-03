<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var backend\models\volunteer $model
 */

$this->title = 'Create Volunteer';
$this->params['breadcrumbs'][] = ['label' => 'Volunteers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="volunteer-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

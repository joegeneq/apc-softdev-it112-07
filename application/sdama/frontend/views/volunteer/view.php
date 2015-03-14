<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/**
 * @var yii\web\View $this
 * @var frontend\models\Volunteer $model
 */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Volunteers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="volunteer-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'volunteer_status',
            'volunteer_code',
            'volunteer_fname',
            'volunteer_lname',
            'volunteer_mname',
            'volunteer_bdate',
            'volunteer_age',
            'volunteer_school_graduated',
            'volunteer_year_graduated',
            'volunteer_address',
            'volunteer_contact_num',
            'volunteer_start_date',
            'batch_id',
        ],
    ]) ?>

</div>

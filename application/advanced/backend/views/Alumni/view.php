<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Alumni */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Alumnis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="alumni-view">

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
            'alumni_code',
            'alumni_fname',
            'alumni_lname',
            'alumni_mname',
            'alumn_bdate',
            'alumni_age',
            'alumni_school_graduated',
            'alumni_year_graduated',
            'alumni_address',
            'alumni_contact_num',
            'alumni_reg_date',
            'alumni_occupation',
            'alumni_company_name',
            'alumni_company_contact_num',
            'alumni_company_address',
            'admin_id',
            'volunteer_id',
        ],
    ]) ?>

</div>

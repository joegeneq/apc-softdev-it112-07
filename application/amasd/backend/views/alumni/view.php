<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\alumni */

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
            'alumni_lname',
            'alumni_fname',
            'alumni_mname',
            'alumni_gender',
            'alumni_birthdate',
            'alumni_nationality',
            'alumni_occupation',
            'alumni_marital_stat',
            'alumni_address',
            'alumni_mobile',
            'alumni_landline',
            'alumni_email:email',
            'alumni_school_graduated_from',
            'alumni_school_year_grad',
            'alumni_school_address',
            'alumni_school_contact_num',
            'alumni_photo',
            'alumni_father_name',
            'alumni_father_address',
            'alumni_father_occupation',
            'alumni_father_contact_num',
            'alumni_mother_name',
            'alumni_mother_address',
            'alumni_mother_occupation',
            'alumni_mother_contact_num',
            'alumni_num_siblings',
            'alumni_spouse',
            'alumni_num_children',
        ],
    ]) ?>

</div>

<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\alumniSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Alumnis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="alumni-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Alumni', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'alumni_lname',
            'alumni_fname',
            'alumni_mname',
            'alumni_gender',
            // 'alumni_birthdate',
            // 'alumni_nationality',
            // 'alumni_occupation',
            // 'alumni_marital_stat',
            // 'alumni_address',
            // 'alumni_mobile',
            // 'alumni_landline',
            // 'alumni_email:email',
            // 'alumni_school_graduated_from',
            // 'alumni_school_year_graduated',
            // 'alumni_school_address',
            // 'alumni_school_contact_num',
            // 'alumni_photo',
            // 'alumni_father_name',
            // 'alumni_father_address',
            // 'alumni_father_occupation',
            // 'alumni_father_contact_num',
            // 'alumni_mother_name',
            // 'alumni_mother_address',
            // 'alumni_mother_occupation',
            // 'alumni_mother_contact_num',
            // 'alumni_num_siblings',
            // 'alumni_spouse',
            // 'alumni_num_children',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>

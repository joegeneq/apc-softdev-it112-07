<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\AlumniSearch */
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
            'alumni_code',
            'alumni_fname',
            'alumni_lname',
            'alumni_mname',
            // 'alumn_bdate',
            // 'alumni_age',
            // 'alumni_school_graduated',
            // 'alumni_year_graduated',
            // 'alumni_address',
            // 'alumni_contact_num',
            // 'alumni_reg_date',
            // 'alumni_occupation',
            // 'alumni_company_name',
            // 'alumni_company_contact_num',
            // 'alumni_company_address',
            // 'admin_id',
            // 'volunteer_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>

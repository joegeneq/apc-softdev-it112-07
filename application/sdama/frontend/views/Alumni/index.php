<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\AlumniSearch */
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
            // 'alumni_marital_stat',
            // 'alumni_address',
            // 'alumni_mobile',
            // 'alumni_landline',
            // 'alumni_email:email',
            // 'alumni_photo',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>

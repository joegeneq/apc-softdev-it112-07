<?php

use yii\helpers\Html;
//use yii\grid\GridView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\alumniSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Alumni';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="alumni-index">

   <?php 
    $gridColumns = [
        ['class' => 'kartik\grid\SerialColumn'],

            //'id',
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
             'alumni_email:email',
            // 'alumni_school_graduated_from',
            // 'alumni_school_year_grad',
            // 'alumni_school_address',
            // 'alumni_school_contact_num',
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

             ['class' => 'kartik\grid\ActionColumn'],
            ];
			
    echo GridView::widget([
        'dataProvider'=> $dataProvider,
        'filterModel' => $searchModel,
        'columns' => $gridColumns,
        'responsive'=>true,
        'hover'=>true,
        'containerOptions' => ['style'=>'overflow: auto'], // only set when $responsive = false
        'headerRowOptions'=>['class'=>'kartik-sheet-style'],
        'filterRowOptions'=>['class'=>'kartik-sheet-style'],
        'pjax' => true, 
        'floatHeader'=>true,
        'panel' => [
            'heading'=>'<h3 class="panel-title"><i class="glyphicon glyphicon-user"></i>&nbsp&nbsp Alumni</h3>',
            'type'=>GridView::TYPE_PRIMARY,
            'before'=>Html::a('<i class="glyphicon glyphicon-plus"></i> Add New Alumna', ['create'], ['class' => 'btn btn-success']),
            'after'=>Html::a('<i class="glyphicon glyphicon-repeat"></i> Reset', ['index'], ['class' => 'btn btn-info']),
        ],
    ]); 
    ?>

</div>
<?php

use yii\helpers\Html;
//use yii\grid\GridView;
use kartik\grid\GridView;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\batchSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Batches';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="batch-index">

   <div class="alumni-index">

   <?php 
    $gridColumns = [
        ['class' => 'kartik\grid\SerialColumn'],

            //'id',
            'batch_code',
			['attribute' => 'alumni_id',
			'label'=> 'Last Name (Alumni)',
			'value'=> 'alumni.alumni_lname',
			'filter' => yii\helpers\ArrayHelper::map(backend\models\alumni::find()->all(),'id','alumni_lname')],
			['attribute' => 'alumni_id',
			'label'=> 'First Name (Alumni)',
			'value'=> 'alumni.alumni_fname',
			'filter' => yii\helpers\ArrayHelper::map(backend\models\alumni::find()->all(),'id','alumni_fname')],
			['attribute' => 'alumni_id',
			'label'=> 'Email Address',
			'value'=> 'alumni.alumni_email',
			'filter' => yii\helpers\ArrayHelper::map(backend\models\alumni::find()->all(),'id','alumni_email')],
            //'batch_created_date',
            

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
            'heading'=>'<h3 class="panel-title"><i class="glyphicon glyphicon-user"></i>&nbsp&nbsp Batches</h3>',
            'type'=>GridView::TYPE_PRIMARY,
            'before'=>Html::a('<i class="glyphicon glyphicon-plus"></i> Add New Batch', ['create'], ['class' => 'btn btn-success']),
            'after'=>Html::a('<i class="glyphicon glyphicon-repeat"></i> Reset', ['index'], ['class' => 'btn btn-info']),
        ],
    ]); 
    ?>

</div>

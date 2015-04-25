<?php

use yii\helpers\Html;
//use yii\grid\GridView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\MissionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Mission Assignment';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mission-index">

    <?php 
    $gridColumns = [
        ['class' => 'kartik\grid\SerialColumn'],


            //'id',
            ['attribute' => 'batch_id',
			'label'=> 'Batch',
			'value'=> 'batch.batch_code',
			'filter' => yii\helpers\ArrayHelper::map(backend\models\batch::find()->all(),'id','batch_code')],
         			
			['attribute' => 'area_id',
			'label'=> 'Location',
			'value'=> 'area.area_location',
			'filter' => yii\helpers\ArrayHelper::map(backend\models\area::find()->all(),'id','area_location')],
			
            'mission_length',
            'mission_start_date',
            'mission_end_date',
            'mission_status',

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
            'heading'=>'<h3 class="panel-title"><i class="glyphicon glyphicon-user"></i>&nbsp&nbsp Mission Assignment</h3>',
            'type'=>GridView::TYPE_PRIMARY,
            'before'=>Html::a('<i class="glyphicon glyphicon-plus"></i> Add New Assignment', ['create'], ['class' => 'btn btn-success']),
            'after'=>Html::a('<i class="glyphicon glyphicon-repeat"></i> Reset', ['index'], ['class' => 'btn btn-info']),
        ],
    ]); 
    ?>

</div>

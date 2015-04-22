<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\missionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Mission Assignment';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mission-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Mission', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

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

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\missionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Missions';
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

            'id',
			['attribute' => 'alumni_id',
			'label'=> 'Alumni',
			'value'=> 'alumni.alumni_lname',
			'filter' => yii\helpers\ArrayHelper::map(backend\models\alumni::find()->all(),'id','alumni_lname')],
            'mission_location',
            'mission_length',
            'mission_start_date',
            'mission_end_date',
            'mission_status',
            

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>

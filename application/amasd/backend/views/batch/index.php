<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\batchSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Batches';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="batch-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Batch', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'batch_code',
			['attribute' => 'alumni_id',
			'label'=> 'Alumni',
			'value'=> 'alumni.alumni_lname',
			'filter' => yii\helpers\ArrayHelper::map(backend\models\alumni::find()->all(),'id','alumni_lname')],
            'batch_created_date',
            

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>

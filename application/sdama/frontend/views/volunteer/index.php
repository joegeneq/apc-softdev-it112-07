<?php

use yii\helpers\Html;
use yii\grid\GridView;

/**
 * @var yii\web\View $this
 * @var yii\data\ActiveDataProvider $dataProvider
 * @var frontend\models\VolunteerSearch $searchModel
 */

$this->title = 'Volunteers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="volunteer-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Volunteer', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'volunteer_status',
            'volunteer_code',
            'volunteer_fname',
            'volunteer_lname',
            // 'volunteer_mname',
            // 'volunteer_bdate',
            // 'volunteer_age',
            // 'volunteer_school_graduated',
            // 'volunteer_year_graduated',
            // 'volunteer_address',
            // 'volunteer_contact_num',
            // 'volunteer_start_date',
            // 'batch_id',
[
'attribute' => 'batch_id',
'label' => 'Batch',
'value' => 'batch.batch_code',
'filter' => yii\helpers\ArrayHelper::map(frontend\models\Batch::find()->all(), 'id', 'batch_code')
],
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>

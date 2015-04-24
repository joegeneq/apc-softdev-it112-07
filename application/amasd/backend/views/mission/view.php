<script type="text/javascript">
<!--//
function sizeFrame(frameId) {
var F = document.getElementById(frameId);
if(F.contentDocument) {
F.height = F.contentDocument.documentElement.scrollHeight+30; //FF 3.0.11, Opera 9.63, and Chrome
} else {
F.height = F.contentWindow.document.body.scrollHeight+30; //IE6, IE7 and Chrome
}
}
// window.onload=sizeFrame; 
//-->
</script>

<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
//use yii\helpers\ArrayHelper; 
use backend\models\batch;
use backend\models\alumni;

/* @var $this yii\web\View */
/* @var $model backend\models\mission */
/* @var $model backend\models\batch */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Missions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mission-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
			[                      // the owner name of the model
            'label' => 'Batch',
            'value' => $model->batch->batch_code,
        ],
            [                      // the owner name of the model
            'label' => 'Area',
            'value' => $model->area->area_location,
        ],
            'mission_length',
            'mission_start_date',
            'mission_end_date',
            'mission_status',
        ],
    ]) ?>

	
<iframe width="100%" id="myFrame" src="./index.php?r=batch%2Findex&batchSearch%5Bbatch_id%5D=<?= $model->batch_id?>"
    scrolling="no" height="100%" width="100%" style="position:absolute; clip:rect(120px,1400px,550px,10px);
            top:350px; left: -1px; frameborder="0" onload="sizeFrame('myFrame')">
</iframe>
	
</div>

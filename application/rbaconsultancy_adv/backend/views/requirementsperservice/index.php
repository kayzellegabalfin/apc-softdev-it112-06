<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\models\servicelist;
use common\models\requirementslist;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\RequirementsPerServiceSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Requirements Per Services';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="requirements-per-service-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Requirements Per Service', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'rps_id',
			['attribute' => 'rps_name', 'label' => 'Requirements Per Service Name Name'],
			// ['attribute' => 'slist_name', 'label' => 'Services Name'],
			[
		              'attribute'=>'slist_id', 'label' => 'Services Name',
		              'value'=>'servicelist.slist_name',
	             ],
				 
		//	['attribute' => 'rlist_name', 'label' => 'Requirements Name'],
            [
		              'attribute'=>'rlist_id', 'label' => 'Requirements Name',
		              'value'=>'requirementslist.rlist_name',
	             ],
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>

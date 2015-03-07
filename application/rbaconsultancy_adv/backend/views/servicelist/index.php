<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ServicelistSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Servicelists';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="servicelist-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Servicelist', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'slist_id',
			['attribute' => 'slist_name', 'label' => 'Service Name'],
			['attribute' => 'slist_desc', 'label' => 'Service Description'],
			['attribute' => 'slist_type', 'label' => 'Service Type'],
            ['attribute' => 'slist_dateadded', 'label' => 'Service Date Added'], 

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>

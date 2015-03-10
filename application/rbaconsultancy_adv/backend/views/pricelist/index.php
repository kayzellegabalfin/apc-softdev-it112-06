<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\PricelistSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Price List';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pricelist-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Price List', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           // 'plist_id',
		   ['label' => 'Price Name', 'attribute' => 'plist_name'],
		   ['label' => 'Cost of Service', 'attribute' => 'plist_price'],
		   ['label' => 'Date Added', 'attribute' => 'plist_dateadded'],
		   ['label' => 'Service Name', 'attribute' => 'slist_id'],
            
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>

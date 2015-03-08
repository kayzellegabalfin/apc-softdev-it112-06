<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ServicesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Visa Transactions';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="services-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Visa Transactions', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            ['label' => 'Transaction Code', 'attribute' => 'service_id'],
            ['label' => 'Acquired by', 'attribute' => 'user.username'],
            ['label' => 'Service', 'attribute' => 'servicelist.slist_name'],
            ['label' => 'Date Applied', 'attribute' => 'service_dateapplied'],
            ['label' => 'Status', 'attribute' => 'service_status'],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>

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
            'slist_name:ntext',
            'slist_desc:ntext',
            'slist_type',
            'slist_dateadded',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>

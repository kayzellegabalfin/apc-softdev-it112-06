<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\RequirementsPerUserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Requirements Per Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="requirements-per-user-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Requirements Per User', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'rpu_id',
            'rlist_id', //requirement name
            'user_id', //submitted by
            'service_id', //service name
            'rpu_datefilesubmitted', //date
            'rpu_fileuploaded', //uploaded files, if applicable
            'rpu_status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>

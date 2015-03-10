<?php

use yii\helpers\Html;
use yii\grid\GridView;


/* @var $this yii\web\View */
/* @var $searchModel common\models\RequirementsListSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Requirements Lists';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="requirements-list-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Requirements', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
			
            ['label' => 'Requirement Name', 'attribute' => 'rlist_name'],
			['label' => 'Requirement Description', 'attribute' => 'rlist_desc'],
			['label' => 'Date Added', 'attribute' => 'rlist_dateadded'],
			['label' => 'Service Name', 'attribute' => 'slist_id',  'value' => 'slist.slist_name'],
      		
		['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>

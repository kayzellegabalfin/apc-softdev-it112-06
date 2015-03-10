<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Pricelist */

$this->title = $model->plist_id;
$this->params['breadcrumbs'][] = ['label' => 'Price List', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pricelist-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->plist_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->plist_id], [
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
           // 'plist_id',
           ['label' => 'Price Name', 'attribute' => 'plist_name'],
		   ['label' => 'Cost of Service', 'attribute' => 'plist_price'],
		   ['label' => 'Date Added', 'attribute' => 'plist_dateadded'],
		   ['label' => 'Service Name', 'attribute' => 'slist_id'],
            
        ],
    ]) ?>

</div>

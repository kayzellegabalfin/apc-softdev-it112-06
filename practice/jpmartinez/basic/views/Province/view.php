<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\models\Region;
/* @var $this yii\web\View */
/* @var $model app\models\province */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Provinces', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="province-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id, 'region_id' => $model->region_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id, 'region_id' => $model->region_id], [
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
            'id',
            'province_code',
            'province_description',
            'region_id',
			[
			'label' => 'Region Description',
			'value' => $model->region->region_description,
			],
        ],
		
    ]) ?>

</div>

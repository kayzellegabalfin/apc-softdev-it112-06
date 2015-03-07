<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\RequirementsPerService */

$this->title = $model->rps_id;
$this->params['breadcrumbs'][] = ['label' => 'Requirements Per Services', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="requirements-per-service-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->rps_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->rps_id], [
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
            'rps_id',
              'rps_id',
			['attribute' => 'rps_name', 'label' => 'Requirements Per Service Name Name'],
			['attribute' => 'slist_name', 'label' => 'Services Name'],
			['attribute' => 'rlist_name', 'label' => 'Requirements Name'],
            'rps_name:ntext',
          
        ],
    ]) ?>

</div>

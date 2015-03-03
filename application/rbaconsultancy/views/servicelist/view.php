<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ServiceList */

$this->title = $model->slist_id;
$this->params['breadcrumbs'][] = ['label' => 'Service Lists', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="service-list-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->slist_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->slist_id], [
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
            'slist_id',
            'slist_name',
            'slist_desc:ntext',
        ],
    ]) ?>

</div>

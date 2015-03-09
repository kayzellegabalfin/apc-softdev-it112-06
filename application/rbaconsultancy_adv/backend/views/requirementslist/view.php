<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\RequirementsList */

$this->title = $model->rlist_id;
$this->params['breadcrumbs'][] = ['label' => 'Requirements Lists', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="requirements-list-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->rlist_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->rlist_id], [
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
            'rlist_id',
            'rlist_name',
            'rlist_desc:ntext',
            'rlist_dateadded',
            'slist_id',
        ],
    ]) ?>

</div>

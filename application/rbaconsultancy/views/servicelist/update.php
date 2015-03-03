<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ServiceList */

$this->title = 'Update Service List: ' . ' ' . $model->slist_id;
$this->params['breadcrumbs'][] = ['label' => 'Service Lists', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->slist_id, 'url' => ['view', 'id' => $model->slist_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="service-list-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

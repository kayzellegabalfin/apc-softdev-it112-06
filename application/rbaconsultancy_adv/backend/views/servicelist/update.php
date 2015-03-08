<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Servicelist */

$this->title = 'Update Service: ' . ' ' . $model->slist_name;
$this->params['breadcrumbs'][] = ['label' => 'Service List', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->slist_name, 'url' => ['view', 'id' => $model->slist_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="servicelist-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

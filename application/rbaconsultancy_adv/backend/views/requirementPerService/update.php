<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\RequirementsPerService */

$this->title = 'Update Requirements Per Service: ' . ' ' . $model->rps_id;
$this->params['breadcrumbs'][] = ['label' => 'Requirements Per Services', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->rps_id, 'url' => ['view', 'id' => $model->rps_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="requirements-per-service-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

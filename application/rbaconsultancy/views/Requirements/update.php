<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\requirements */

$this->title = 'Update Requirements: ' . ' ' . $model->req_id;
$this->params['breadcrumbs'][] = ['label' => 'Requirements', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->req_id, 'url' => ['view', 'id' => $model->req_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="requirements-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

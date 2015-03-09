<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\RequirementsPerUser */

$this->title = 'Update Requirements Per User: ' . ' ' . $model->rpu_id;
$this->params['breadcrumbs'][] = ['label' => 'Requirements Per Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->rpu_id, 'url' => ['view', 'id' => $model->rpu_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="requirements-per-user-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\RequirementsList */

$this->title = 'Update Requirements List: ' . ' ' . $model->rlist_id;
$this->params['breadcrumbs'][] = ['label' => 'Requirements Lists', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->rlist_id, 'url' => ['view', 'id' => $model->rlist_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="requirements-list-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

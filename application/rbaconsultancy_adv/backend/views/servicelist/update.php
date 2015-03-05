<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Servicelist */

$this->title = 'Update Servicelist: ' . ' ' . $model->slist_id;
$this->params['breadcrumbs'][] = ['label' => 'Servicelists', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->slist_id, 'url' => ['view', 'id' => $model->slist_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="servicelist-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Pricelist */

$this->title = 'Update Pricelist: ' . ' ' . $model->plist_id;
$this->params['breadcrumbs'][] = ['label' => 'Pricelists', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->plist_id, 'url' => ['view', 'id' => $model->plist_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pricelist-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

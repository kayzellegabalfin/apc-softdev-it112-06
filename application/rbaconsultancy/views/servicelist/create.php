<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ServiceList */

$this->title = 'Create Service List';
$this->params['breadcrumbs'][] = ['label' => 'Service Lists', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="service-list-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

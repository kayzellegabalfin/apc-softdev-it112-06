<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Services */

$this->title = 'Create Visa Transaction';
$this->params['breadcrumbs'][] = ['label' => 'Visa Transactions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="services-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

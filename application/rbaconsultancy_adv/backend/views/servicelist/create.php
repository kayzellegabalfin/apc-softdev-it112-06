<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Servicelist */

$this->title = 'Create Service';
$this->params['breadcrumbs'][] = ['label' => 'Service List', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="servicelist-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

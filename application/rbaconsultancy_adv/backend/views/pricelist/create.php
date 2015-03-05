<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Pricelist */

$this->title = 'Create Pricelist';
$this->params['breadcrumbs'][] = ['label' => 'Pricelists', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pricelist-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

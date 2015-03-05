<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\RequirementsPerService */

$this->title = 'Create Requirements Per Service';
$this->params['breadcrumbs'][] = ['label' => 'Requirements Per Services', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="requirements-per-service-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

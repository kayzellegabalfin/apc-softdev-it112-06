<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\RequirementsList */

$this->title = 'Create Requirements List';
$this->params['breadcrumbs'][] = ['label' => 'Requirements Lists', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="requirements-list-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

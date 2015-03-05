<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\RequirementsPerServiceSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="requirements-per-service-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'rps_id') ?>

    <?= $form->field($model, 'rps_name') ?>

    <?= $form->field($model, 'slist_id') ?>

    <?= $form->field($model, 'rlist_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

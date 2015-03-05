<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ServicelistSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="servicelist-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'slist_id') ?>

    <?= $form->field($model, 'slist_name') ?>

    <?= $form->field($model, 'slist_desc') ?>

    <?= $form->field($model, 'slist_type') ?>

    <?= $form->field($model, 'slist_dateadded') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\RequirementsListSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="requirements-list-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'rlist_id') ?>

    <?= $form->field($model, 'rlist_name') ?>

    <?= $form->field($model, 'rlist_desc') ?>

    <?= $form->field($model, 'rlist_dateadded') ?>

    <?= $form->field($model, 'slist_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

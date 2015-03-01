<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RequirementsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="requirements-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'req_id') ?>

    <?= $form->field($model, 'user_id') ?>

    <?= $form->field($model, 'slist_id') ?>

    <?= $form->field($model, 'rlist_id') ?>

    <?= $form->field($model, 'req_status') ?>

    <?php // echo $form->field($model, 'req_fileuploaded') ?>

    <?php // echo $form->field($model, 'req_datefileuploaded') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

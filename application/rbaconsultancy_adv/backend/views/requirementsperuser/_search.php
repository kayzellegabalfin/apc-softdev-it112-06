<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\RequirementsPerUserSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="requirements-per-user-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'rpu_id') ?>

    <?= $form->field($model, 'rpu_status') ?>

    <?= $form->field($model, 'rpu_datefilesubmitted') ?>

    <?= $form->field($model, 'rpu_fileuploaded') ?>

    <?= $form->field($model, 'rps_id') ?>

    <?php // echo $form->field($model, 'user_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\RequirementsPerUser */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="requirements-per-user-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'rpu_status')->textInput(['maxlength' => 255])->label('Requirement Status') ?>

    <?= $form->field($model, 'rpu_datefilesubmitted')->textInput()->label('Requirement File Submitted') ?>

    <?= $form->field($model, 'rpu_fileuploaded')->textInput(['maxlength' => 255])->label('Requirement File Uploaded') ?>

    <?= $form->field($model, 'rlist_id')->textInput() ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

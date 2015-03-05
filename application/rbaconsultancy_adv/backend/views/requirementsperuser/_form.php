<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\RequirementsPerUser */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="requirements-per-user-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'rpu_id')->textInput() ?>

    <?= $form->field($model, 'rpu_status')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'rpu_datefilesubmitted')->textInput() ?>

    <?= $form->field($model, 'rpu_fileuploaded')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'rps_id')->textInput() ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

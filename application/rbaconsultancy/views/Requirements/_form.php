<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\requirements */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="requirements-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'req_id')->textInput(['maxlength' => 8]) ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'slist_id')->textInput() ?>

    <?= $form->field($model, 'rlist_id')->textInput() ?>

    <?= $form->field($model, 'req_status')->textInput(['maxlength' => 25]) ?>

    <?= $form->field($model, 'req_fileuploaded')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'req_datefileuploaded')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

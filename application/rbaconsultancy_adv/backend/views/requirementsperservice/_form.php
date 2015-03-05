<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\RequirementsPerService */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="requirements-per-service-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'rps_id')->textInput() ?>

    <?= $form->field($model, 'rps_name')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'slist_id')->textInput() ?>

    <?= $form->field($model, 'rlist_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

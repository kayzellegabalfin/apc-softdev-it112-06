<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ServiceList */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="service-list-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'slist_id')->textInput() ?>

    <?= $form->field($model, 'slist_name')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'slist_desc')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'slist_type')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'slist_dateadded')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ServiceList */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="service-list-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'slist_name')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'slist_desc')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'user_email')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'user_password')->textInput(['maxlength' => 25]) ?>

    <?= $form->field($model, 'user_lname')->textInput(['maxlength' => 25]) ?>

    <?= $form->field($model, 'user_fname')->textInput(['maxlength' => 25]) ?>

    <?= $form->field($model, 'user_mname')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'user_housenum')->textInput(['maxlength' => 25]) ?>

    <?= $form->field($model, 'user_street')->textInput(['maxlength' => 25]) ?>

    <?= $form->field($model, 'user_city')->textInput(['maxlength' => 25]) ?>

    <?= $form->field($model, 'user_country')->textInput(['maxlength' => 25]) ?>

    <?= $form->field($model, 'user_postalcode')->textInput() ?>

    <?= $form->field($model, 'user_contact')->textInput(['maxlength' => 25]) ?>

    <?= $form->field($model, 'user_company')->textInput(['maxlength' => 25]) ?>

    <?= $form->field($model, 'user_birthdate')->textInput() ?>

    <?= $form->field($model, 'user_age')->textInput() ?>

    <?= $form->field($model, 'user_type')->textInput(['maxlength' => 15]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

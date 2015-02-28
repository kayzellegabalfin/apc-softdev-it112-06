<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\UserSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'user_id') ?>

    <?= $form->field($model, 'user_email') ?>

    <?= $form->field($model, 'user_password') ?>

    <?= $form->field($model, 'user_lname') ?>

    <?= $form->field($model, 'user_fname') ?>

    <?php // echo $form->field($model, 'user_mname') ?>

    <?php // echo $form->field($model, 'user_housenum') ?>

    <?php // echo $form->field($model, 'user_street') ?>

    <?php // echo $form->field($model, 'user_city') ?>

    <?php // echo $form->field($model, 'user_country') ?>

    <?php // echo $form->field($model, 'user_postalcode') ?>

    <?php // echo $form->field($model, 'user_gender') ?>

    <?php // echo $form->field($model, 'user_contact') ?>

    <?php // echo $form->field($model, 'user_company') ?>

    <?php // echo $form->field($model, 'user_birthdate') ?>

    <?php // echo $form->field($model, 'user_age') ?>

    <?php // echo $form->field($model, 'user_type') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\UserMainSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-main-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'username') ?>

    <?= $form->field($model, 'auth_key') ?>

    <?= $form->field($model, 'password_hash') ?>

    <?= $form->field($model, 'password_reset_token') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <?php // echo $form->field($model, 'user_lastname') ?>

    <?php // echo $form->field($model, 'user_firstname') ?>

    <?php // echo $form->field($model, 'user_midname') ?>

    <?php // echo $form->field($model, 'user_housenum') ?>

    <?php // echo $form->field($model, 'user_street') ?>

    <?php // echo $form->field($model, 'user_city') ?>

    <?php // echo $form->field($model, 'user_country') ?>

    <?php // echo $form->field($model, 'user_postalcode') ?>

    <?php // echo $form->field($model, 'user_gender') ?>

    <?php // echo $form->field($model, 'user_companyname') ?>

    <?php // echo $form->field($model, 'user_companyadd') ?>

    <?php // echo $form->field($model, 'user_companycontact') ?>

    <?php // echo $form->field($model, 'user_birthdate') ?>

    <?php // echo $form->field($model, 'user_age') ?>

    <?php // echo $form->field($model, 'user_type') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

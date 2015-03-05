<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\PricelistSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pricelist-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'plist_id') ?>

    <?= $form->field($model, 'plist_name') ?>

    <?= $form->field($model, 'plist_price') ?>

    <?= $form->field($model, 'plist_dateadded') ?>

    <?= $form->field($model, 'slist_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

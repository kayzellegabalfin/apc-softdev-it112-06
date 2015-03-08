<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\UserMain;
use common\models\ServiceList;

/* @var $this yii\web\View */
/* @var $model backend\models\Services */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="services-form">

    <?php $form = ActiveForm::begin(); ?>

    <!-- <?= $form->field($model, 'service_id')->textInput()->label('Transaction Code') ?> -->

    <?php 
        $user=UserMain::find()->all();

        $listData=ArrayHelper::map($user,'id','username');

        echo $form->field($model, 'user_id')->dropDownList(
                                $listData, 
                                ['prompt'=>'Select User...'])->label('Acquired by') ;
    ?>

    <?= $form->field($model, 'slist_id')->textInput()->label('Service') ?>

    <?= $form->field($model, 'service_dateapplied')->textInput()->label('Date Applied') ?>

    <?= $form->field($model, 'service_status')->textInput(['maxlength' => 25])->label('Status')  ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

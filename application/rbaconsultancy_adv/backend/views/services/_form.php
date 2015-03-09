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

    <?php 
        $service_name=ServiceList::find()->all();

        $listData=ArrayHelper::map($service_name,'slist_id','slist_name');

        echo $form->field($model, 'slist_id')->dropDownList(
                                $listData, 
                                ['prompt'=>'Select Service...'])->label('Service Acquired') ;
    ?>

    <?= $form->field($model, 'service_dateapplied')->textInput()->label('Date Applied') ?>

    <?= $form->field($model, 'service_status')->dropDownList([
                'Pending' => 'Pending', 'Ongoing' => 'Ongoing', 'Completed' => 'Completed', 'Cancelled' => 'Cancelled'])
                ->label('Visa Application Status')  ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

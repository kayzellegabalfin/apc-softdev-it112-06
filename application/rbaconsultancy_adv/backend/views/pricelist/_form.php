<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\ServiceList;

/* @var $this yii\web\View */
/* @var $model backend\models\Pricelist */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pricelist-form">

    <?php $form = ActiveForm::begin(); ?>

   <!--- <?= $form->field($model, 'plist_id')->textInput() ?> --->

    <?= $form->field($model, 'plist_name')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'plist_price')->textInput() ?>

    <?= $form->field($model, 'plist_dateadded')->textInput() ?>

    <?php
	        $ServiceList=ServiceList::find()->all();
	
	        $listData=ArrayHelper::map($ServiceList,'slist_id','slist_name');
	
	        echo $form->field($model, 'slist_id')->dropDownList(
	                                $listData,
	                                ['prompt'=>'Select Service...'])->label('Service Name') ;
	    ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

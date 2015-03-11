<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\RequirementsList;
use common\models\UserMain;
use common\models\ServiceList;

/* @var $this yii\web\View */
/* @var $model common\models\RequirementsPerUser */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="requirements-per-user-form">

    <?php $form = ActiveForm::begin(); ?>
	
    <!--   <?= $form->field($model, 'rpu_id')->textInput() ?> -->

    <?= $form->field($model, 'rpu_status')->textInput(['maxlength' => 255])->label('Requirement Status') ?>

      <?= $form->field($model, 'rpu_datefilesubmitted')->textInput()->label('Requirement File Submitted') ?>

    <?= $form->field($model, 'rpu_fileuploaded')->textInput(['maxlength' => 255])->label('Requirement File Uploaded') ?>

	    <?php 
        $user=UserMain::find()->all();

        $listData=ArrayHelper::map($user,'id','username');

        echo $form->field($model, 'user_id')->dropDownList(
                                $listData, 
                                ['prompt'=>'Select User...'])->label('Acquired by') ;
    ?>
	
	    <?php 
        $rlist_name=RequirementsList::find()->all();

        $listData=ArrayHelper::map($rlist_name,'rlist_id','rlist_name');

        echo $form->field($model, 'rlist_id')->dropDownList(
                                $listData, 
                                ['prompt'=>'Select Requirement...'])->label('Submitted Requirement') ;
    ?>
	
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

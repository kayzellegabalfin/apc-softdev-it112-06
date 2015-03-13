<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\ServiceList;
use yii\helpers\ArrayHelper;
use common\models\RequirementsList;
use common\models\User;

use yii\db\Query;
$connection = \Yii::$app->db;


/* @var $this yii\web\View */
/* @var $model common\models\RequirementsPerUser */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="requirements-per-user-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php
            $user=User::find()->all();
    
            $listData=ArrayHelper::map($user,'id', 'user_firstname', 'user_lastname');
    
            echo $form->field($model, 'user_id')->dropDownList(
                                    $listData,
                                    ['prompt'=>'Select Client...']);
    ?>

    <?php
            $service=ServiceList::find()->all();
    
            $listData=ArrayHelper::map($service,'slist_id','slist_name');
    
            echo $form->field($model, 'service_id')->dropDownList(
                                    $listData,
                                    ['prompt'=>'Select Service...']);
    ?>

    <?php
            $requirement=RequirementsList::find()->all();
    
            $listData=ArrayHelper::map($requirement,'rlist_id','rlist_name');
    
            echo $form->field($model, 'rlist_id')->dropDownList(
                                    $listData,
                                    ['prompt'=>'Select Requirement...']);
    ?>

    <?= $form->field($model, 'rpu_fileuploaded')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'rpu_datefilesubmitted')->textInput() ?>

    <?= $form->field($model, 'rpu_status')->textInput(['maxlength' => 255]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\ServiceList;

/* @var $this yii\web\View */
/* @var $model common\models\RequirementsList */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="requirements-list-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'rlist_name')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'rlist_desc')->textarea(['rows' => 6]) ?>

  <!---  <?= $form->field($model, 'rlist_dateadded')->textInput() ?> --->

   <!--- <?= $form->field($model, 'slist_id')->textInput() ?> --->
	
	<?php
	        $ServiceList=ServiceList::find()->all();
	
	        $listData=ArrayHelper::map($ServiceList,'slist_id','slist_name');
	
	        echo $form->field($model, 'slist_id')->dropDownList(
	                                $listData,
	                                ['prompt'=>'Select Service...'])->label('Service') ;
	    ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

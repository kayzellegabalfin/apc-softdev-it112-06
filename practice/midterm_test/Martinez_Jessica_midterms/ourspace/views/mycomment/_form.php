<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Myaddress;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\mycomment */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mycomment-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    	
	<?php
	$myaddress=myaddress::find()->all();

	$listData=ArrayHelper::map($myaddress,'id','lastname');

 
	echo $form->field($model, 'myaddress')->dropDownList(
                                $listData,

                                ['prompt'=>'Select Lastname...']);

?>

    <?= $form->field($model, 'author')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'created_at')->textInput() ?>
	
	

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

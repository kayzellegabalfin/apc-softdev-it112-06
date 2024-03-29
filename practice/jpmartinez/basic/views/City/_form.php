<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\province;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $model app\models\city */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="city-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'city_code')->textInput(['maxlength' => 32]) ?>

    <?= $form->field($model, 'city_description')->textInput(['maxlength' => 32]) ?>

    <?= $form->field($model, 'province_id')->textInput() ?>

	<?php
	
	$province=province::find()->all();

//use yii\helpers\ArrayHelper;

	$listData=ArrayHelper::map($province,'id','province_description');

 
	echo $form->field($model, 'province')->dropDownList(
                                $listData,

                                ['prompt'=>'Select...']);

?>
	
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

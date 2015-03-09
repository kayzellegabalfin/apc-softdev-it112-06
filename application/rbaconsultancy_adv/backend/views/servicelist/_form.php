<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $model backend\models\Servicelist */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="servicelist-form">

    <?php $form = ActiveForm::begin(); ?>

   <!-- <?= $form->field($model, 'slist_id')->textInput() ?> -->

    <?= $form->field($model, 'slist_name')->textInput(['maxlength' => 255])->label('Service Name') ?>

    <?= $form->field($model, 'slist_desc')->textarea(['rows' => 6])->label('Service Description') ?>

    
	<?php echo $form->field($model, 'slist_type')->dropDownList(['Immigrant Visa' => 'Immigrant Visa', 'Non Immigrant Visa' => 'Non Immigrant Visa', 'Special Visa' => 'Special Visa'], ['prompt'=>'Select Visa Type...']); ?>
           
	
   <!-- <?= $form->field($model, 'slist_dateadded')->textInput() ?> --->

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\servicelist;
use common\models\requirementslist;

/* @var $this yii\web\View */
/* @var $model backend\models\RequirementsPerService */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="requirements-per-service-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'rps_id')->textInput() ?>

    <?= $form->field($model, 'rps_name')->textarea(['rows' => 6])->label('Requirements Per Service Name') ?>

   	<?php
			$servicelist=servicelist::find()->all();
	
		$listData=ArrayHelper::map($servicelist,'slist_id','slist_name');

			echo $form->field($model, 'slist_id')->label('Service List Name')->dropDownList(
								$listData,
									['prompt'=>'Select Service Name...']);
		?>

    <?php
			$requirementslist=requirementslist::find()->all();
	
		$listData=ArrayHelper::map($requirementslist,'rlist_id','rlist_name');

			echo $form->field($model, 'rlist_id')->label('Requirements List Name')->dropDownList(
								$listData,
									['prompt'=>'Select Requirements Name...']);
		?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

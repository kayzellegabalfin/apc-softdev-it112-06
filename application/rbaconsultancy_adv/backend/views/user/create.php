<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \backend\models\CreateUserForm */

$this->title = 'Create New User';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-create">
    <h1><?= Html::encode($this->title) ?></h1>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'form-createUser']); ?>
                <?= $form->field($model, 'username')->label('Username') ?>
                <?= $form->field($model, 'email')->label('Email Address') ?>
                <?= $form->field($model, 'user_firstname')->label('First Name') ?>
                <?= $form->field($model, 'user_lastname')->label('Last Name') ?>
                <?= $form->field($model, 'password')->passwordInput()->label('Password') ?>
                <div class="form-group">
                    <?= Html::submitButton('Create', ['class' => 'btn btn-primary', 'name' => 'createUser-button']) ?>
                </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>

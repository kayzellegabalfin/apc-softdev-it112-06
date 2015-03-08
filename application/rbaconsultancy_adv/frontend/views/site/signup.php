<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
?>

            <div class="top-nav">
                <ul>
                    <li><a href="./index.php">Home</a></li>
                    <li><a href="./index.php?r=site%2Fabout">About</a></li>
                    <li><a href="./index.php?r=site%2Fservices">Services</a></li>
                    <li><a href="./index.php?r=site%2Fcontact">Contact</a></li>
                <?php

                if (Yii::$app->user->isGuest) {
                    echo "<li><a href=\"./index.php?r=site%2Flogin\">Login</a></li>" ;
                    echo "<li class=\"active\"><a href=\"./index.php?r=site%2Fsignup\">Signup</a></li>" ;
                } else {
                    echo "<li><a href=\"./index.php?r=site%2Fmy-account\">My Account</a></li>" ;
                    echo "<li><a href=\"http://localhost/rbaconsultancy_adv/backend/web/index.php\" target=\"_blank\">Admin's Panel</a></li>" ;
                    echo "<li><a href=\"./index.php?r=site%2Flogout\">Logout, " . (Yii::$app->user->identity->username) . "</a></li>" ;
                }
                ?>                   
                </ul>
            </div>
            </div>
            </div>

            <div class="contact">
                <div class="wrap">
                    <div class="top-head">
                        <h3>Signup</h3>
                            <ul>
                                <li><a href="index.html">Home / </a></li>
                                <li><a href="./index.php?r=site%2Fsignup"><span>Signup</span></a></li>
                            </ul>
                    </div>

                    <br>

                    <div class="section group"> 
                        <div class="col span_1_of_3">
                        <div class="contact-form">
                            <p>Please fill out the following fields to signup:</p><br>

                            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
                            <span><?= $form->field($model, 'username')->label('Username') ?></span><br>
                            <span><?= $form->field($model, 'email')->label('Email Address') ?></span><br>
                            <span><?= $form->field($model, 'user_firstname')->label('First Name') ?></span><br>
                            <span><?= $form->field($model, 'user_lastname')->label('Last Name') ?></span><br>
                            <span><?= $form->field($model, 'password')->passwordInput()->label('Password') ?></span>

                            <span><input type="submit" value="Signup"></span>
                            <?php ActiveForm::end(); ?>
                        </div>
                </div>
                </div>
            </div>
            </div>

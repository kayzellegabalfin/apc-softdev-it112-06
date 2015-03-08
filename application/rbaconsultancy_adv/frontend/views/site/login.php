<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

$this->title = 'Login';
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
                    echo "<li class=\"active\"><a href=\"./index.php?r=site%2Flogin\">Login</a></li>" ;
                    echo "<li><a href=\"./index.php?r=site%2Fsignup\">Signup</a></li>" ;
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
                <h3>Login</h3>
                        <ul>
                            <li><a href="index.html">Home / </a></li>
                            <li><a href="./index.php?r=site%2Flogin"><span>Login</span></a></li>
                        </ul>
            </div>

            <br>

            <div class="section group"> 
                <div class="col span_1_of_3">
                <div class="contact-form">
                    <p>Please fill out the following fields to login:</p><br>

                    <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
                    <span><?= $form->field($model, 'username') ?> </span> <br>
                    <span><?= $form->field($model, 'password')->passwordInput() ?> </span> 
                    <span><?= $form->field($model, 'rememberMe')->checkbox() ?> </span>
                    
                    <div style="color:#999;margin:1em 0">
                        If you forgot your password you can <?= Html::a('reset it', ['site/request-password-reset']) ?>.
                    </div>

                    <span><input type="submit" value="Login"></span>
                    <?php ActiveForm::end(); ?>
                </div>
        </div>
        </div>
    </div>
    </div>
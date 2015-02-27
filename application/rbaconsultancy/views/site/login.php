                
            <div class="top-nav">
                <ul>
                    <li><a href="./index.php">Home</a></li>
                    <li class="active"><a href="./index.php?r=site%2Fabout">About</a></li>
                    <li><a href="./index.php?r=site%2Fservices">Services</a></li>
                    <li><a href="./index.php?r=site%2Fcontact">Contact</a></li>
                </ul>
            </div>
	</div>
</div>	

<!---start-content----->
<div class="content">
<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>

	<!---start-login---->
	<div class="login">
		<div class="wrap">
			<div class="top-head">
				<h3>Login</h3>
				<div class="site-login">

    <h2>Please fill out the following fields to login:</h2> <br>

    <?php $form = ActiveForm::begin([
        'id' => 'login-form',
        'options' => ['class' => 'form-horizontal'],
        'fieldConfig' => [
            'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
            'labelOptions' => ['class' => 'col-lg-1 control-label'],
        ],
    ]); ?>

    <?= $form->field($model, 'email')->input('email')?>

    <?= $form->field($model, 'password')->passwordInput() ?>

    <?= $form->field($model, 'rememberMe', [
        'template' => "<div class=\"col-lg-offset-1 col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
    ])->checkbox() ?>

    <div class="form-group">
        <div class="col-lg-offset-1 col-lg-11">
            <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

    
			</div>

			
					<!---End-ourteam---->
				</div>
			</div>
			<!---End-about---->
		</div>
			<div class="footer">
				<div class="wrap">
					<div class="footer-left">
						<a href="index.php"><img src="images/logo1.png" alt="" /></a>
					</div>
					<div class="footer-right">
						<a href="#top" class="scroll"> </a>
					</div>
					<div class="clear"> </div>
				</div>
			</div>
		</div>
		<!---End-content----->
		<!---End-wrap---->


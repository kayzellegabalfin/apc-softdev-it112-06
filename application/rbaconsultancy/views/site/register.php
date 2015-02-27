                
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
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\User */
/* @var $form ActiveForm */
$this->title = 'Register';
$this->params['breadcrumbs'][] = $this->title;
?>

<!---start-login---->
	<div class="register">
		<div class="wrap">
			<div class="top-head">
						<h3>Register</h3>
						<ul>
							<li><a href="index.php">Home / </a></li>
							<li><a href="#"><span>Register</span></a></li>
						</ul>
					</div><br>
				<div class="site-register">

   <br> <h2>Please fill out the following fields to register:</h2> <br>

    <?php $form = ActiveForm::begin(); ?>

          <?= $form->field($model, 'user_id') ?>
        <?= $form->field($model, 'user_email')->input('email') ?>
        <?= $form->field($model, 'user_password')->passwordInput() ?>
        <?= $form->field($model, 'user_lname') ?>
        <?= $form->field($model, 'user_fname') ?>
        <?= $form->field($model, 'user_mname') ?>
        <?= $form->field($model, 'user_housenum') ?>
        <?= $form->field($model, 'user_street') ?>
        <?= $form->field($model, 'user_city') ?>
        <?= $form->field($model, 'user_country') ?>
        <?= $form->field($model, 'user_postalcode') ?>
		<?= $form->field($model, 'user_gender') ?>
        <?= $form->field($model, 'user_contact') ?>
        <?= $form->field($model, 'user_company') ?>
        <?= $form->field($model, 'user_birthdate') ?>
        <?= $form->field($model, 'user_age') ?>
        <?= $form->field($model, 'user_type') ?>
    
        <div class="form-group">
		            <?= Html::submitButton( 'Register', ['class' =>  'btn btn-success']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div>


					<!---End-ourteam---->
				</div>
			</div>
			<!---End-register---->
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


<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

?>

  <div class="top-nav">
                <ul>
                    <li><a href="./index.php">Home</a></li>
                    <li><a href="./index.php?r=site%2Fabout">About</a></li>
                    <li><a href="./index.php?r=site%2Fservices">Services</a></li>
                    <li class="active"><a href="./index.php?r=site%2Fcontact">Contact</a></li>
                    <li><a href="./index.php?r=site%2Fmy-account">My Account</a></li>
                    <li><a href="./index.php?r=site%2Fadmin-panel">Admin's Panel</a></li>
                </ul>
            </div>
	</div>
</div>

<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>


</div>

		<!--start-content-->
			<!--start-contact-->
			<div class="contact">
		 		<div class="wrap">
		 			<div class="top-head">
						<h3>Contact</h3>
						<ul>
							<li><a href="index.html">Home / </a></li>
							<li><a href="#"><span>Contact</span></a></li>
						</ul>
					</div>
				<div class="section group">				
				<div class="col span_1_of_3">
					<div class="contact_info">
			    	 	<h3>Find Us Here</h3>
			    	 		<div class="map">
					   			<iframe width="100%" height="175" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265&amp;output=embed"></iframe><br><small><a href="https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265" style="color:#666;text-align:left;font-size:12px">View Larger Map</a></small>
					   		</div>
      				</div>
      			<div class="company_address">
				     	<h3>Company Information :</h3>
						    	<p>500 Lorem Ipsum Dolor Sit,</p>
						   		<p>22-56-2-9 Sit Amet, Lorem,</p>
						   		<p>USA</p>
				   		<p>Phone:(00) 222 666 444</p>
				   		<p>Fax: (000) 000 00 00 0</p>
				 	 	<p>Email: <span>info@mycompany.com</span></p>
				   		<p>Follow on: <span>Facebook</span>, <span>Twitter</span></p>
				   </div>
				</div>		
				
				<div class="col span_2_of_3">
					<div class="contact-form">
						<h3>Contact Us</h3>
					    <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>

							<div class="alert alert-success">
								Thank you for contacting us. We will respond to you as soon as possible.
							</div>

							<p>
								Note that if you turn on the Yii debugger, you should be able
								to view the mail message on the mail panel of the debugger.
								<?php if (Yii::$app->mailer->useFileTransport): ?>
								Because the application is in development mode, the email is not sent but saved as
								a file under <code><?= Yii::getAlias(Yii::$app->mailer->fileTransportPath) ?></code>.
								Please configure the <code>useFileTransport</code> property of the <code>mail</code>
								application component to be false to enable email sending.
								<?php endif; ?>
							</p>
							
							<?php else: ?>

							<p>If you have business inquiries or other questions, please fill out the following form to contact us. Thank you.</p> <br>					    
							
							<?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
							<span><?= $form->field($model, 'name') ?> </span>
							<span><?= $form->field($model, 'email') ?> </span>
							<span><?= $form->field($model, 'subject') ?> </span>
							<span><?= $form->field($model, 'body')->textArea(['rows' => 6]) ?> </span>
							<span><?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
									'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
									]) ?> </span>

							<span><input type="submit" value="Submit"></span>

						<?php ActiveForm::end(); ?>
						<?php endif; ?>	  
						   		
				    </div>
  				</div>				
			  </div>
			</div>
			<!--End-contact-->
		</div>

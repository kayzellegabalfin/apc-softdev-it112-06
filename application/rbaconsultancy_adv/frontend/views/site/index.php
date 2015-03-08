<?php 
use yii\helpers\Html;
?>
               
            <div class="top-nav">
                <ul>
                    <li class="active"><a href="./index.php">Home</a></li>
                    <li><a href="./index.php?r=site%2Fabout">About</a></li>
                    <li><a href="./index.php?r=site%2Fservices">Services</a></li>
                    <li><a href="./index.php?r=site%2Fcontact">Contact</a></li>
				<?php

				if (Yii::$app->user->isGuest) {
					echo "<li><a href=\"./index.php?r=site%2Flogin\">Login</a></li>" ;
					echo "<li><a href=\"./index.php?r=site%2Fsignup\">Signup</a></li>" ;
				} else {
					echo "<li><a href=\"./index.php?r=site%2Fmy-account\">My Account</a></li>" ;
					echo "<li><a href=\"http://localhost/rbaconsultancy_adv/backend/web/index.php\" target=\"_blank\">Admin's Panel</a></li>" ;
					echo "<li><a href=\"./index.php?r=site%2Flogout\">Logout, " . (Yii::$app->user->identity->username) . "</a></li>" ;
				}
				?>                   
                </ul>
			</div>

<!---start-content-->				
	<div class="image-slider">
			<ul class="rslides" id="slider1">
				<li><img src="images/slider1.png" alt=""></li>
				<li><img src="images/slider2.png" alt=""></li>
				<li><img src="images/slider3.png" alt=""></li>
			</ul>
		</div>
	</div>
</div>	

<div class="content">
	<div class="border"></div>

	<div class="wel-mesg">
		<div class="wrap">
			<h2>Welcome to our site!</h2>
			<p>RBA Consultancy and General Services processes different kinds of travel Visa of expatriate here in the Philippines.</p>
			<p>We are dedicated to give our clients like you fast but economical way to process your Visa and other legal documents.</p>
			<a href="#">Join us!</a>
		</div>
	</div>

	<div class="border"></div>

	<div class="bottom-grids">
		<div class="wrap">				
			<div class="col span_1_of_3">
      			<img src="images/feature1.PNG" alt="" />
			</div>	
			
			<div class="col span_2_of_3">
				<div class="company_address">
				    <h3>Apply for your Visa now with ease</h3>
					<p>Bacon ipsum dolor sit amet tenderloin salami pig, fatback pastrami ham hock shoulder bacon t-bone pork meatball. 
						Pancetta ham turkey shankle turducken jerky. Jowl spare ribs short ribs andouille tongue shoulder. Rump shoulder 
						cow turducken, salami filet mignon ham sausage pancetta pork prosciutto brisket short ribs boudin. Shoulder short 
						ribs andouille swine venison ham hock.</p>
				</div>
  			</div>	
			<div class="clear"> </div>
		</div>
	</div>
	
	<div class="border"></div>
			
	<div class="content-banner">
		<div class="wrap">
			<div class="col span_2_of_3">
				<div class="company_address">
					<h3>Manage your account and monitor every transactions you made</h3>
					<p>Candy bonbon pastry jujubes lollipop wafer biscuit biscuit. Topping brownie sesame snaps sweet roll pie. Croissant 
						danish biscuit soufflé caramels jujubes jelly. Dragée danish caramels lemon drops dragée. Gummi bears cupcake 
						biscuit tiramisu sugar plum pastry. Dragée gummies applicake pudding liquorice. Donut jujubes oat cake jelly-o. 
						Dessert bear claw chocolate cake gummies lollipop sugar plum ice cream gummies cheesecake.</p>
				</div>
			</div>	
			
			<div class="col span_1_of_3">
					<img src="images/feature2.PNG" alt="" />
  			</div>	
			<div class="clear"> </div>
		</div>
	</div>
	
	<div class="border"></div>
	
	<div class="bottom-grids">
		<div class="wrap">
			<div class="col span_1_of_3">
      			<img src="images/feature3.PNG" alt="" />
			</div>	
			
			<div class="col span_2_of_3">
				<div class="company_address">
				    <h3>Know the status of your transactions fast and seamlessly</h3>
					<p>In omni memoria patriae religionis sunt diri undead historiarum. Golums, zombies et fascinati. Maleficia! Vel a 
						modern perhsaps morbi. A terrenti contagium. Forsitan illud Apocalypsi, vel malum poenae horrifying fecimus. 
						Indeflexus monstra per plateas currere. Fit de nostra carne undead. Poenitentiam agite pœnitentiam! Vivens 
						mortua sunt apud nos.</p>
				</div>
  			</div>
			<div class="clear"> </div>
		</div>
		
		<div class="clear"> </div>
	</div>
<!--end-content-->

     
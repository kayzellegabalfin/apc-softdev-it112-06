<?php
use yii\helpers\Html;
?>

<?php $this->beginPage() ?>

<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
 	<link href="favicon.ico" rel="icon" type="image/x-icon" />
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
 
	<?= Html::cssFile('@web/css/style.css') ?>
    <?= Html::cssFile('@web/css/responsiveslides.css') ?>
    
	<link href='http://fonts.googleapis.com/css?family=Archivo+Narrow' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Parisienne' rel='stylesheet' type='text/css'>   
	<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	
	<?= Html::jsFile('@web/js/responsiveslides.min.js') ?>
	<?= Html::script('$(function () {
			      	$("#slider1").responsiveSlides({
			        maxwidth: 1600,
			        speed: 600
			      		});
					});'); ?>
	
	<?= Html::script('jQuery(document).ready(function($) {
					$(".scroll").click(function(event){		
					event.preventDefault();
					$(\'html,body\').animate({scrollTop:$(this.hash).offset().top},1200);
					});
					});'); ?>
    <?php $this->head() ?>
</head>
<body>

<?php $this->beginBody() ?>
 <!---start-header---->
   
   <div class="header" id="top">
        <div class="wrap">
            <div class="logo">
                <a href="index.php"><img src="images/logo.png" title="logo" /></a>
            </div>	
 <!---End-header---->
     <?= $content ?>
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
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

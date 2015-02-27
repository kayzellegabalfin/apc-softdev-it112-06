<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
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
   
			<?php 
				NavBar::begin();
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => [
				     Yii::$app->user->isGuest ?
                        ['label' => 'Login', 'url' => ['/site/login']] :
                        ['label' => 'Hello, ' . Yii::$app->user->identity->user_fname .' | Logout',
                         'url' => ['/site/logout'],
						 'linkOptions' => ['data-method' => 'post']],
                ],
            ]);
            NavBar::end();
			?>
           


   <div class="header" id="top">
        <div class="wrap">
            <div class="logo">
                <a href="index.php"><img src="images/logo.png" title="logo" /></a>
            </div>	
 <!---End-header---->
     <?= $content ?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use frontend\components\SearchWidget;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use yii\bootstrap\Alert;

\frontend\assets\MainAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="SHIELD - Free Bootstrap 3 Theme">
    <meta name="author" content="Carlos Alvarez - Alvarez.is - blacktie.co">
    
    <link rel="shortcut icon" href="assets/ico/favicon.png">
<?= Html::csrfMetaTags() ?>
    
    <title> SHIELD - Free Bootstrap 3 Theme</title>

    
<!--  <link href="assets/css/animate-custom.css" rel="stylesheet">-->


    
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CSource+Sans+Pro:400,400italic,700" rel="stylesheet" type="text/css">

    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
      <script src="assets/js/respond.min.js"></script>
    <![endif]-->
    
     <?php $this->head() ?>
  </head>
<?php $this->beginBody() ?>
  <body data-spy="scroll" data-offset="0" data-target="#navbar-main">
  
      <div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => 'BVS.ua',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
   
     //if (Yii::$app->user->isGuest) { 
         $menuItems[] = ['label' => 'Профиль', 'url' => ['/profile']];
         
//     } 
 
    $menuItems = [
        ['label' => 'Домой', 'url' => ['/site/index']],
        ['label' => 'Вакансии', 'url' => ['/post/index']],
        
    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Регистрация', 'url' => ['/site/signup']];
        $menuItems[] = ['label' => 'Вход', 'url' => ['/site/login']];
    } else {
        $menuItems[] = ['label' => 'Профиль', 'url' => ['/profile']];
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Выйти (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link']
            )
            . Html::endForm()
            . '</li>';
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        
    </div>
</div>
  
  <!--	<div id="navbar-main">
        
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon icon-shield" style="font-size:30px; color:#3498db;"></span>
          </button>
          <a class="navbar-brand hidden-xs hidden-sm" href="#home"><span class="icon icon-shield" style="font-size:18px; color:#3498db;"></span></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="#home" class="smoothScroll">Home</a></li>
			<li> <a href="#about" class="smoothScroll"> About</a></li>
			<li> <a href="#services" class="smoothScroll"> Services</a></li>
			<li> <a href="#team" class="smoothScroll"> Team</a></li>
			<li> <a href="#portfolio" class="smoothScroll"> Portfolio</a></li>
			<li> <a href="#blog" class="smoothScroll"> Blog</a></li>
			<li> <a href="#contact" class="smoothScroll"> Contact</a></li>
        </div>
      </div>
    </div>
    </div>-->

  
  
		<!-- ==== HEADERWRAP ==== -->
	    <div id="headerwrap" id="home" name="home">
			<header class="clearfix">
	  		 		<!--<h1><span class="icon icon-shield"></span></h1>-->
	  		 		<p>Сервис поиска Работы во всем Мире.</p>
	  		 		
                                        <?= SearchWidget::widget()?>
                                        
	    </div><!-- /headerwrap -->

             <?= $content ?>
		<!-- ==== GREYWRAP ==== -->
		

		<div id="footerwrap">
			<div class="container">
				<h4>Created by <a href="http://blacktie.co">BVS</a> - Copyright 2016</h4>
			</div>
		</div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
		

	
  
        
        <?php $this->endBody() ?>
  </body>
</html>

<?php $this->endPage() ?>
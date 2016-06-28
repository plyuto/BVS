<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>

    <?php $this->beginPage() ?>

<!doctipe html>
<html lang="<?= Yii::$app->language ?>">
    
    <head>
   <meta charset="utf8">
    <?= Html::csrfMetaTags() ?>
   <title><?= Html::encode($this->title) ?></title>
   <?php $this->head() ?>
</head>

<body>
    <?php $this->beginBody() ?>

    <h1>HELLO BASIC </h1>
          <?= $content ?>

<?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>
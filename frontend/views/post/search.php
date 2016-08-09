<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>

<?php // debug (Yii::$app->request->get()); ?>
<?php // debug ($search_country)?>
<?php if (Yii::$app->session->hasFlash('session')) : ?>
<?php echo (Yii::$app->session->getFlash('session')); ?>
<?php endif; ?>

<?php if (Yii::$app->session->hasFlash('error')) : ?>
<?php echo (Yii::$app->session->getFlash('error')); ?>
<?php endif; ?>
<!--
<form class="navbar-form navbar-left" style="right: 20%;position: absolute;}" role="search" method="get" action="<?= \yii\helpers\Url::to(['post/search']) ?>">
  <div class="form-group">
    <input type="text" name="q" class="form-control" placeholder="Поисковый запрос">
  </div>
  <button type="submit" class="btn btn-default">Поиск</button>
</form>
<br />-->
<?php ?>
<?php // $q ?>
<?php // $test = Yii::$app->request->get() ?>
<?php //$test = \yii\helpers\ArrayHelper::map($test, 'q', 'country', 'category'); ?>
<?php // $test = $test[1]['q'] ?>


<div class="container">
<h1>Результат поиска по запросу "<?= $q?> "</h1>

<?php if ( !empty($listvac)) : ?>
<?php foreach ($listvac as $vac): ?>

<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title"><a href="<?= yii\helpers\Url::to(['post/show', 'id' => $vac->id])?>"><span style="font-weight: 900;font-size: 24px;color: #ffeac7;"><?=$vac->name?></span></a></h3>
    <span>Страна: <span style="color: #efef00; font-weight:700;"><?= $search_country[$vac->country] ?></span> --- Категория: <span style="color: #efef00; font-weight:700;"><?= $search_cat[$vac->category_id] ?></span></span>
  </div>
  <div class="panel-body">
    <?=$vac->description?>
  </div>
</div>

<?php endforeach; ?>
<?= yii\widgets\LinkPager::widget(['pagination' => $pagination]) ?>
<?php endif; ?>

</div>


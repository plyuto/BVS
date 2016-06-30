<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>

<?php debug (Yii::$app->request->get()); ?>
<?php if (Yii::$app->session->hasFlash('session')) : ?>
<?php echo (Yii::$app->session->getFlash('session')); ?>
<?php endif; ?>

<?php if (Yii::$app->session->hasFlash('error')) : ?>
<?php echo (Yii::$app->session->getFlash('error')); ?>
<?php endif; ?>

<form class="navbar-form navbar-left" style="right: 20%;position: absolute;}" role="search" method="get" action="<?= \yii\helpers\Url::to(['post/search']) ?>">
  <div class="form-group">
    <input type="text" name="q" class="form-control" placeholder="Поисковый запрос">
  </div>
  <button type="submit" class="btn btn-default">Поиск</button>
</form>
<br />
<?php debug($q) ?>
<?= $q ?>
<?php // $test = Yii::$app->request->get() ?>
<?php //$test = \yii\helpers\ArrayHelper::map($test, 'q', 'country', 'category'); ?>
<?php // $test = $test[1]['q'] ?>



<h1>Результат поиска по запросу "<?= $q?> "</h1>

<?php if ( !empty($listvac)) : ?>
<?php foreach ($listvac as $vac): ?>

<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title"><a href="<?= yii\helpers\Url::to(['post/show', 'id' => $vac->id])?>"><?=$vac->name?></a></h3><span><?=$vac->category_id?><?=$vac->country?></span>
  </div>
  <div class="panel-body">
    <?=$vac->description?>
  </div>
</div>

<?php endforeach; ?>
<?= yii\widgets\LinkPager::widget(['pagination' => $pagination]) ?>
<?php endif; ?>




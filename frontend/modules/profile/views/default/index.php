<?= \frontend\components\NavProfileWidget::widget() ?>

<div class="container">
    <h1>Список Моих Вакансий</h1>
<?php if ( !empty($listvac)) : ?>
<?php foreach ($listvac as $vac): ?>

<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title"><a href="<?= yii\helpers\Url::to(['post/show', 'id' => $vac->id])?>"><?=$vac->name?></a></h3>
  </div>
  <div class="panel-body">
    <?=$vac->description?>
  </div>
</div>

<?php endforeach; ?>
<?= yii\widgets\LinkPager::widget(['pagination' => $pagination]) ?>
<?php endif; ?>
</div>




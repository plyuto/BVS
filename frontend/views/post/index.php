<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>
<?php debug ($search); ?>
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
<h1>Поисковая форма через  Yii</h1>

<?php $searchform = ActiveForm::begin(['action' => 'post/search'])?>
<?= $searchform->field($search, 'q')->label('Поисковый запрос') ?>
<?= $searchform->field($search, 'country')->label('Страна')->dropDownList(['Украина', 'Россия', 'Польша']) ?>
<?= $searchform->field($search, 'category')->label('Категория')->dropDownList(['IT', 'Маркетинг', 'Медицина']) ?>
<?= Html::submitButton('Отправить', ['class' => 'btn btn-success'] ) ?>
<?php ActiveForm::end()?>

<h1>Список всех Вакансий</h1>

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

<h1>Добавить Вакансию</h1>

<?php $formvac = ActiveForm::begin(['options' => ['id' => 'vacancies']])?>
<?= $formvac->field($vacancies, 'name')->label('Имя') ?>
<?= $formvac->field($vacancies, 'country') ?>
<?= $formvac->field($vacancies, 'description')->label('Текст Сообщения')->textarea(['rows' => 5]) ?>
<?= $formvac->field($vacancies, 'category_id') ?>
<?= Html::submitButton('Отправить', ['class' => 'btn btn-success'] ) ?>
<?php ActiveForm::end()?>

<h1>Добавить тестовый Пост</h1>

<?php $form = ActiveForm::begin(['options' => ['id' => 'testForm']])?>
<?= $form->field($model, 'name')->label('Имя') ?>
<?= $form->field($model, 'email') ?>
<?= $form->field($model, 'text')->label('Текст Сообщения')->textarea(['rows' => 5]) ?>
<?= Html::submitButton('Отправить', ['class' => 'btn btn-success'] ) ?>
<?php ActiveForm::end()?>


<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use frontend\models\SearchForm;


//$search_cat = \yii\helpers\ArrayHelper::map($search_cat, 'id', 'category_name' );
//$search_country = \yii\helpers\ArrayHelper::map($search_country, 'id', 'country' );
?>


<?php if (Yii::$app->session->hasFlash('session')) : ?>
<?php echo (Yii::$app->session->getFlash('session')); ?>
<?php endif; ?>

<?php if (Yii::$app->session->hasFlash('error')) : ?>
<?php echo (Yii::$app->session->getFlash('error')); ?>
<?php endif; ?>

<!--<form class="navbar-form navbar-left" style="right: 20%;position: absolute;" role="search" method="get" action="<?= \yii\helpers\Url::to(['post/search']) ?>">
  <div class="form-group">
    <input type="text" name="q" class="form-control" placeholder="Поисковый запрос">
  </div>
  <button type="submit" class="btn btn-default">Поиск</button>
</form>
<br />-->

<!--<?php $form = ActiveForm::begin(['options' => ['class' => 'navbar-form navbar-left']])?>

  <div class="form-group" style="float:left;">
    <?= $form->field($model, 'q')->label('')->textInput(['placeholder' => 'Поисковый запрос']) ?>
  </div>
<div style="float:left;"><?=  $form->field($model, 'country')->label('')->dropDownList($search_country, ['prompt' => 'Все Страны']) ?>
</div>
<div style="float:left;">
<?= $form->field($model, 'category')->label('')->dropDownList($search_cat, ['prompt' => 'Все категории']) ?>
</div><div style="float:right; margin-left: 5px;">
 <?= Html::submitButton('Отправить', ['class' => 'btn btn-success'] ) ?></div>
<?php ActiveForm::end()?>

<br />

<h1>Поисковая форма через  Yii</h1>

<?php //$form = ActiveForm::begin(/*['action' => yii\helpers\Url::to('post/search'), 'method' => 'get']*/)?>
<? //$form->field($model, 'q')->label('Поисковый запрос') ?>

<? // $form->field($model, 'country')->label('Страна')->dropDownList($search_country, ['prompt' => 'Все Страны']) ?>
<? //$form->field($model, 'category')->label('Категория')->dropDownList($search_cat, ['prompt' => 'Все категории']) ?>
<? //Html::submitButton('Отправить', ['class' => 'btn btn-success'] ) ?>
<?php //ActiveForm::end()?>
-->
<br><br>
<div class="container">
    <div class="section-title-block">
				<h3 class="section-title">Последние Добавленные Вакансии</h3>
                                
				
			</div>
<div class="owl-carousel">
    <?php if ( !empty($listvac)) : ?>
<?php foreach ($listvac as $vac): ?>
  <div class="blog-content">
							<ul class="post-meta">
								<li><span class="glyphicon glyphicon-globe" aria-hidden="true"></span> <a href="#"><?= $search_country[$vac->country] ?></a></li>
								<li><span class="glyphicon glyphicon-time"></span> <a href="#"> <?= Yii::$app->formatter->asDate($vac->data, 'php:d-m-Y'); // 2014-10-06?> </a></li>
							</ul>
							<h4><a href="<?= yii\helpers\Url::to(['post/show', 'id' => $vac->id])?>"><?=$vac->name?></a></h4>


							<p>
								<?=$vac->description?>
							</p>
							<footer class="clearfix">
                                                            <a class="post-category" href="#"><span class="glyphicon glyphicon-tasks" style="margin-right: 10px;"></span><?= $search_cat[$vac->category_id] ?></a>
								<a class="read-more-link" href="<?= yii\helpers\Url::to(['post/show', 'id' => $vac->id])?>">Подробнее »</a>
							</footer>
						</div>
    <?php endforeach; ?>
    <?php endif; ?>

</div>
    </div>
<br>
                                <div class="container">
    <h1>Список всех Вакансий</h1>
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


<!--<div class="container"><h1>Добавить Вакансию</h1>

<?php $formvac = ActiveForm::begin(['options' => ['id' => 'vacancies']])?>
<?= $formvac->field($vacancies, 'name')->label('Имя') ?>
<?= $formvac->field($vacancies, 'country')->dropDownList($search_country) ?>
<?= $formvac->field($vacancies, 'description')->label('Текст Сообщения')->textarea(['rows' => 5]) ?>
<?= $formvac->field($vacancies, 'category_id')->dropDownList($search_cat) ?>
<?= Html::submitButton('Отправить', ['class' => 'btn btn-success'] ) ?>
<?php ActiveForm::end()?>
</div>
<h1>Добавить тестовый Пост</h1>-->
<?php  // debug($search_cat)?>
<?php //$form = ActiveForm::begin(['options' => ['id' => 'testForm']])?>
<?php // $form->field($model, 'name')->label('Имя') ?>
<?php // $form->field($model, 'email') ?>
<?php // $form->field($model, 'text')->label('Текст Сообщения')->textarea(['rows' => 5]) ?>
<?php // Html::submitButton('Отправить', ['class' => 'btn btn-success'] ) ?>
<?php // ActiveForm::end()?>



<?php 
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>

<!--<h1><?=$name?>, Hello World</h1> -->
<div class="container" style="width: 550px;">
<?php $form = ActiveForm::begin(['options' => ['class' => 'navbar-form navbar-left']])?>

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
</div>
<br />
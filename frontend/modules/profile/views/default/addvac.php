<?php 
use yii\widgets\ActiveForm;
use \frontend\models\Vacancies;
use yii\helpers;
use yii\helpers\Html;

$search_cat = \yii\helpers\ArrayHelper::map($search_cat, 'id', 'category_name' );
$search_country = \yii\helpers\ArrayHelper::map($search_country, 'id', 'country' );
$author = Yii::$app->user->identity->username;
?>

<?= \frontend\components\NavProfileWidget::widget() ?>

<div class="container"><h1>Добавить Вакансию</h1>

<?php $formvac = ActiveForm::begin(['options' => ['id' => 'vacancies']])?>
    <?= $formvac->field($vacancies, 'author')->label('')->hiddenInput(['value' => $author]) ?>
   
<?= $formvac->field($vacancies, 'name')->label('Заголовок') ?>
<?= $formvac->field($vacancies, 'country')->dropDownList($search_country) ?>
<?= $formvac->field($vacancies, 'description')->label('Текст Сообщения')->textarea(['rows' => 5]) ?>
<?= $formvac->field($vacancies, 'category_id')->label('Категория')->dropDownList($search_cat) ?>
    
<?= Html::submitButton('Отправить', ['class' => 'btn btn-success'] ) ?>
<?php ActiveForm::end()?>
</div>
<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>
<?php // debug ($model); ?>
<?php if (Yii::$app->session->hasFlash('session')) : ?>
<?php echo (Yii::$app->session->getFlash('session')); ?>
<?php endif; ?>

<?php if (Yii::$app->session->hasFlash('error')) : ?>
<?php echo (Yii::$app->session->getFlash('error')); ?>
<?php endif; ?>

<h1>Список всех Вакансий</h1>

<?php $form = ActiveForm::begin(['options' => ['id' => 'testForm']])?>
<?= $form->field($model, 'name')->label('Имя') ?>
<?= $form->field($model, 'email') ?>
<?= $form->field($model, 'text')->label('Текст Сообщения')->textarea(['rows' => 5]) ?>
<?= Html::submitButton('Отправить', ['class' => 'btn btn-success'] ) ?>
<?php ActiveForm::end()?>


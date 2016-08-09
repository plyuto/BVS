

<?php //debug(Yii::$app) ?> 

<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>
<?php // debug ($model); ?>

<h1>Тест</h1>

<?php $form = ActiveForm::begin()?>
<?= $form->field($model, 'name') ?>
<?= $form->field($model, 'email') ?>
<?= $form->field($model, 'text') ?>
<?php ActiveForm::end()?>
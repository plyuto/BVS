
<?php// $this->title = 'Одна статья';?>

<?php //foreach ($cats as $cat) {
//echo $cat->category_name .'&nbsp&nbsp';

//}?>
<?php //debug($cats); ?>
<?php //echo count($cats->vacancies) ?>
<?php $cat = \frontend\models\Categories::findOne($show->category_id) ?>
<?php $countryname = \frontend\models\Countries::findOne($show->country); ?>



<?php //debug($country);?>





<div class="container">

<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title"><a href="#"><span style="font-weight: 900;font-size: 24px;color: #ffeac7;"><?=$show->name?></span></a></h3>
    <span>Страна: <span style="color: #efef00; font-weight:700;"><?= $countryname->country ?></span> --- Категория: <span style="color: #efef00; font-weight:700;"><?= $cat->category_name?></span></span>

  </div>
  <div class="panel-body">
    <?=$show->description?>
  </div>
</div>
</div>

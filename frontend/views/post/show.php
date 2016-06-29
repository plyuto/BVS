
<?php// $this->title = 'Одна статья';?>

<?php //foreach ($cats as $cat) {
//echo $cat->category_name .'&nbsp&nbsp';

//}?>
<?php //debug($cats); ?>
<?php //echo count($cats->vacancies) ?>
<?php //debug($cats); ?>





<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title"><a href="#"><?=$show->name?></a></h3>
  </div>
  <div class="panel-body">
    <?=$show->description?>
  </div>
</div>

<?php debug($show); ?>
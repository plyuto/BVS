<ul class="nav nav-pills">
  <li role="presentation" <?php if ($action == 'index') {?>class="active"<?php }?>><a href="<?= yii\helpers\Url::to('/profile/default/index')?>">Мои Вакансии</a></li>
  <li role="presentation" <?php if ($action == 'add-vac') {?>class="active"<?php }?>><a href="<?= yii\helpers\Url::to('/profile/default/add-vac')?>">Добавить Вакансию</a></li>
  <li role="presentation" <?php if ($action == 'payment') {?>class="active"<?php }?>><a href="<?= yii\helpers\Url::to('/pay/payment')?>">Баланс</a></li>
</ul>
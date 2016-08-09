<?php 

//debug($balance);
//debug($author);
?>
<?= \frontend\components\NavProfileWidget::widget() ?>

<h2>Баланс моего счета <span style="color: green;"><?= $balance->balance?> $</span></h2>
<?php // $bill = $balance->balance + 2.5?>


<form name="pay" action="https://sci.interkassa.com/" method="POST" accept-charset="UTF-8">
<input name="ik_co_id" value="533a827dbf4efce73613c294" type="hidden">
<input name="ik_am" value="1" type="text"> $ <br><span style="font-style: italic;color: grey;">- введите нужную сумму пополнения в валюте usd</span>
                  <input name="ik_desc" value="Пополнение баланса на сайте bvs.ua. Логин armada1" type="hidden">
                  <input name="ik_pm_no" value="<?= $author?>" type="hidden">
                  <input name="ik_ia_u" value="http://bvs.openmall.info/pay/result" type="hidden">
                  <input name="ik_ia_m" value="POST" type="hidden">
                  <input name="ik_cur" value="UAH" type="hidden">
                  <input name="ik_suc_u" value="http://bvs.openmall.info/pay/result" type="hidden"><br><br>
                  <button name="create"  class="btn btn-primary" id="yw0" type="submit">Пополнить счет</button>
                  </form>
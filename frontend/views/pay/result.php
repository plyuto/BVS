<?php 
use frontend\models\Billing_Users;

$status = $_POST['ik_inv_st'];
$amount = $_POST['ik_am'];
echo $amount;
if ($_POST['ik_inv_st'] == 'success' && $_POST['ik_co_id'] == '533a827dbf4efce73613c294') {
   $balance->balance = $balance->balance + $_POST['ik_am']; 
   //echo "200 OK";
   echo "Платеж успешен. Ваш счет пополнен на ".$amount."Ваш баланс составляет ".$balance->balance."</br>";
   
}else{
    echo 'Платеж не успешен';
}

//$balance->balance = $balance->balance + 1;
//$balance->save();
//$balance->balance 
//$balance->balance = $$balance->balance + 1;
$id = $_POST['ik_co_id'];
echo $balance->balance."</br>";
echo $_POST['ik_inv_st']."</br>";
$balance->save();
//print_r($_POST);


//echo "200 OK";?>


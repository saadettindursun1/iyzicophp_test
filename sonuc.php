<?php
ob_start();
session_start();


$token=$_POST['token'];
@$siparis_no=$_GET['siparis_no'];
require_once('vendor/iyzico/iyzipay-php/config.php');
$request = new Iyzipay\Request\RetrieveCheckoutFormRequest();
$request->setLocale(\Iyzipay\Model\Locale::TR);
$request->setConversationId("$siparis_no");
$request->setToken("$token");
$checkoutForm = \Iyzipay\Model\CheckoutForm::retrieve($request, Config::options());

//print_r($checkoutForm->getStatus());
 $odeme_durum=$checkoutForm->getPaymentStatus();
//gonderılen orderid
$orderid=$checkoutForm->getbasketId();




if ($odeme_durum=="FAILURE") {
	
	echo "tamamlanamadı";


} elseif ($odeme_durum=="SUCCESS") {

	echo "Ödeme Tamamlandı :";

	
}

?>

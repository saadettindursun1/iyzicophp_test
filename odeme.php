<!DOCTYPE html>
<html>
<head>
	<title>İyzico Ödeme Sayfası</title>
</head>
<body>
<?php



@$kullanici_ad=$_POST["ad"];
@$kullanici_soyad=$_POST["soyad"];
@$kullanici_gsm=$_POST["telefon"];
@$kullanici_mail=$_POST["eposta"];
@$kullanici_zaman="2015-10-05 12:43:35"; 
@$kullanici_adresiyaz=$_POST["adres"];
@$kullanici_il=$_POST["sehir"];
@$siparis_no=356;
@$sepettoplam=950;
?>

<div class="tab-pane fade active in" id="desc">
		<div class="row">
			<?php include('vendor/iyzico/iyzipay-php/buyer.php'); ?>
				<div  id="iyzipay-checkout-form" class="responsive"></div>
		</div>
</div>
</body>
</html>
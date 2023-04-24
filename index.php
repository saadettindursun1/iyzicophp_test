<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Sepet İşlemleri</title>
</head>

<body>

    <div class="container-fluid mt-4">
        <div class="col-md-6 float-left">
            <div class="card-header text-center text-white bg-secondary">Sepetinizdeki Ürünler</div>
            <div class="card-body  mt-2">
                <div class="urun ">
                    <img src="img/sepet1.png" style="width: 8%; height: 8%;" alt=""> <label class="ml-5">Puma Court
                        Rider 2.0 (Erkek Basketbol Ayakkabısı)</label> <label class="float-right mt-3"> 350 TL</label>
                </div>

                <div class="urun mt-2">
                    <img src="img/sepet2.png" style="width: 8%; height: 8%;" alt=""> <label class="ml-5">Nike Air
                        Monarch IV (Erkek Antrenman Ayakkabısı)</label> <label class="float-right mt-3">400 TL</label>
                </div>

                <div class="urun">
                    <img src="img/sepet3.jpg" style="width: 8%; height: 8%;" alt=""> <label class="ml-5">Hammer Jack
                        Vegas Erkek Günlük Spor Ayakkabı</label> <label class="float-right mt-3">200 TL</label>
                </div>

                <div class="urun">
                    <br>
                    <hr>
                    <label class="ml-5 h5">TOPLAM SEPET TUTARI: </label> <label class="float-right h5">950 TL</label>
                </div>

            </div>
        </div>


        <form action="odeme.php" method="post">
            <div class="col-md-6  float-left">
                <div class="card-header text-center text-white bg-warning">Alıcı Bilgileri</div>
                <div class="card-body  mt-2">
                    <div class="card-body">
                        <input type="text" name="ad" class="form-control" placeholder="Ad" required><br>
                        <input type="text" name="soyad" class="form-control" placeholder="Soyad" required> <br>
                        <input type="text" name="telefon" class="form-control" placeholder="Telefon" required> <br>
                        <input type="text" name="eposta" class="form-control" placeholder="e-posta" required> <br>
                        <input type="text" name="sehir" class="form-control" placeholder="Şehir" required> <br>
                        <textarea name="adres" class="form-control" id="" cols="30" rows="3"
                            placeholder="Adresinizi Giriniz.." required></textarea>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-block btn-success">Ödemeye Geç</button>
                    </div>
                </div>
            </div>


        </form>



    </div>


</body>

</html>
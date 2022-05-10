<?php

$kullanici_adi="b201210580@gmail.com";
$sifre="b201210580";

if($kullanici_adi==$_POST['id'] && $sifre==$_POST['sifre'])
{
    echo "Hoşgeldiniz b201210580 <br/>";
    echo " 7 saniye içinde hakkimda sayfasına yönelendirileceksiniz";
    header("Refresh: 7; url=hakkimda.html");

}
else{
    echo "Girilen bilgiler hatalıdır. 3 saniye içinde giriş ekranına yönelendirileceksiniz";
    header("Refresh: 3; url=login.html");
}

?>
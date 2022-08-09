<h1>Belajar PHP</h1>

<?php
//isi koding > komentar adalah baris yang tidak akan di eksekusi oleh program

/*
 variable ?
 wadah yang menyimpan dan mewakili suatu nilai.

 variable punya apa ?
 1. nama
 2. inisiasi > proses pemberian nilai
 3. nilai
*/
$nama;
$nama = "Ephraim";
$nilai_ulangan_mtk = 100;

echo "<b>Nama</b> saya adalah ";
echo $nama;
echo "<br>Nilai Ujian MTK saya adalah ";
echo $nilai_ulangan_mtk;

echo "<br>";
$nama = "Adit";
$nilai_ulangan_mtk = 20;
echo "<br>Nama saya adalah ";
echo $nama;
echo "<br>Nilai Ujian MTK saya adalah ";
echo $nilai_ulangan_mtk;
echo "<br>";
/*
$adit = 10
$iman = 11
? adit == iman -> adit bukan iman
? iman == adit -> iman bukan adit
> -> usia > 17 
< -> usia < 17
>= -> harga >= 20000
<= -> harga <= 3000000
== -> ujian hari == ujian agus
!= -> dosa != selamat
*/
?>
<h1> if statement</h1>

<?php
$adit = 19;
$iman = 18;
$ephraim = 19;

//if saja
if(true || false){//jika kondisi benar
  echo "statement benar berjalan <br><br><br>"; // statement dijalankan
}  

//if bersarang
/*if($uang_bayar >= $harga_barang){
    echo "Oke, pembayaran berhasil <br>";
    
    if($harga_barang < $uang_bayar){
        echo "kembalian bernilai 30.000 <br>";
    }
}*/

//if else
if($iman > $adit){
 echo "INI YANG BERJALAN BENAR"; // kodisi true
}else{
echo "Tidak Berjalan dengan benar"; // kondisi false
}

//if else if

if($adit > $ephraim){
echo "adit lebih tua";
}else if($adit < $ephraim){
    echo "adit lebih muda";
}else if ($adit == $ephraim){
    echo "adit seusia";
}


?>
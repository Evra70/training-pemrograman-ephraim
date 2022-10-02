<h3> FORM TEST METODE POST</h3>
<form method="POST" action="" > 
    <input autocomplete="off" type="text" name="nama_orang">
    <br>
    <input type="submit" value="Kirim">
</form>
<br>
<p>Hasil dari Kirim Data :</p>
<?php
//error_reporting(0);

//POST : Menerima data yang di kirim 
//GET : Mengambil data dari variable url

//menerima data yg dikirim
if(!empty($_POST['nama_orang'])){
    $nama_orang = $_POST['nama_orang'];
    //tampilkan data
    echo "Yang Namanya $nama_orang";
}


?>

<h3> FORM TEST METODE POST 2</h3>
<form method="POST" action="halaman-terima-data.php" > 
    <input 
    type="password" name="password_baru">
    <br>
    <input type="submit" value="Kirim">
</form>

<h3> FORM TEST METODE GET 1</h3>
<form method="" action="halaman-terima-data.php" > 
    Nama : <input 
    type="text" name="nama">
    <br>
    Kelas : <input 
    type="text" name="kelas">
    <br>
    <input type="submit" value="Kirim">
</form>

<a href="halaman-terima-data.php?nama=Pokemon&kelas=apa+aja+bisa"> test </a>
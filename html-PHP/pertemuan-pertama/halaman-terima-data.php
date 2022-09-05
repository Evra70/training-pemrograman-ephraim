<h3>Terima data password POST</h3>
<?php
if(!empty($_POST['password_baru'])){
    echo "password mu adalah ".$_POST['password_baru'];

}
?>
<h3>Terima data GET</h3>
<?php
echo "Nama :  ".$_GET['nama']. "<br> Kelas : ".$_GET['kelas'];
?>
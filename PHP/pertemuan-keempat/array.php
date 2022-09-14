<?php
//array adalah tipe data yang bisa 
//menampung lebih dari 1 data berupa list

$array_hewan[0] = "Ayam";
$array_hewan[1] = "Sapi";
$array_hewan[2] = "Kuda";
$array_hewan[3] = "Kelinci"; 

$array_buah = ["Apel","Jeruk","Kelengkeng","Durian","Nangka"]; 

for($init_nilai = 0;$init_nilai < count($array_hewan);$init_nilai++){
    echo $array_hewan[$init_nilai];
    echo "<br>";
}

for($init_nilai = 0;$init_nilai < count($array_buah);$init_nilai++){
    echo $array_buah[$init_nilai];
    echo " [$init_nilai] <br>";
}
echo "<br><br><br><br><br><br><br>";
$array_nama = ["L-Ephraim","P-Lisa","L-Adit","P-Avel","L-Sule","P-Sani"]; 
$count_laki = 0;
$count_perempuan = 0;
$array_laki=array();
$array_perempuan=array();

echo "<h4>Daftar Nama : </h4><ol>";
for($i = 0;$i < count($array_nama);$i++){
    echo "<li>".substr($array_nama[$i],2)."</li>";
   if(substr($array_nama[$i],0,1) == "L"){
        array_push($array_laki,substr($array_nama[$i],2));
        $count_laki++;
   }
   if(substr($array_nama[$i],0,1) == "P"){
        array_push($array_perempuan,substr($array_nama[$i],2));
        $count_perempuan++;
    }
}
echo "</ol>";

echo "<h4>Laki-Laki : </h4>";
echo "<ol>";
for($i = 0;$i < $count_laki;$i++){
    echo "<li>".$array_laki[$i]."</li>";
}
echo "</ol>";

echo "<h4>Perempuan : </h4>";
echo "<ol>";
for($i = 0;$i < $count_perempuan;$i++){
    echo "<li>".$array_perempuan[$i]."</li>";
}
echo "</ol>";


?>
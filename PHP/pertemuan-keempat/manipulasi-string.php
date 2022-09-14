<?php

$bahan_manipulasi = "Matematika";

echo ">Jumlah huruf dalam kalimat '$bahan_manipulasi' adalah ".strlen($bahan_manipulasi)."<br>";
echo "> Function str_pos yang berguna untuk menemukan index dari kata yang dicari, 'tika' <br> 
dalam 'Matematika' berada pada index ke : ".strpos($bahan_manipulasi,"tika")."<br>";

echo ">Mengambil kata 'tika' dari '$bahan_manipulasi' seperti berikut : ".substr($bahan_manipulasi,strpos($bahan_manipulasi,"tika"))."<br>";


?>
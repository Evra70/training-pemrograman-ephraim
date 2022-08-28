<h4>While</h1>
<?php
$start_loop = 1;
$end_loop = 10;

echo "Perulangan kecil ke besar <br>";
while($start_loop <= $end_loop){
//statement
echo "Ini Perulangan ke : ".$start_loop."<br>";
//$start_loop=$start_loop+1; 
//$start_loop += 1; 
$start_loop++;
}

echo "<br>Perulangan besar ke kecil <br>";
$start_loop =10; 
$end_loop = 1;
while($start_loop >= $end_loop){
    //statement
    echo "Ini Perulangan ke : ".$start_loop."<br>";
    //$start_loop=$start_loop-1; 
    //$start_loop -= 1; 
    $start_loop--;
    }
?>

<h4> Do While</h1>
<?php
//echo "<br><br>";
$start_loop =0; 
$end_loop = 1;

do{
    //statement
    echo "Ini Perulangan ke : ".$start_loop."<br>";
    //$start_loop=$start_loop-1; 
    //$start_loop -= 1; 
    $start_loop--;
}while($start_loop >= $end_loop)//expresi
?>

<h4>For</h1>
<?php
for ($start_loop = 1; $start_loop <= 10; $start_loop++) {
    echo "The number is: $start_loop <br>";
}
?>


<h4>Kotak Bintang [PAMER]</h1>
<?php

for ($x = 1; $x <= 5; $x++) {    
    for ($i = 1; $i <= 5; $i++) {
        echo "*  ";
    }
    echo "<br>";
}
?>

<h4>Segitiga Bintang [PAMER]</h1>
<?php

for ($x = 1; $x <= 5; $x++) {    
    for ($i = 5; $i >= $x; $i--) {
        echo " $i ";
    }
    echo "<br>";
}
?>

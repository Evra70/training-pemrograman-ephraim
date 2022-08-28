<?php
$lampu = "off";
//switch case
echo "Saklar : ".$lampu."<br>";
switch($lampu){
    case "on":
        echo "lampu menyala";
    break;
    case "off":
        echo "lampu mati";
    break;
    default:
        echo "Input tidak valid";
    break;
}

?>
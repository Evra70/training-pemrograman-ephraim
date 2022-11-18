
<a href="<?php echo $_SERVER['PHP_SELF']; ?>?page=while">while</a> |
<a href="<?php echo $_SERVER['PHP_SELF']; ?>?page=do-while">Do While</a> |
<a href="<?php echo $_SERVER['PHP_SELF']; ?>?page=for">For</a>

<?php
if(!is_null($_GET['page'])){
	$page = $_GET['page'];
	
	switch($page){
		case "for":
			echo "<br>Looping FOR <br>";
			for($mulai_looping=1;$mulai_looping <= 10;$mulai_looping++){
				echo "Halo $mulai_looping <br>";
			}
			break;
		case "do-while":
			echo "<br>Looping DO While <br>";
			$stop_loop =0;
			do{
				
				echo "Halo $stop_loop <br>";
				$stop_loop++;
			}while($stop_loop <= 10);	
			break;
		case "while":
			echo "<br>Looping While <br>";
			$stop_loop =0;
			while ($stop_loop <= 10){
				$stop_loop++;
				echo "Halo $stop_loop <br>";
				
			}
			break;
	}
}
?>

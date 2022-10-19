<?php 


try {
	$baglanti = new PDO("mysql:host=localhost; dbname=eticaret", "root", "");
	
} catch (PDOException $e) {
	echo  $e->getMessage();
}





 ?>
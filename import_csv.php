<?php
	// Connect to database
	include("db_connect.php");

	if (isset($_POST["import"])) {
		
		$fileName = $_FILES["file"]["tmp_name"];
		
		if ($_FILES["file"]["size"] > 0) {
			
			$file = fopen($fileName, "r");
			
			while (($column = fgetcsv($file, 10000, ",")) !== FALSE) {
				$sql = "INSERT into produit (id,name,description,price)
					   values ('" . $column[0] . "','" . $column[1] . "','" . $column[2] . "','" . $column[3] . "')";
				$result = mysqli_query($conn, $sql);
				
				if (! empty($result)) {
					$type = "success";
					$message = "Les Donn�es sont import�es dans la base de donn�es";
				} else {
					$type = "error";
					$message = "Probl�me lors de l'importation de donn�es CSV";
				}
			}
		}
	}
	//Retourner � la page index.php
	header('Location: index.php');
	exit;
?>
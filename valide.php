<?php
try
{
	$db = new PDO('mysql:host=localhost;dbname=essai;charset=utf8', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}



$id = $_GET['varname'];
$update = $db->query("UPDATE fichierTemporaire SET etat = 1 WHERE id = $id");


echo "<script>
alert('Le fichier a été validé');
window.location.href='test.php';
</script>";
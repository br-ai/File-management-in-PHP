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
$delete = $db->query("DELETE FROM fichierTemporaire WHERE id = $id");


echo "<script>
alert('Supprimé');
window.location.href='test.php';
</script>";
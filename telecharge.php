<?php


$nomfichier = $_GET['varname'];
// header('Location: uploads.php/ .$nomfichier');


echo "<script>
window.location.href='uploads/$nomfichier';
</script>";

header('Location: test.php');
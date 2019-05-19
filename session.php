<?php 
session_start();
$_SESSION['nama']=$_GET['nama'];
$_SESSION['id']=$_GET['id'];
// echo $_SESSION['nama'];
 ?>
 <meta http-equiv="Refresh" content="0; url=index.php">
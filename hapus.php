<?php 
include 'konek.php';
$id =$GET['id'];
$sql =$db->query("DELETE FROM tb_buku WHERE id='$id'");
header("location:index.php");
?>
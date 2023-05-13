<?php
$id=$_GET['id'];

$dsn="mysql:host=localhost;charset=utf8;dbname=store";
$pdo=new PDO($dsn,'root','');

$sql="delete from `products` where `id`='$id'";

$pdo->exec($sql);

header("location:index.php");
?>
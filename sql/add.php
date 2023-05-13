<?php
$name=$_POST['name'];
$price=$_POST['price'];
$up=$_POST['up'];

$dsn="mysql:host=localhost;charset=utf8;dbname=store";
$pdo=new PDO($dsn,'root','');
$sql="insert into `products` (`name`,`price`,`up`) values('$name','$price','$up')";

$pdo->exec($sql);

header("location:index.php");
?>
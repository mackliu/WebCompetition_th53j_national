<?php
$name=$_POST['name'];
$price=$_POST['price'];
$up=$_POST['up'];
$id=$_POST['id'];

$dsn="mysql:host=localhost;charset=utf8;dbname=store";
$pdo=new PDO($dsn,'root','');
$sql="update `products` 
      set `name`='$name',`price`='$price',`up`='$up' 
      where `id`='$id'";

$pdo->exec($sql);

header("location:index.php");
?>
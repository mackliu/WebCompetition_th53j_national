<?php
$items=$_POST['item'];

$dsn="mysql:host=localhost;charset=utf8;dbname=store";
$pdo=new PDO($dsn,'root','');

$sql_add_customer="insert into `customs`(`id`) values(NULL)";
$pdo->exec($sql_add_customer);
$sql_max_id="select max(`id`) from `customs`";
$max_id=$pdo->query($sql_max_id)->fetchColumn();

foreach($items as $id){
    $sql_add_order="insert into `orders` (`product_id`,`custom_id`) 
                                    values('$id','$max_id');";
    $pdo->exec($sql_add_order);
}

header("location:store.php?result=success");
?>
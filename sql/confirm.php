<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>確認餐點</title>
</head>
<body>
<h1>以下是你的餐點:</h1>
<?php

$dsn="mysql:host=localhost;charset=utf8;dbname=store";
$pdo=new PDO($dsn,'root','');

$items=$_POST['item'];
$sum=0;
echo "<table>";
foreach($items as $item){
    echo "<tr>";
    $sql="select `name`,`price` from `products` where `id`='$item'";
    $row=$pdo->query($sql)->fetch();
    echo "<td>{$row['name']}</td>";
    echo "<td>{$row['price']}</td>";

    echo "</tr>";
    $sum=$sum+$row['price'];
}
echo "</table>";

echo "總計:".$sum."元";

?>
 <div>
    <form action="add_orders.php" method="post">
        <?php
            foreach($items as $item){
                echo "<input type='hidden' name='item[]' value='$item'>";
            }

        ?>


    <button type='submit'>確定結帳</button>
    <button type='button' onclick="history.go(-1)">返回重點</button>
    </form>
 </div>
</body>
</html>
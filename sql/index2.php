<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>產品列表</title>
    <style>
        table{
            border-collapse:collapse;
            width:300px;
            margin:auto;
        }
        td{
            border:1px solid #ccc;
            padding:5px 10px;

        }
    </style>
</head>
<body>
<?php
$dsn="mysql:host=localhost;charset=utf8;dbname=store" ;
$pdo=new PDO($dsn,'root','');

$sql="select * from `products`";

$rows=$pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
?>
<table>
    <tr>
        <td>品項</td>
        <td>價格</td>
    </tr>
    <?php
    foreach($rows as $row){
    ?>
    <tr>
        <td><?=$row['name'];?></td>
        <td><?=$row['price'];?></td>
    </tr>
    <?php
    }
    ?>
</table>
</body>
</html>
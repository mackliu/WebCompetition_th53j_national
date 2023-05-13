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
        .btn-add{
            padding:5px 10px;
            border:1px solid lightblue;
            border-radius :7px;
            margin:10px;
        }
    </style>
</head>
<body>
<?php
$dsn="mysql:host=localhost;charset=utf8;dbname=store" ;
$pdo=new PDO($dsn,'root','');

$sql="select * from `products`";

$rows=$pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

echo "<a href='add_form.php' class='btn-add'>新增品項</a>";

echo "<table>";
echo "<tr>";
echo "<td>品項</td>";
echo "<td>價格</td>";
echo "</tr>";
foreach($rows as $row){
    echo "<tr>";
        echo "<td>";
            echo $row['name'];
        echo "</td>";
        echo "<td>";
            echo $row['price'];
        echo "</td>";
    echo "</tr>";
}
echo "</table>";
 ?>
</body>
</html>
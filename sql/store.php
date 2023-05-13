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

if(isset($_GET['result'])){
    echo "訂餐完成，感謝惠顧，請稍後取餐";
}


?>


<form action="confirm.php" method="post">
<table>
<tr>
<td>品項</td>
<td>價格</td>
<td>點餐</td>
</tr>
<?php
foreach($rows as $row){
?>
    <tr>
        <td>
            <?=$row['name'];?>
        </td>
        <td>
            <?=$row['price'];?>
        </td>
        <td>
        <input type='checkbox' name='item[]' value='<?=$row['id'];?>'>
        </td>
    </tr>
<?php
}
?>
</table>
<div style="text-align:center">
    <input type="submit" value="新增訂單">
</div>
</form>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>編輯品項</title>
</head>
<body>
    <?php
    $dsn="mysql:host=localhost;charset=utf8;dbname=store";
    $pdo=new PDO($dsn,'root','');
    $sql="select * from `products` where `id`='{$_GET['id']}'";
    $row=$pdo->query($sql)->fetch();

    ?>
    <h2>編輯餐點</h2>
<form action="edit.php" method="post">
    <p>
        <lable>名稱:</lable>
        <input type="text" name="name" value="<?=$row['name'];?>">
    </p>
    <p>
         <lable>價格:</lable>
        <input type="number" name="price" value="<?=$row['price'];?>">
    </p>
    <p>
         <lable>是否上架</lable>
        <input type="radio" name="up" value="1" <?=($row['up']==1)?'checked':'';?>>是&nbsp;&nbsp;
        <input type="radio" name="up" value="0" <?=($row['up']==0)?'checked':'';?>>否
        
    </p>
    <p>
        <input type="hidden" name="id" value="<?=$_GET['id'];?>">
        <input type="submit" value="確認修改">
    </p>
</form>    
</body>
</html>
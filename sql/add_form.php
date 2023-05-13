<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新增品項</title>
</head>
<body>
    <h2>新增餐點</h2>
<form action="add.php" method="post">
    <p>
        <lable>名稱:</lable>
        <input type="text" name="name" id="">
    </p>
    <p>
         <lable>價格:</lable>
        <input type="number" name="price" id="">
    </p>
    <p>
         <lable>是否上架</lable>
        <input type="radio" name="up" value="1" checked>是&nbsp;&nbsp;
        <input type="radio" name="up" value="0">否
        
    </p>
    <p>
        <input type="submit" value="確認新增">
    </p>
</form>    
</body>
</html>
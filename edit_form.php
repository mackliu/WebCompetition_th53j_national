<?php
$id=$_GET['id'];

$user=[
    1=>['name'=>'陳小明',
        'age'=>20,
        'rank'=>1],
    2=>['name'=>'江美麗',
        'age'=>21,
        'rank'=>5]
]

?>

<form action="edit_user.php">
    <div>
        <label for="name">姓名:</label>
        <input type="text" name="name" id="name" value="<?=$user[$id]['name'];?>">
    </div>
    <div>
        <label for="age">年齡:</label>
        <input type="number" name="age" id="age" value="<?=$user[$id]['age'];?>">
    </div>
    <div>
        <label for="rank">排名:</label>
        <input type="text" name="rank" id="rank" value="<?=$user[$id]['rank'];?>">
    </div>
    <div>
        <input type="button" value="編輯">
    </div>
</form>
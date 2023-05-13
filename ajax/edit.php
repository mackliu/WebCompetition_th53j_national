<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="jquery.js"></script>
</head>
<body>

<div><a href="#" data-id="1" class='user'>陳小明 - 編輯</a></div>
<div><a href="#" data-id="2" class='user'>江美麗 - 編輯</a></div>
<div><a href="#" data-id="3" class='user'>陳建中 - 編輯</a></div>

<div class="edit-form">

</div>

</body>

</html>
<script>

$(".user").on('click',function(){
    let id=$(this).data("id")
    $.get("edit_form.php",{id},function(page){
        $(".edit-form").html(page)
    })
})


</script>

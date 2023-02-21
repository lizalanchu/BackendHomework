<?php include_once ('ver/index.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Card</title>
</head>
<body>
<form action= '' method="post">
    <input type="number" name="card">
    <input type="submit" name="send" value="Отправить">
</form>
<?php
if (!empty(($_POST))){
    $Card = $_POST['card'];
    $value = new Card;
    $massage = $value->emit_card($Card);
    echo $massage;}
?>  




</body>
</html>

<?php
$message=$_GET['msg']??"Bonjour !";
$max=$_GET['nb']??5;
$color=$_GET['color']??'black';
$bgcolor=$_GET['bgcolor']??'white';
?>

<form method="get" action="text.php">
    <input type="text" name="msg" value="<?=$message?>">
    <input type="number" value="1" max="6" min="1" name="nb">
    <input type="color" name="color" value="<?=$color?>">
    <input type="color" name="bgcolor" value="<?=$bgcolor?>">
    <button type="submit">Valider</button>
</form>

<?php

foreach(range(1, $max)as $i){
    echo "<h$i style='color: $color;background-color:$bgcolor'>$message</h$i>";
}
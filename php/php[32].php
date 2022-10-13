<?php
$message=$_GET['msg']??"Bonjour !";
$max=$_GET['nb']??5;
$color=$_GET['color']??'black';
$bgcolor=$_GET['bgcolor']??'white';

foreach(range(1,$max)as $1){
    echo "<h$i style='color:$color;background-color:$bgcolor'>$message</h$i>";
}
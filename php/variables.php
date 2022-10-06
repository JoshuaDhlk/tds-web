<?php
$message=$_GET['msg']??"Bonjour!";

$max=$_GET['nb']??5;
echo '<h1>'.$message.'</h1>';
echo "<h2>$message</h2>";
echo "<h3>$message</h3>";
foreach (range(0,$max) as $number){
    echo "<h$number>$message</h$number>";
}

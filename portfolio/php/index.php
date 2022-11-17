<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PortFolio</title>
</head>
<body>
    <p>Hello World!!</p>
<?php
echo 'Hello World!';

$filename='tableau.data';
if(file_exists($filename)) {
    $data = file_get_contents($filename);
    $array = unserialize($data);
    var_dump($array);
}
$COMPETENCES = array("1","2","3");
var_dump($COMPETENCES );

?>

</body>
</html>
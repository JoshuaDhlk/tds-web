<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Albums</title>
</head>
<body>
    <h1>Mes Albums</h1>

    <div class="navAlb">
<?php
if(!isset($_GET['id'])){
    $_GET['id']=1;
}

$cnx = mysqli_connect("localhost", "root", "", "albumsap");

if (mysqli_connect_errno()) {
    echo "Echec de la connexion : ".mysqli_connect_error();
    exit ();
}

if(!isset($_GET['id'])) {
    $sql="SELECT idAlb FROM albumsap ORDER BY RAND() LIMIT 1";
    $res=msqli_query($cnx, $sql);
    $_GET['id']=mysqli_fetch_array($res) ["idAlb"];
}


$sql = "SELECT * from albumsap";
$res = mysqli_query($cnx, $sql);

while($album = mysqli_fetch_array($res)){
    $id = $album["idAlb"]==$_GET['id'] ? ' id="actif" ' : '';
    echo '<a '.$id.' href="index.php?id='.$album["idAlb"].'">'.$album['nomAlb'].'</a>';
}
?>
    </div>

    <div class="photos">

<?php

$sql = "SELECT * from photos INNER JOIN comporter ON comporter.idPho=photos.idPho WHERE idAlb=".$_GET['id'];
$res = mysqli_query($cnx, $sql);

while($photo = mysqli_fetch_array($res)){
    echo '<a href="photos.php?id='.$photo['idPho'].'"><img src="photos/'.$photo['nomPho'].'" />';
}

mysqli_free_result($res);

mysqli_close($cnx);

?>
    </div>
    
</body>
</html>
<?php //definir le doc comme php en entrant dans la session serveur//
session_start(); //Débute la session ou la reprendre pour identifier le client//
?>
<form method="post"> <!--formulaire-->
    <input type="text" name="username">
</form>
<?php
if(isset($_POST['username'])) { // $_POST pour accéder à 'username dans ce cas là(peut être changé au choix)//
    $_SESSION['user']=$_POST['username'];
    var_dump($_SESSION); //var_dumb pour afficher la session//
}

<?php



if(!empty($_POST))
{
    $errors = array();

    if(empty($_POST['nom']))
    {
        $errors['nom1'] = "Le champ du nom ne peut pas-être vide";
    }

    if(empty($_POST['prenom']))
    {
        $errors['prenom1'] = "Le champ du prénom ne peut pas-être vide";
    }

    if(empty($_POST['telephone']))
    {
        $errors['telephone1'] = "Le champ du téléphone ne peut pas-être vide";
    }

    if(empty($_POST['courriel']))
    {
        $errors['courriel1'] = "Le champ de l'email ne peut pas-être vide";
    }

    if(empty($_POST['message']))
    {
        $errors['message1'] = "Le champ du message ne peut pas-être vide";
    }

    if(count($errors) == 0)
    {
        header ("Location: success.php");
        exit();
    }

}

$courriel = 'joe@example.com';
$courriel2 = 'e-mail valide';

if (filter_var($courriel, FILTER_VALIDATE_EMAIL)) {
    echo "L'adresse email '$courriel' est considérée comme valide.";
}
if (filter_var($courriel2, FILTER_VALIDATE_EMAIL)) {
    echo "L'adresse email '$courriel2' est considérée comme valide.";
} else {
    echo "L'adresse email '$courriel2' est considérée comme invalide.";
}

?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>FORMULAIRE</title>
</head>
<body>
<form action="form.php" method="post">

    <p>
        <label  for="nom">Nom :</label>
        <input  type="text"  id="nom"  name="user_name" value="<?php if(isset($_POST['nom'])) echo $_POST['nom1']; ?>" />
    </p>
    <p><?php if(isset($errors['nom1'])) echo $errors['nom1']; ?></p>

    <p>
        <label  for="prenom">Prénom :</label>
        <input  type="text"  id="prenom"  name="user_surname" value="<?php if(isset($_POST['prenom'])) echo $_POST['prenom1']; ?>" />
    </p>
    <p><?php if(isset($errors['prenom1'])) echo $errors['prenom1']; ?></p>


    <p>
        <label  for="telephone">Téléphone :</label>
        <input  type="text"  id="telephone"  name="user_telephone" value="<?php if(isset($_POST['telephone'])) echo $_POST['telephone1']; ?>" />
    </p>
    <p><?php if(isset($errors['telephone1'])) echo $errors['telephone1']; ?></p>

    <p>
        <label  for="courriel">Courriel :</label>
        <input  type="email"  id="courriel"  name="user_email" value="<?php echo $courriel2; ?>" />
    </p>
    <p><?php if(isset($errors['courriel1'])) echo $errors['courriel1']; ?></p>

    <label  for="message">Message :</label>
    <textarea  id="message"  name="user_message"></textarea>

    <p>
    <div  class="button">
        <button  type="submit">Envoyer votre message</button>
    </div>
    </p>
</form>
</body>
</html>
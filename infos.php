<?php
    if(empty($_GET['id'])){
        header("location: index.php");
        exit;
    }

    require_once("includes/contact.class.php");
    $contact = Contact::getById($_GET['id']);

    if($contact === false){
        header("location: index.php");
        exit;
    }

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php include('includes/meta.inc.php'); ?>
    <title>Gestion contacts</title>
</head>
<body>
    <h1>Afficher un contact <small><a href="index.php"><i class="fas fa-undo-alt"></i></a></small></h1>
    

    <span class="infos">Nom : </span><?php echo $contact->nom;?><br>
    <span class="infos">Prénom : </span><?php echo $contact->prenom;?><br>
    <span class="infos">Mail : </span><?php echo $contact->mail;?><br>
    <span class="infos">Téléphone : </span><?php echo $contact->tel;?><br>
    <span class="infos">Adresse : </span><?php echo $contact->adresse;?><br>
    <span class="infos">CP : </span><?php echo $contact->cp;?><br>
    <span class="infos">Ville : </span><?php echo $contact->ville;?><br>

        
</body>
</html>
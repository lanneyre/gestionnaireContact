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

    if(isset($_POST['editContact'])){
        $error = Contact::checkData($_POST);

        if(empty($error)){
            $newContact = Contact::build($_POST['nom'], $_POST['prenom'], $_POST['mail'], $_POST['tel'], $_POST['adresse'], $_POST['cp'], $_POST['ville'], $_POST['id']);
            if($newContact->modifier()){
                header("Location: index.php");
                exit();
            } else {
                $error[] = "problème de sauvegarde";
            }
        }
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
    <h1>Editer un contact <small><a href="index.php"><i class="fas fa-undo-alt"></i></a></small></h1>
    
    <?php
    if(!empty($error)){
    ?>
    <div class="error">
        <?php echo implode("<br>", $error);?>
    </div>
    <?php } ?>
    <form action="" method="post" class="form">
        <label for="nom">Nom du contact *</label><input type="text" name="nom" id="nom" value="<?php echo $contact->nom;?>" required><br>
        <label for="prenom">Prénom du contact *</label><input type="text" name="prenom" id="prenom" value="<?php echo $contact->prenom;?>" required><br>
        <label for="mail">Mail du contact</label><input type="mail" name="mail" id="mail" value="<?php echo $contact->mail;?>"><br>
        <label for="tel">Téléphone du contact</label><input type="tel" name="tel" id="tel" value="<?php echo $contact->tel;?>"><br>
        <label for="adresse">Adresse du contact</label><input type="text" name="adresse" id="adresse" value="<?php echo $contact->adresse;?>"><br>
        <label for="cp">Code postal du contact</label><input type="text" name="cp" id="cp" value="<?php echo $contact->cp;?>"><br>
        <label for="ville">Ville du contact</label><input type="text" name="ville" id="ville" value="<?php echo $contact->ville;?>"><br>

        <input type="hidden" name="id" value="<?php echo $contact->id;?>">
        <div class="btn-grp">
            <input type="submit" value="Editer le contact" name="editContact" class="btn"> <input type="reset" value="Reset" class="btn">
        </div>
    </form>
</body>
</html>
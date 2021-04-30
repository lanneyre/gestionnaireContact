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

    if($contact->delete()){
        header("Location: index.php?statut=Ok");
        exit();
    } else {
        header("Location: index.php?suppr=Problème de sauvegarde");
        exit();
    }

?>
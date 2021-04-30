<?php
    require_once("includes/contact.class.php");
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
    <h1>Gestionnaire de contact <small><a href="creer.php"><i class="fas fa-plus"></i></a></small></h1>
    <table id="ContactTable">
        <thead>
            <tr>
                <th width="45%">Nom</th>
                <th width="40%">Prénom</th>
                <th width="5%">Afficher</th>
                <th width="5%">Modifier</th>
                <th width="5%">Supprimer</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Afficher</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
        </foot>
        <tbody>
        <?php $contacts = Contact::afficherTous(); 
        foreach($contacts as $contact) {
        ?>
            <tr>
                <td><?php echo strtoupper($contact->nom);?></td>
                <td><?php echo ucfirst(strtolower($contact->prenom));?></td>
                <td class="iconCRUD"><a href="infos.php?id=<?php echo $contact->id;?>"><i class="fas fa-eye"></i></a></td>
                <td class="iconCRUD"><a href="modifier.php?id=<?php echo $contact->id;?>"><i class="fas fa-edit"></i></a></td>
                <td class="iconCRUD"><a href="supprimer.php?id=<?php echo $contact->id;?>"><i class="fas fa-trash"></i></a></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>

    <script>
        $(document).ready( function () {
            // je met en forme mon tableau
            $('#ContactTable').DataTable();
        } );
    </script>
</body>
</html>
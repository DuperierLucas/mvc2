<a href="<?php echo ROOT ?>">< Retour Acceuil</a>
<h1>Liste des Auteurs :</h1>
<table border="1">


    <?php foreach($auteurs as $auteur){ ?>

    <tr>
        <td><a href="<?php echo ROOT ?>auteur/detail?id=<?php echo $auteur['id']?>"><?php echo $auteur['nom'] ?></a></td>
        <td><a href="<?php echo ROOT ?>auteur/delete?id=<?php echo $auteur['id']?>"">Supprimer l'auteur</a> </td>
    </tr>
    <?php } ?>
</tr>
<tr>
    <td colspan="2"><a href="<?php echo ROOT ?>auteur/insert_update">Ajouter un auteur</a></td>


</table>

<a href="<?php echo ROOT ?>">< Retour Acceuil</a>
<h1>Liste des Livres :</h1>

<table border="1">

    <?php foreach($livres as $livre){ ?>

        <tr>
            <td><a href="<?php echo ROOT ?>livre/detail?id=<?php echo $livre['id']?>"><?php echo $livre['nom'] ?></a></td>
            <td><a href="<?php echo ROOT ?>livre/delete?id=<?php echo $livre['id']?>"">Supprimer le livre</a> </td>
        </tr>

    <?php } ?>
    <tr>
        <td colspan="2"><a href="<?php echo ROOT ?>livre/insert_update">Ajouter un livre</a></td>
    </tr>
</table>

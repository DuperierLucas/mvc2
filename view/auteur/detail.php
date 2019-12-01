<?php
/** @var Auteur $auteur */
?>

<a href="<?php echo ROOT ?>auteur/liste">< Retour liste auteurs</a>

<h1>Nom de l'auteur : <?php echo $auteur->nom ?></h1>

<span>Prenom de l'auteur : <?php echo $auteur->prenom ?></span> <br>
<span>Date de naissance : <?php echo $auteur->date_naissance ?></span><br>
<span><a href="<?php echo ROOT ?>auteur/insert_update?id=<?php echo $auteur->id ?>">Modifier l'auteur</a></span><br>

<h2><a href="<?php echo ROOT ?>auteur/livre?id=<?php echo $auteur->id ?>">Cliquez ici pour afficher la liste des livres de cet auteur !</a></h2>


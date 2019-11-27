<?php
/** @var Auteur $auteur */
?>

<a href="<?php echo ROOT ?>livre/liste">< Retour bibliothèque</a>

<h1>Nom de l'auteur : <?php echo $auteur->nom ?></h1>

<span>Prenom de l'auteur : <?php echo $auteur->prenom ?></span> <br>
<span>Date de naissance : <?php echo $auteur->date_naissance ?></span><br>

<h2><a href="<?php echo ROOT ?>auteur/livre?id=<?php echo $auteur->id ?>">Cliquez ici pour afficher la liste des livres de cet auteur !</a></h2>


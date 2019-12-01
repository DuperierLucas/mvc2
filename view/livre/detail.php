<?php
/** @var Livre $livre */
?>

<a href="<?php echo ROOT ?>livre/liste">< Retour bibliothèque</a>

<h1><?php echo $livre->nom ?></h1>

<span>ISBN : <?php echo $livre->isbn ?></span> <br>
<span>Resumé : <?php echo $livre->resume ?></span> <br>
<span>Prix : <?php echo $livre->prix ?> €</span> <br>
<span>Auteur : <a href="<?php echo ROOT ?>auteur/detail?id=<?php echo $livre->id_auteur ?>"> <?php echo $auteur['nom'] ?></a></span>
<br>
<span><a href="<?php echo ROOT ?>livre/insert_update?id=<?php echo $livre->id ?>">Modifier le livre</a></span>
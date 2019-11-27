<?php
/** @var Auteur $livres */
?>
    <a href="<?php echo ROOT ?>livre/liste">< Retour bibliothèque</a>
<h1>Liste des livres de l'auteur <?php echo $auteur->nom ?> :</h1>
<?php
foreach ($livres as $livre){
    ?><li><a href="<?php echo ROOT ?>livre/detail?id=<?php echo $livre['id']?>"><?php echo $livre['nom']; ?></a></li><br>
<?php
}
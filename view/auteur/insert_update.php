<a href="<?php echo ROOT ?>auteur/liste">< Retour liste auteurs</a>


<form action="<?php if(isset($_GET['id'])){echo ROOT?>auteur/post?id=<?php echo $_GET['id']; }else{echo ROOT ?>auteur/post<?php }?>" method="post">
    <label for="auteur_prenom">Prénom : </label>
    <input id="auteur_prenom" name="prenom" type="text" placeholder="Paul" value="<?php if(isset($auteur->prenom)){echo $auteur->prenom;}?>">
    <br>
    <label for="auteur_nom">Nom : </label>
    <input id="auteur_nom" name="nom" type="text" placeholder="Dupont" value="<?php if(isset($auteur->nom)){echo $auteur->nom;}?>">
    <br>
    <label for="date_naissance">Date de naissance : </label>
    <input id="date_naissance" name="date_naissance" placeholder="10-01-2000" type="date" value="<?php if(isset($auteur->date_naissance)){echo $auteur->date_naissance;}?>">
    <br>
    <input id="id" name="id" type="hidden" value="<?php if(isset($auteur->id)){echo $auteur->id;}?>">
    <input type="submit">
</form>

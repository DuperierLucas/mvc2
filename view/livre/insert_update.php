<a href="<?php echo ROOT ?>livre/liste">< Retour bibliothèque</a>


<form action="<?php if(isset($_GET['id'])){echo ROOT?>livre/post?id=<?php echo $_GET['id']; }else{echo ROOT ?>livre/post<?php }?>" method="post">
    <label for="titre">Titre : </label>
    <input id="titre" name="nom" type="text" placeholder="Le titre" value="<?php if(isset($livre->nom)){echo $livre->nom;}?>">
    <br>
    <label for="isbn">ISBN : </label>
    <input id="isbn" name="isbn" type="text" placeholder="978-2-25545-912-0" value="<?php  if(isset($livre->isbn)){echo $livre->isbn;}?>">
    <br>
    <label for="auteur">Auteur : </label>
    <select name="id_auteur" id="auteur">
        <?php foreach($auteurs as $auteur){ ?>
            <option <?php if(isset($livre->id_auteur) && $auteur['id'] == $livre->id_auteur) echo 'selected';?> value="<?php echo $auteur['id']?>"><?php echo $auteur['nom'].' '.$auteur['prenom'] ?></option>
        <?php } ?>
    </select>
    <br>
    <label for="prix">Prix : </label>
    <input id="prix" name="prix" type="number" step="0.01" placeholder="25€" value="<?php  if(isset($livre->prix)){echo $livre->prix;}?>">
    <br>
    <label for="resume">Résumé : </label>
    <textarea id="resume" name="resume" cols="30" rows="10" placeholder="Entrer le resumé du livre ..."><?php  if(isset($livre->resume)){echo $livre->resume;}?></textarea>
    <br>
    <input id="id" name="id" type="hidden" value="<?php if(isset($livre->id)){echo $livre->id;}?>">
    <input type="submit">
</form>

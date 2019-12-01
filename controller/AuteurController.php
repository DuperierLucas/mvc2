<?php


class AuteurController extends Controller
{
    public function liste(){

        $auteurs = new Auteur();
        $this->set(['auteurs'=>$auteurs->getAll()]);
        $this->render('liste');
    }
    public function detail(){
        $id = (int)$_GET['id'];

        $auteur = new Auteur($id);

        $this->set(['auteur'=>$auteur]);
        $this->render('detail');
    }

    public function livre(){
        $id = (int)$_GET['id'];

        $livres = new Auteur($id);

        $this->set([
            'livres'=>$livres->getAllLivres(),
            'auteur'=>$livres

        ]);
        $this->render('livre');
    }
    public function insert_update(){
        if(isset($_GET['id'])) {
            $id = (int)$_GET['id'];
            $auteur = new Auteur($id);
        }else{
            $auteur = new Auteur();
        }

        $livres = new Livre();
        $this->set(['auteur' => $auteur, '$livres' => $livres->getAll()]);
        $this->render('insert_update');

    }
    public function post(){
        $auteur = new Auteur();
        $auteur->nom = $_POST['nom'];
        $auteur->prenom = $_POST['prenom'];

        $auteur->date_naissance = $_POST['date_naissance'];
        $auteur->id = isset($_POST['id']) ? (int)$_POST['id'] : null;
        if(isset($_GET['id'])){
            $auteur->update();
        }else{
            $auteur->create();
        }
        header('Location: '. ROOT.'auteur/liste');
    }
    public function delete(){
        if(isset($_GET['id'])){
            $id = (int) $_GET['id'];
            $auteur = new Auteur($id);
            $auteur->delete();
        }
        header('Location: '. ROOT.'auteur/liste');
    }
}
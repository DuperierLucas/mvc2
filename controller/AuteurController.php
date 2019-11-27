<?php


class AuteurController extends Controller
{
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
}
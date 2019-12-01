<?php

class LivreController extends Controller{

    public function liste(){

//        $livres = [
//            1=>['id'=>1, 'nom'=>'Nom du livre'],
//            2=>['id'=>2, 'nom'=>'Nom du livre 2'],
//            3=>['id'=>3, 'nom'=>'Nom du livre 3'],
//        ];
        $livres = new Livre();


        $this->set(['livres'=>$livres->getAll()]);
        $this->render('liste');
    }

    public function detail(){
        $id = (int)$_GET['id'];

        $livre = new Livre($id);
        $auteur = $livre->getAuteur();


        $this->set(
            [
                'livre'=>$livre,
                'auteur'=>$auteur
            ]
        );
        $this->render('detail');
    }

    public function insert_update(){
        if(isset($_GET['id'])) {
            $id = (int)$_GET['id'];
            $livre = new Livre($id);
        }else{
            $livre = new Livre();
        }

            $auteurs = new Auteur();
            $this->set(['livre' => $livre, 'auteurs' => $auteurs->getAll()]);
            $this->render('insert_update');

    }
    public function post(){
        $livre = new Livre();
        $livre->nom = $_POST['nom'];
        $livre->id_auteur = $_POST['id_auteur'];
        $livre->resume = $_POST['resume'];
        $livre->isbn = $_POST['isbn'];
        $livre->prix = ($_POST['prix']);
        $livre->id = isset($_POST['id']) ? (int)$_POST['id'] : null;
        if(isset($_GET['id'])){
            $livre->update();
        }else{
            $livre->create();
        }
        header('Location: '. ROOT.'livre/liste');
    }
    public function delete(){
        if(isset($_GET['id'])){
            $id = (int) $_GET['id'];
            $livre = new Livre($id);
            $livre->delete();
        }
        header('Location: '. ROOT.'livre/liste');
    }
}
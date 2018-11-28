<?php

class Post {

    // los declaramos como públicos para acceder directamente $post->author
    public $id;
    public $author;
    public $content;
    public $imatge;
    public $titol;
    public $dataCreacio;
    public $dataModif;

    public function __construct($id, $author, $content, $imatge, $titol, $dataCreacio, $dataModif) {
        $this->id = $id;
        $this->author = $author;
        $this->content = $content;
        $this->imatge = $imatge;
        $this->titol = $titol;
        $this->dataCreacio = $dataCreacio;
        $this->dataModif = $dataModif;
    }

    public static function all() {
        $list = [];
        $db = Db::getInstance();
        $req = $db->query('SELECT * FROM posts');
        // creamos una lista de objectos post y recorremos la respuesta de la
        //consulta
        foreach ($req->fetchAll() as $post) {
            $list[] = new Post($post['id'], $post['author'], $post['content'], $post['imatge'], $post['titol'], $post['dataCreacio'], $post['dataModif']);
        }
        return $list;
    }

    public static function find($id) {
        $db = Db::getInstance();
        // nos aseguramos que $id es un entero
        $id = intval($id);
        $req = $db->prepare('SELECT * FROM posts WHERE id = :id');
        // preparamos la sentencia y reemplazamos :id con el valor de $id
        $req->execute(array('id' => $id));
        $post = $req->fetch();
        return new Post($post['id'], $post['author'], $post['content'], $post['imatge'], $post['titol'], $post['dataCreacio'], $post['dataModif']);
    }

    public static function insertar($author, $content, $imatge, $titol, $dataCreacio, $dataModif) {
        
        //Obtenemos una instancia de la base de datos para poder tratar con ella
        $db = Db::getInstance();

        //Creamos la sentencia que queremos ejecutar (insertar)
        $req = $db->prepare("INSERT INTO posts (author, content, imatge, titol, dataCreacio, dataModif) VALUES (:author, :content, :imatge, :titol, :dataCreacio, :dataModif)");
        
        //Vinculamos las variables recibidas del formulario a un parametro de sustitucion (:var) para poder usarlo en la sentencia a ejecutar
        $req->bindParam(":author", $author);
        $req->bindParam(":content", $content);
        $req->bindParam(":imatge", $imatge);
        $req->bindParam(":titol", $titol);
        $req->bindParam(":dataCreacio", $dataCreacio);
        $req->bindParam(":dataModif", $dataModif);
        
        $req->execute();

        //Reenvíamos a la vista de insertar de nuevo
        header("Location: ?controller=posts&action=vistaInsert");
    }

}

?>
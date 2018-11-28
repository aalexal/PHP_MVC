<?php

class Post {

    // definimos tres atributos
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
            $list[] = new Post($post['id'], $post['author'], $post['content'], $post['imatge'], $post['titol'], $post['dataCreacio'], $post['dataModif'] );
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
    
    public static function insertar() {
        //Crear Insert

        //Reenvíamos a la vista de insertar de nuevo
        //header("Location: ?controller=posts&action=vistaInsert");
    }

}

?>
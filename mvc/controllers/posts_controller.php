<?php

class PostsController {

    public function index() {
        // Guardamos todos los posts en una variable
        $posts = Post::all();
        require_once('views/posts/index.php');
    }

    public function show() {
        // esperamos una url del tipo ?controller=posts&action=show&id=x
        // si no nos pasan el id redirecionamos hacia la pagina de error, el id 
        //tenemos que buscarlo en la BBDD
        if (!isset($_GET['id'])) {
            return call('pages', 'error');
        }
        // utilizamos el id para obtener el post correspondiente
        $post = Post::find($_GET['id']);
        require_once('views/posts/show.php');
    }
    
    public function vistaInsert() {
        //no modelo, solo vista. 
        //Mostramos el formulario de insercion
        require_once('views/posts/vistaInsert.php');      
    }
    
    public function insert() {
        
        //Recoger datos del formulario de inserción
        $aut = $_POST['autIns'];
        $cont = $_POST['postIns'];
        $img = $_POST['imgIns'];
        $tit = $_POST['titIns'];
        $crea = $_POST['dateCIns'];
        $modif = $_POST['dateMIns'];
        
        //Mandar estos datos al método insertar para poder insertarlos dentro de la base de datos
        $post = Post::insertar($aut, $cont, $img, $tit, $crea, $modif);
        //+ post insertado correctamente
    }
    
    public function vistaUpdate(){
        
        //Obtenemos los datos del post con el id indicado para rellenar el formulario con los datos correspondientes
        $post = Post::find($_GET['id']);
        
        //Llamamos al formulario
        require_once('views/posts/vistaUpdate.php');
    }
    
    public function update(){
        
        //Recoger datos del formulario de modificación
        $id = $_POST['idUpd'];
        $aut = $_POST['autUpd'];
        $cont = $_POST['postUpd'];
        $img = $_POST['imgUpd'];
        $tit = $_POST['titUpd'];
        $crea = $_POST['dateCUpd'];
        $modif = $_POST['dateMUpd'];
        
        //Mandar estos datos al método insertar para poder insertarlos dentro de la base de datos
        $post = Post::modificar($id, $aut, $cont, $img, $tit, $crea, $modif);
    }

}

?>

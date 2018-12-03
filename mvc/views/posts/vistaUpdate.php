<html>
    <head>
        <title>Modificar Post</title>
    </head>
    <body>
        <!--Formulario para modificar un post, se inicializan los campos con los datos existentes,
        al clicar el botón se enviaran los datos al action con método post para poder introducirlos.-->
        <form id="formUpdate" name="formUpdate" action="?controller=posts&action=update" method="post">
            <p><strong>Modificar Post:</strong></p>
            <label for="idUpd"><strong>Id:</strong></label>
            <input id="idUpd" name="idUpd" type="text" readonly="readonly" value="<?php echo $_GET['id']; ?>"/>
            <br><label for="autUpd">Autor:</label>
            <input id="autUpd" name="autUpd" type="text" value="<?php echo $post->author; ?>"/>
            <br><label for="postUpd">Post:</label>
            <input id="postUpd" name="postUpd" type="text" value="<?php echo $post->content; ?>"/>
            <br><label for="imgUpd">Imatge:</label>
            <input id="imgUpd" name="imgUpd" type="file" value="<?php echo $post->imatge; ?>"/>
            <br><label for="titUpd">Títol:</label>
            <input id="titUpd" name="titUpd" type="text" value="<?php echo $post->titol; ?>"/>
            <br><label for="dateCUpd">Data Creació:</label>
            <input id="dateCUpd" name="dateCUpd" type="date" value="<?php echo $post->dataCreacio; ?>"/>
            <br><label for="dateMUpd">Data Modificació:</label>
            <input id="dateMUpd" name="dateMUpd" type="date" value="<?php echo $post->dataModif; ?>"/>
            <br><input type="submit" name="submit" value="Modificar datos">
        </form>
    </body>
</html>

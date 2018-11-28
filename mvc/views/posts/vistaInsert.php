<html>
    <head>
        <title>title</title>
    </head>
    <body>
        <!--Formulario para insertar un post, al clicar el botón se enviaran todos los datos al action con método post-->
        <form id="formInsert" name="formInsert" action="?controller=posts&action=insert" method="post">
            <br><label for="autIns">Autor:</label>
            <input id="autIns" name="autIns" type="text"/>
            <br><label for="postIns">Post:</label>
            <input id="postIns" name="postIns" type="text"/>
            <br><label for="imgIns">Imatge:</label>
            <input id="imgIns" name="imgIns" type="text"/>
            <br><label for="titIns">Títol:</label>
            <input id="titIns" name="titIns" type="text"/>
            <br><label for="dateCIns">Data Creació:</label>
            <input id="dateCIns" name="dateCIns" type="date"/>
            <br><label for="dateMIns">Data Modificació:</label>
            <input id="dateMIns" name="dateMIns" type="date"/>
            <br><input type="submit" name="submit" value="Insertar datos">
        </form>
    </body>
</html>

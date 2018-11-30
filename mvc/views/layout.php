<DOCTYPE html>
    <html>
        <head>
        </head>
        <body>
            <!--Header de la página, siempre se mostrará-->
            <header>
                <!--Inicio del proyecto: index.php-->
                <a href='/2DAW_M07_UF2/mvc'>Home</a>
                <!--Vista index donde se muestran todos los posts-->
                <a href='?controller=posts&action=index'>Posts</a>
                <!--Vista insertar donde mostramos un formulario donde poder insertar un nuevo post-->
                <a href='?controller=posts&action=vistaInsert'>Insertar</a>
            </header>
            <?php require_once('routes.php'); ?>
            <!--Footer de la página, siempre se mostrará-->
            <footer>
                Copyright
            </footer>
        </body>
    </html>
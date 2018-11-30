<p><strong>Post #<?php echo $post->id; ?></strong></p>
<p><strong>Autor: </strong><?php echo $post->author; ?></p>
<p><strong>Post: </strong><?php echo $post->content; ?></p>
<p><strong>Imatge: </strong><?php echo $post->imatge; ?></p>
<p><strong>Titol: </strong><?php echo $post->titol; ?></p>
<p><strong>Data Creació: </strong><?php echo $post->dataCreacio; ?></p>
<p><strong>Data Modificació: </strong><?php echo $post->dataModif; ?></p>
<!--Afegeixo un href per tal de poder modificar el post que estem visualitzant-->
<a href='?controller=posts&action=vistaUpdate&id=<?php echo $post->id; ?>'><strong>Modificar Post</strong></a>
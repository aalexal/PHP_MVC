<p><strong>Listado de los posts:</strong></p>
<?php foreach($posts as $post) { ?>
    <p>
        <?php echo $post->author; ?>
        <a href='?controller=posts&action=show&id=<?php echo $post->id; ?>'>Ver 
contenido</a>
        <a href="?controller=posts&action=vistaUpdate&id=<?php echo $post->id; ?>">Modificar</a>
    </p>
<?php } ?>
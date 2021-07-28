<h3 class="h2"><?php comments_number( 'No hay comentarios.', 'Un comentario', '% comentarios' ); ?></h3>
<hr>
<?php comment_form(); ?>
<ol class="commentlist">
<?php
    $args = array(
        'walker'            => new My_Comment_Walker(),
        'max_depth'         => '3',
        'callback'          => null,
        'end-callback'      => null,
        'type'              => 'all',
        'page'              => '',
        'per_page'          => '',
        'reverse_top_level' => null,
        'reverse_children'  => '',
        'style'             => 'ol',
        'short_ping'        => false,   // @since 3.6
        'echo'              => true     // boolean, default is true
    );
    wp_list_comments( $args );
?>
</ol>

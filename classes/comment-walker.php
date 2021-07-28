<?php

class My_Comment_Walker extends Walker_Comment {
    protected function comment( $comment, $depth, $args ) { ?>
    <!-- Scrapywar's Function is Used -->
        <li class="depth-<?php print($depth);?> comment">
            <div class="comment__avatar <?php echo ($depth>1)? 'reply-'.$depth : ''; ?>">
                <?php 
                    if ( $args['avatar_size'] != 0 ) {
                        echo get_avatar( $comment, $args['avatar_size'] ); 
                    } 
                ?>
            </div>
            <div class="comment__content">

                <div class="comment__info">
                    <cite><?php 
                    printf( __( '%s' ), get_comment_author_link() );
                    ?></cite>
                    <div class="comment__meta">
                        <time class="comment__time"><?php echo(get_comment_date( 'j \d\e F, Y', $comment_ID=''));?></time>
                        <?php echo preg_replace('/comment-reply-link/','reply',
                        get_comment_reply_link( 
                            array_merge( 
                                $args, 
                                array( 
                                    'reply_text' => 'Responder', 
                                    'depth'     => $depth, 
                                    'max_depth' => $args['max_depth'] 
                                ) 
                            ) 
                        )); ?>
                        <?php echo(' | ');
                        edit_comment_link( __( 'Editar' ), '  ', '' ); ?>
                    </div>
                </div>

                <div class="comment__text">
                <?php 
                if ( $comment->comment_approved == '0' ) { ?>
                    <em><?php _e( 'Comentario en espera de aprobación' ); ?></em><br/><?php 
                } ?>
                <?php comment_text(); ?>
                </div>
            </div>
<?php } } ?>
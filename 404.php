<?php
get_header(); ?>
    <section class="s-content">
        <div class="row masonry-wrap">
            <div class="grid-sizer"></div>
                <h2><?php _e( '¿te perdiste?', 'blog-theme' ); ?></h2>
				<p><?php _e( 'Parece que lo que buscas no existe. ¿ya intentaste buscarlo?', 'blog-theme' ); ?></p>
				<?php get_search_form(); ?>
        </div> 
        </div> 
    </section>
<?php get_footer(); ?>
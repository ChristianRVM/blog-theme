<?php get_header(); ?>
    <section class="s-content s-content--narrow s-content--no-padding-bottom">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article class="row format-standard">
            <div class="s-content__header col-full">
                <h1 class="s-content__header-title"><?php the_title(); ?></h1>
                <ul class="s-content__header-meta">
                    <li class="date"><?php the_time('F j, Y'); ?></li>
                </ul>
            </div> <!-- end s-content__header -->
            <div class="col-full s-content__main">
                <!-- Inicia contenido post -->
                <?php the_content(); ?>
                <!-- Fin contenido post -->
            </div> <!-- end s-content__main -->
        </article>
        <?php endwhile; endif; ?>
    </section> <!-- s-content -->
 <?php get_footer(); ?>
<?php get_header(); ?>
    <!-- s-content
    ================================================== -->
    <section class="s-content s-content--narrow s-content--no-padding-bottom">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article class="row format-standard">
            <div class="s-content__header col-full">
                <h1 class="s-content__header-title"><?php the_title(); ?></h1>
                <ul class="s-content__header-meta">
                    <li class="date"><?php the_time('F j, Y'); ?></li>
                    <li class="cat">
                        <?php the_category(', '); ?>
                    </li>
                </ul>
            </div> <!-- end s-content__header -->

            <div class="s-content__media col-full">
                <div class="s-content__post-thumb">
                <?php
                    if ( has_post_thumbnail() ) {
                    the_post_thumbnail('post-thumbnails');
                    }
                ?>
                </div>
            </div> <!-- end s-content__media -->

            <div class="col-full s-content__main">
                <!-- Inicia contenido post -->
                <?php the_content(); ?>
                <!-- Fin contenido post -->
                <!-- Etiquetas -->
                <p class="s-content__tags">
                    <span>Etiquetas</span>

                    <span class="s-content__tag-list">
                        <?php the_tags('', ' ', ''); ?>
                    </span>
                </p> <!-- end s-content__tags -->

                <!-- Tarjeta del autor -->
                <div class="s-content__author">
                    <?php
                    echo(get_avatar( get_the_author_meta('user_email') , 90 ));?>
                    <div class="s-content__author-about">
                        <h4 class="s-content__author-name">
                        <?php the_author(); ?>
                        </h4>

                        <p>
                            <?php
                            $display_name = get_the_author_meta( 'description', $post->post_author );
                            echo($display_name);?>
                        </p>
                        <!--
                        <ul class="s-content__author-social">
                            <li><a href="#0">Facebook</a></li>
                            <li><a href="#0">Twitter</a></li>
                            <li><a href="#0">GooglePlus</a></li>
                            <li><a href="#0">Instagram</a></li>
                        </ul> -->
                    </div>
                </div> <!-- Fin autor card-->

            </div> <!-- end s-content__main -->

        </article>
        <?php endwhile; endif; ?>
        <!-- comments  Comentarios
        ================================================== -->     
        <div class="comments-wrap">
            <div id="comments" class="row">
                <div class="col-full">
                    <?php 
                    if ( comments_open() || get_comments_number() ) :
                        comments_template();
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </section>
 <?php get_footer(); ?>
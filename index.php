<?php get_header();?>


    <!-- s-content
    ================================================== -->
    <section class="s-content">
        <div class="row masonry-wrap">
            <div class="masonry">
                <div class="grid-sizer"></div>
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <!-- Articulo -->
                <article class="masonry__brick entry format-standard" data-aos="fade-up">

                    <div class="entry__thumb">
                        <a href="<?php the_permalink(); ?>" class="entry__thumb-link">
                            <?php
                                if ( has_post_thumbnail() ) {
                                    the_post_thumbnail('post-thumbnails');
                                }else{?>
                                    <img src="<?php echo(get_template_directory_uri()."/img/no-thumbnail.png"); ?>"
                                    alt="<?php the_title() ?>">
                                <?php }
                            ?>
                        </a>
                    </div>

                    <div class="entry__text">
                        <div class="entry__header">

                            <div class="entry__date">
                                <a href="<?php the_permalink(); ?>"><?php the_time('F j, Y'); ?></a>
                            </div>
                            <h1 class="entry__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h1>

                        </div>
                        <div class="entry__excerpt">
                            <?php the_excerpt(); ?>
                        </div>
                        <div class="entry__meta">
                            <span class="entry__meta-links">
                                <?php the_category(', '); ?>
                            </span>
                        </div>
                    </div>

                </article> <!-- end article -->
                <?php endwhile; endif; ?>
            </div> <!-- end masonry -->
        </div> <!-- end masonry-wrap -->

        <!-- Paginación -->

        <div class="row">
            <div class="col-full">
                <?php get_template_part('template-parts/content', 'pagination'); ?>
                <!--<nav class="pgn">
                    <ul>
                        <li><a class="pgn__prev" href="#0">Prev</a></li>
                        <li><a class="pgn__num" href="#0">1</a></li>
                        <li><span class="pgn__num current">2</span></li>
                        <li><a class="pgn__num" href="#0">3</a></li>
                        <li><a class="pgn__num" href="#0">4</a></li>
                        <li><a class="pgn__num" href="#0">5</a></li>
                        <li><span class="pgn__num dots">…</span></li>
                        <li><a class="pgn__num" href="#0">8</a></li>
                        <li><a class="pgn__next" href="#0">Next</a></li>
                    </ul>
                </nav>-->
            </div>
        </div>
        <!-- Fin de paginación -->

    </section> <!-- s-content CONTENIDO -->

    <?php get_footer(); ?>
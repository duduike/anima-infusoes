<?php

$args = array(
    'post_type' => 'post',
    'orderby'    => 'Date',
    'post_status' => 'publish',
    'order'    => 'DESC',
    'category_name' => 'Blog',
    'post__not_in' => array($post->ID),
    'posts_per_page' => -1 // this will retrive all the post that is published 
);
$result = new WP_Query($args);

get_header();
?>

<div class="container mt-5">
    <div class="row">
        <main class="col-12 d-flex flex-column flex-lg-row main-single">
            <div class="col-lg-9 col-12">
                <?php
                // Start the Loop.
                while (have_posts()) : the_post();
                ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <div class="d-flex flex-column align-items-center">

                            <header class="entry-header thumb-single">
                                <img title="image title" alt="thumb image" class="wp-post-image" src="<?= wp_get_attachment_url(get_post_thumbnail_id()); ?>" style="width:100%; height:auto;">
                            </header><!-- .entry-header -->

                            <div class="entry-content">
                                <h4 class="text-center mt-3 mb-3"><?php echo get_the_title(); ?></h4>
                                </span>
                                <div class="conteudoSingle">
                                    <?php echo get_field('conteudo', get_the_ID()) ?>
                                </div>
                            </div><!-- .entry-content -->
                        </div>


                    </article><!-- #post-## -->


                <?php

                // End the loop.
                endwhile;

                ?>
            </div>
            <div class="col-lg-3 col-12">
                <h4 class="text-uppercase">Leia também:</h4>

                <div class="column-leiaMais d-flex flex-column">
                    <?php if ($result->have_posts()) : ?>
                        <?php while ($result->have_posts()) : $result->the_post(); ?>
                            <a href="<?php echo esc_url(get_permalink()) ?>">
                                <div class="bodyLeiaMais d-flex flex-column">
                                    <img title="image title" alt="thumb image" class="wp-post-image" src="<?= wp_get_attachment_url(get_post_thumbnail_id()); ?>" style="width:100%; height:auto;">
                                    <span class="title"><?php the_title(); ?></span>
                                </div>
                            </a>

                        <?php endwhile; ?>
                    <?php endif;
                    wp_reset_postdata(); ?>
                </div>
            </div>



        </main>
    </div>
</div>

<?php
get_footer();
?>
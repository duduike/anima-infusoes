<?php get_header(); ?>

<div class="container">
    <div class="row">
        <main class="col-12">
            <?php if (have_posts()) : ?>

                <?php
                // Start the Loop.
                while (have_posts()) : the_post(); ?>
                    <article id="post-<?php get_the_ID(); ?>" <?php post_class(); ?>>

                        <div class="post-body">
                            <div style="background-image: url('<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'thumbnail'); ?>');" class="img-post"></div>
                            <div class="content-post">
                                <h4><?php echo get_the_title(); ?></h4>
                                <div class="textContent">
                                    <p><?php echo get_field('descricao', get_the_ID()) ?></p>
                                </div>

                                <a class="link-leiamais" href="<?php echo esc_url(get_permalink()) ?>">
                                    leia mais
                                </a>
                            </div>
                        </div>

                    </article>


                <?php endwhile; ?>

            <?php
                // Previous/next page navigation.
                the_posts_pagination(array(
                    'prev_text'          => __('Anterior'),
                    'next_text'          => __('Próximo'),
                    'screen_reader_text' => '&nbsp;'

                ));

            // If no content, include the "No posts found" template.
            else :
                get_template_part('content', 'none');

            endif;
            ?>

        </main>
    </div>
</div>

<?php get_footer(); ?>
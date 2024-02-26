<?php

/****
 * Template name: Blog
 ***/

$args = array(
    'post_type' => 'post',
    'orderby'    => 'Date',
    'post_status' => 'publish',
    'order'    => 'DESC',
    'category_name' => 'Blog',
    'posts_per_page' => -1 // this will retrive all the post that is published 
);
$result = new WP_Query($args);

$titulo = get_field('titulo');
$descricao = get_field('descricao');

get_header();


?>

<style>
.post-body .content-post h4 {
	font-size: 24px;
	text-transform: uppercase;
}
</style>

<div class="container">
    <div class="row">
        <main class="col-12 d-flex flex-column align-items-center">
            <div class="titles-category d-flex flex-column flex-lg-row my-5">
                <div class="col-12 col-lg-5 title-single">
                    <h4><?php echo $titulo ?></h4>
                </div>
                <div class="col-12 col-lg-7 description-single">
                    <p><?php echo $descricao ?></p>
                </div>
            </div>
            
            <?php if ($result->have_posts()) : ?>

                <?php
                // Start the Loop.
                while ($result->have_posts()) : $result->the_post(); ?>
                    <article id="post-<?php get_the_ID(); ?>" <?php post_class(); ?> style="width: 100%; display: flex; justify-content: center; margin-bottom: 40px;">

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
            wp_reset_postdata();
            ?>

        </main>
    </div>
</div>
<?php
get_footer();
?>
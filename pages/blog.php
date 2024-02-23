<?php

/****
 * Template name: Blog
 ***/

get_header();

$title = get_field('titulo');
$text_intro = get_field('text_intro');
$posts = get_field('posts_de_blog');
$img_blog = get_field('img_blog');
$title_post = get_field('title_post');
$text_post = get_field('text_post');

?>

<main class="container-fluid">

    <div class="blog__intro">
        <div class="column-heading col-5">
            <h2 class="blog__intro-heading"><?php echo ($title); ?></h2>
        </div>
        <div class="blog__intro-description col-7">
            <p><?php echo ($text_intro); ?> </p>
        </div>
    </div>


    <?php foreach ($posts as $post) { ?>
        <article class="post">
            <div style="background-image: url('<?php echo $post['img_blog']; ?>')" class="img-post"></div>
            <div class="content-post">
                <h4><?php echo $post['title_post']; ?></h4>
                <p>
                    <?php echo $post['text_post']; ?>
                </p>
                <a class="link-leiamais" href="">
                    <?php echo ('leia mais'); ?>
                </a>
            </div>
        </article>
    <?php } ?>

</main>
<?php
get_footer();
?>
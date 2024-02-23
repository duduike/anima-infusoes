<?php

/****
 * Template name: content-blog
 ***/

get_header();

$hero_blog = get_field('hero_blog');
$titulo_blog = get_field('titulo_blog');
$conteudo_blog = get_field('conteudo_blog');

?>

<div class="container">
    <article class="content-blog">
        <div style="background-image: url('<?php echo ($hero_blog); ?>') " class="hero"></div>
        <h2><?php echo ($titulo_blog); ?></h2>
        <p><?php echo ($conteudo_blog); ?> </p>
    </article>
</div>

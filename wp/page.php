<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package company
 */

get_header();
?>
<main class="l-main--top">
    <?php if(have_posts()): while(have_posts()):the_post(); ?>

    <?php the_content(); ?>

    <?php endwhile; else: ?>

    <p class="c-text">記事が見つかりませんでした。</p>

    <?php endif; ?>
</main>
<?php
get_footer();
?>

<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package company
 */

get_header();
?>
<main class="l-main">
    <section class="l-fv p-fv">
        <div class="p-fv__img">
            <img src="<?php echo get_template_directory_uri(); ?>/images/pc_fv_right@2x.png" alt="main photo">
        </div>
        <div class="p-fv__text">
            <h1 class="p-fv__ttl">
                <span class="p-fv__ttl--bg">BAI GE</span>
                ハク　カ
            </h1>
            <p class="p-fv__sub">Dubbing/Video/Design/Coding…</p>
            <a href="<?php echo home_url();?>/about/" class="p-fv__btn">See More</a>
        </div>
    </section>
    <section class="l-who p-who">
        <div class="l-inner">
            <h2 class="p-who__ttl">
                <span class="p-who__ttl--bg">WHO AM I</span>
                自己紹介
            </h2>
            <div class="p-who__content">
                <img src="<?php echo get_template_directory_uri(); ?>/images/pc_who_letter@2x.png" alt="" class="tb-none">
                <img src="<?php echo get_template_directory_uri(); ?>/images/sp_who_letter@2x.png" alt="" class="pc-none">
            </div>
        </div>
    </section>
    <section class="l-work p-work">
        <div class="l-inner">
            <h2 class="p-work__ttl">
                <span class="p-work__ttl--bg">THE WORK</span>
                作品
            </h2>
            <ul class="p-work__content">
                <?php
			$paged = get_query_var('paged') ? get_query_var('paged') : 1 ;
			$args = array(
			'post-type' => 'post',
			'posts_per_page' => 2,
			'paged' => $paged
			);
			$my_query = new WP_Query($args);

			if( $my_query -> have_posts() ) :
			while($my_query -> have_posts()) : $my_query -> the_post();
		?>
                <li class="p-work__content__item">
                    <a href="<?php the_permalink(); ?>">
                        <p class="p-work__content__item__img" id="p-thumb">
                            <?php the_post_thumbnail('full'); ?>
                        </p>
                        <div class="p-work__content__item__des">
                            <p class="p-work__content__item__des__category">
                                <?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?>
                            </p>
                            <p class="p-work__content__item__des__ttl">
                                <?php the_title(); ?>
                            </p>
                        </div>
                    </a>
                </li>
                <?php endwhile; else : ?>
                <!-- ▼ 記事がないときの処理 -->
                <p class="c-text">
                    記事が見つかりませんでした。
                </p>

                <?php endif; ?>

                <?php wp_reset_postdata(); ?>
            </ul>
            <p class="p-work__more"><a href="<?php echo home_url();?>/portfolio/">&gt; See More</a></p>
        </div>
    </section>
</main>

<?php
get_footer();
?>

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
    <section class="c-topttl">
        <p class="c-topttl__img">
            <img src="<?php echo get_template_directory_uri(); ?>/images/pc_portfolio_bg@2x.jpg" alt="" class="sp-hide">
            <img src="<?php echo get_template_directory_uri(); ?>/images/sp_portfolio_bg@2x.jpg" alt="" class="pc-hide">
        </p>
        <h1 class="l-inner c-topttl__ttl">PORTFOLIO</h1>
    </section>
    <section class="l-inner">

        <div class="l-bread c-bread u-mt20">
            <ul class="l-bread__inner c-bread__inner">
                <?php if(function_exists('bcn_display'))
			{
				bcn_display_list();
			}?>
            </ul>
        </div>
        <ul class="p-category">
            <?php
	$args = array(
		'orderby' => 'name'
	);
	$categories = get_categories( $args );
	foreach ( $categories as $category ) {
		$cat_link = get_category_link($category->cat_ID);
		echo '<li class="p-category__item"><a href="' . $cat_link . '">' . $category->name . '</a></li>';
	}
?>
        </ul>
        <ul class="p-contents">
            <?php
				$paged = get_query_var('paged') ? get_query_var('paged') : 1 ;
				$args = array(
				'post-type' => 'post',
				'posts_per_page' => 10,
				'paged' => $paged
				);
				$my_query = new WP_Query($args);

				if( $my_query -> have_posts() ) :
				while($my_query -> have_posts()) : $my_query -> the_post();
			?>
            <li class="p-contents__item">
                <a href="<?php the_permalink(); ?>">
                    <p class="p-contents__item__img" id="p-thumb">
                        <?php the_post_thumbnail(); ?>
                    </p>
                    <span class="p-contents__item__category">
                        <?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?></span>
                    <p class="p-contents__item__ttl">
                        <?php
						if(mb_strlen($post->post_title, 'UTF-8')>40){
							$title= mb_substr($post->post_title, 0, 40, 'UTF-8');
							echo $title.'…';
						}else{
							echo $post->post_title;
						}
					?>
                    </p>
                </a>
            </li>
            <?php endwhile; else : ?>
            <!-- ▼ 記事がないときの処理 -->
            <p class="c-text">
                記事が見つかりませんでした。
            </p>

            <?php endif; ?>
        </ul>
        <ul class="p-pages">
            <?php
				if ($my_query->max_num_pages > 1) ;?>
            <div class="p-newsa__page">
                <?php
				if ($my_query->max_num_pages > 1) {
				echo paginate_links(array(
				'base' => get_pagenum_link(1) . '%_%',
				'format' => '/page/%#%/',
				'current' => max(1, $paged),
				'total' => $my_query->max_num_pages
				));
				}
			?>
        </ul>
        <?php wp_reset_postdata(); ?>
    </section>

</main>

<?php
get_footer();
?>

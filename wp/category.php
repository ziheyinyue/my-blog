<!-- カテゴリ -->
<?php get_header();?>
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
        <!-- パンくずここまで -->
        <?php $postname = get_post_type($post);//投稿タイプ取得 ?>

        <ul class="p-category">
            <?php if($postname!='post') : ?>
            <!--カスタム投稿タイプの時-->
            <?php
                        $terms = get_terms('tax_special');
                        foreach ( $terms as $term ) {
                            echo '<option value="'.get_term_link($term).'">'.$term->name.'</option>';
                        }
                        ?>
            <?php else: ?>
            <!--postのとき-->
            <?php $categories = get_categories(); ?>
            <?php foreach($categories as $category) : ?>
            <li class="p-category__item"><a href="<?php echo get_category_link($category->term_id); ?>">
                    <?php echo $category->name; ?></a></li>

            <?php endforeach; ?>
            <?php endif; ?>
        </ul>
        <ul class="p-contents">
            <!-- 繰り返しここから -->
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <li class="p-contents__item">
                <a href="<?php the_permalink(); ?>">
                    <p class="p-contents__item__img">
                        <?php if(has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail(); ?>
                        <?php else : ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/dummy-archive-thumb.jpg">
                        <?php endif ?>
                    </p>
                    <span class="p-contents__item__category">
                        <?php
                            $category = get_the_category();
                            $category = $category[0];
                            echo get_cat_name($category->term_id);
                            ?></span>
                    <p class="p-contents__item__ttl">
                        <?php echo the_title(); ?>
                    </p>
                </a>
            </li>

            <?php endwhile; else : ?>
            記事が見つかりませんでした。
            <?php endif; ?>
            <!-- 繰り返しここまで -->
        </ul>
        <?php
         if ($my_query->max_num_pages > 1) ;?>
        <ul class="p-pages">
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
    </section>
</main>
<?php
get_footer();
?>

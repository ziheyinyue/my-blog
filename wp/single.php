<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package company
 */
get_header();
?>
<main class="l-main--top">
    <section class="l-inner">
        <div class="l-bread c-bread u-mb20">
            <ul class="c-bread__inner u-mt50">
                <?php if(function_exists('bcn_display'))
			{
				bcn_display_list();
			}?>
            </ul>
        </div>

        <div class="l-underpage__inner l-newsa__wrap p-newsd">
            <?php if(have_posts()): while(have_posts()):the_post(); ?>

            <h1 class="c-title-underbar u-mb20">
                <?php the_title(); ?>
            </h1>
            <div class="c-text u-mb20">

                <?php the_content(); ?>
            </div>
            <?php endwhile; else: ?>
            <!-- ▼ 記事がないときの処理 -->
            <p class="c-text u-mb20">記事が見つかりませんでした。</p>
            <?php endif; ?>

            <p class="c-color-button c-color-button--center u-mb30">
                <a href="<?php echo home_url();?>/portfolio/" class="p-newsd__button">記事一覧</a>
            </p>

        </div>

    </section>
</main>
<?php
get_footer();
?>

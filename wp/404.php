<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package company
 */

get_header();
?>
<main class="l-main--top">
    <section class="l-inner">
        <div class="l-bread c-bread u-mt20 u-mb30">
            <ul class="l-bread__inner c-bread__inner">
                <?php if(function_exists('bcn_display'))
			{
				bcn_display_list();
			}?>
            </ul>
        </div>
        <p class="c-text">あなたがアクセスしようとしたページは削除されたかURLが変更されているため、見つけることができません。</p>
    </section>
</main>

<?php
get_footer();
?>

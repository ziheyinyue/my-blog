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
    <section class="l-inner">
        <div class="l-bread c-bread u-mb30 u-mt20">
            <ul class="l-bread__inner c-bread__inner">
                <?php if(function_exists('bcn_display'))
			{
				bcn_display_list();
			}?>
            </ul>
        </div>

        <div class="c-2column u-mb40">
            <div class="c-2column__item">
                <p class="c-2column__item__img"><img src="http://msbaige.sakura.ne.jp/blog/wp-content/uploads/2019/02/DSC00852_mh1524407668538.jpg" alt="me"></p>

            </div>
            <div class="c-2column__item">
                <div class="c-2column__item__text">
                    <h5 class="c-title-small u-mb10">Yes, It's me!</h5>
                    <p class="c-text u-mb10">私の個人サイトへようこそ。</p>
                    <p class="c-text u-mb10">はくかと申します。趣味はアフレコと宝塚歌劇観劇です。ちなみに、一番好きなスターさんは元雪組トップスターの早霧せいなさんです。</p>
                    <p class="c-text u-mb10">なぜこのサイトを作るかというと、自分の作品をまとめて、さらに技術を磨くつもりです。はい！！日々精進！！</p>

                </div>
            </div>
        </div>
    </section>
</main>
<?php
get_footer();
?>

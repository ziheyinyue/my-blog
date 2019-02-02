<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package company
 */

?>

<footer class="l-footer p-footer">
    <div class="l-inner">
        <div class="p-footer__top">
            <a class="p-footer__top__item" href="https://www.weibo.com/ziheyinyue">
                <p class="p-footer__top__item__icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/footer_weibo@2x.png" alt="">
                </p>
                <p class="p-footer__top__item__text">weibo</p>
            </a>
            <a class="p-footer__top__item" href="http://space.bilibili.com/612095">
                <p class="p-footer__top__item__icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/footer_bilibili@2x.png" alt="">
                </p>
                <p class="p-footer__top__item__text">bilibili</p>
            </a>
            <a class="p-footer__top__item p-footer__weixin" href="<?php echo home_url();?>/contact/">
                <p class="p-footer__top__item__icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/footer_weixin@2x.png" alt="">
                </p>
                <p class="p-footer__top__item__text">weixin</p>
                <p class="p-footer__weixin__qr">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/weixin_qr.png" alt="">
                </p>
            </a>
        </div>
        <p class="p-footer__bottom">&copy; Copyright 2019 BAI GE</p>
    </div>
    <a href="#pagetop" class="c-totop">
        <span class="c-totop__text">TOP</span>
    </a>
</footer>
<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/common.js"></script>

<?php wp_footer(); ?>
</body>

</html>

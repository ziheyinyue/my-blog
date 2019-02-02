<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 *
 * @package company
 */

?>

<section class="no-results not-found">
	<header class="page-header">
		<h1 class="page-title"><?php esc_html_e( 'Nothing Found', 'company' ); ?></h1>
	</header><!-- .page-header -->

	<div class="page-content">
		<?php
		if ( is_home() && current_user_can( 'publish_posts' ) ) :

			printf(
				'<p>' . wp_kses(
					/* translators: 1: link to WP admin new post page. */
					__( 'あなたの最初の投稿を公開する準備ができましたか？ <a href="%1$s">ここから始めよう</a>.', 'company' ),
					array(
						'a' => array(
							'href' => array(),
						),
					)
				) . '</p>',
				esc_url( admin_url( 'post-new.php' ) )
			);

		elseif ( is_search() ) :
			?>

			<p><?php esc_html_e( '申し訳ありませんが、検索条件に一致するものはありません。別のキーワードでもう一度お試しください。', 'company' ); ?></p>
			<?php
			get_search_form();

		else :
			?>

			<p><?php esc_html_e( 'あなたが探しているものを見つけることはできないようです。多分検索が助けることができます。', 'company' ); ?></p>
			<?php
			get_search_form();

		endif;
		?>
	</div><!-- .page-content -->
</section><!-- .no-results -->

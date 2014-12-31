<?php
/**
 * The template part for displaying a message that posts cannot be found.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 */
?>

<article id="post-0" class="post no-results not-found">
	<header class="entry-header">
		<h1 class="entry-title"><?php _e( '没有找到！！！', 'dw_focus' ); ?></h1>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<p><?php printf( __( '准备发布您的第一篇文章？ <a href="%1$s">点击这里开始</a>。', 'dw_focus' ), admin_url( 'post-new.php' ) ); ?></p>

		<?php elseif ( is_search() ) : ?>

			<p><?php _e( '对不起，没有符合您关键词的搜索结果，请换其它关键词再试一次。', 'dw_focus' ); ?></p>
			<?php get_search_form(); ?>

		<?php else : ?>

			<p><?php _e( '看来找不到你要找的内容。也许搜索可以提供帮助。', 'dw_focus' ); ?></p>

		<?php endif; ?>
	</div><!-- .entry-content -->
</article><!-- #post-0 .post .no-results .not-found -->

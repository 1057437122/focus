<?php
/*
 * The template for displaying content on the search page.
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
   <div id="site1-tools"><div class="row"><div class="span9"><?php dw_breadcrumb(); ?></div></div></div>
		<h1 class="entry-title"><?php the_title(); ?></h1>
		
		<div class="entry-meta">
			<?php dw_focus_posted_on(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->
	<?php if( has_post_thumbnail() && ! has_post_format('video') && ! has_post_format('audio') && ! has_post_format('gallery') ) : ?>
	<!--	<div class="entry-thumbnail">
			<?php the_post_thumbnail(''); ?>
		</div>   -->
	<?php endif; ?>

	<div class="entry-content">
		<?php the_content(); ?>
<br />
	<?php
                /* translators: used between list items, there is a space after the comma */
                $tags_list = get_the_tag_list( '', __( '&nbsp;|&nbsp;', 'dw_focus' ) );
                if ( $tags_list ) :
            ?>
            <div class="tag-action">
                <span class="title-action"><?php _e('标签：','dw_focus') ?></span>
                <span class="tags-links">
                    <?php printf( __( '%1$s', 'dw_focus' ), $tags_list ); ?>
                </span>
            </div>
	 <?php endif; // End if $tags_list ?>
<span style="font-size: 15px;color: #222;font-weight:600;font-family: Georgia,Microsoft Yahei,SimSun,Helvetica,Verdana,Arial,sans-serif;">将此文分享到：</span>
<!-- JiaThis Button BEGIN -->
<div class="jiathis_style_32x32">
	<a class="jiathis_button_qzone"></a>
	<a class="jiathis_button_tsina"></a>
	<a class="jiathis_button_tqq"></a>
	<a class="jiathis_button_weixin"></a>
	<a class="jiathis_button_tsohu"></a>
	<a class="jiathis_button_ishare"></a>
	<a href="http://www.jiathis.com/share" class="jiathis jiathis_txt jtico jtico_jiathis" target="_blank"></a>
</div>
<script type="text/javascript" src="http://v3.jiathis.com/code_mini/jia.js?uid=1394353843953903" charset="utf-8"></script>
<!-- JiaThis Button END -->
		<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( '页面：', 'dw_focus' ), 'after' => '</div>' ) ); ?>

<br /><br />
<pre>转载请注明来自<a href='/'><?php bloginfo( 'name' ); ?></a>，本文地址：<a href='<?php the_permalink(); ?>' title='<?php the_title(); ?>'><?php the_permalink(); ?></a><br />除非注明，<?php bloginfo( 'name' ); ?>文章均为原创，转载请注明出处和链接！</pre>
	</div><!-- .entry-content -->

	

	<footer class="entry-meta entry-meta-bottom">
		<!-- <?php if ( get_the_author_meta( 'description' ) ) : ?> -->
		<div class="author-info">

<script type="text/javascript">
/*728*90，创建于2011-11-2*/
var cpro_id = "u664263";
</script>
<script src="http://cpro.baidustatic.com/cpro/ui/c.js" type="text/javascript"></script>

			<!-- <div class="author-avatar">
				<?php echo get_avatar( get_the_author_meta( 'user_email' ), 90 ); ?>
			</div>  --> <!-- .author-avatar -->
			<!-- <div class="author-description">
                <h2><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author"><?php echo get_the_author(); ?></a></h2>

                <p class="description"><?php the_author_meta( 'description' ); ?></p>
            </div>  -->  <!-- .author-description -->
		</div><!-- .author-info -->
		<?php endif; ?>
	</footer>
</article><!-- #post-<?php the_ID(); ?> -->
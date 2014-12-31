<?php
/**
 * Template Name: 网站地图
 */

get_header(); ?>
<style type="text/css">
    /*sitemap */
	#sitemap {overflow:hidden;padding:10px 0 0 15px;}
	.sitemap-col {float: left;margin: 0 2% 10px 0;	width: 23%;}
	#sitemap .last {margin-right: 0px; }
		.sitemap-col h2 {color: #111;font-size: 20px;border-bottom: 1px solid #e9e9e9;padding-bottom: 10px;margin-bottom: -3px;}
		.sitemap-col ul {padding-left: 0px;margin-left: 0;}
			.sitemap-col ul li a {padding: 4px 0px 4px ;display:inline-block;	}   
    </style>

<div id="primary" class="site-content span12">
    <?php while ( have_posts() ) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="entry-header">
            <h1 class="entry-title" style="text-align:center;margin:0 auto;font-size:35px;letter-spacing:5px;"><?php the_title(); ?></h1>
        </header><!-- .entry-header -->
        <div class="entry-content">
            <?php the_content(); ?>
            <?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( '页面：', 'dw_focus' ), 'after' => '</div>' ) ); ?>
        </div><!-- .entry-content -->
				<article class="post-listing post">
				<div class="post-inner">				
				<div class="clear"></div>
				<div class="entry">
					<div id="sitemap">
						<div class="sitemap-col">
							<h2><?php _e('页面','tie'); ?></h2>
							<ul id="sitemap-pages"><?php wp_list_pages('title_li='); ?></ul>
						</div> <!-- end .sitemap-col -->
							
						<div class="sitemap-col">
							<h2><?php _e('分类','tie'); ?></h2>
							<ul id="sitemap-categories"><?php wp_list_categories('title_li='); ?></ul>
						</div> <!-- end .sitemap-col -->
							
						<div class="sitemap-col">
							<h2><?php _e('标签','tie'); ?></h2>
							<ul id="sitemap-tags">
								<?php $tags = get_tags();
								if ($tags) {
									foreach ($tags as $tag) {
										echo '<li><a href="' . get_tag_link( $tag->term_id ) . '">' . $tag->name . '</a></li> ';
									}
								} ?>
							</ul>
						</div> <!-- end .sitemap-col -->
														
						<div class="sitemap-col<?php echo ' last'; ?>">
							<h2><?php _e('作者列表','tie'); ?></h2>
							<ul id="sitemap-authors" ><?php wp_list_authors('optioncount=1&exclude_admin=0'); ?></ul>
						</div> <!-- end .sitemap-col -->
					
					</div> <!-- end #sitemap -->
						
					<?php edit_post_link( __( '编辑', 'tie' ), '<span class="edit-link">', '</span>' ); ?>
				</div><!-- .entry /-->	
			
				</div><!-- .post-inner -->
				</article><!-- .post-listing -->
    </article><!-- #post-<?php the_ID(); ?> -->

    <?php endwhile; // end of the loop. ?>
    
</div>
<?php get_footer(); ?>
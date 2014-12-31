<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 */
?>
            </div>
         </div>
     </div>

    <?php if( is_home() ) : ?>
        <!-- Bottom sidebar position -->
        <?php if( is_active_sidebar( 'dw_focus_bottom' ) ) : ?>
        <div id="bottom">
            <div class="container">
            <?php dynamic_sidebar('dw_focus_bottom'); ?>
            </div>
        </div>
        <?php endif; ?>
    <?php endif; ?>

    <!-- Footer -->
    <footer id="colophon" class="site-footer dark" role="contentinfo">
        <div class="container">

            <div id="site-tools">
                <div class="row">
                    <div class="span9"><?php dw_breadcrumb(); ?></div>
                    <?php if( is_active_sidebar( 'dw_focus_footer_1' ) 
                        || is_active_sidebar( 'dw_focus_footer_2' ) 
                        || is_active_sidebar( 'dw_focus_footer_3' )  
                        || is_active_sidebar( 'dw_focus_footer_4' )  ) { ?>
                    <div class="span3"><a href="#" class="footer-toggle pull-right">网站索引</a></div>
                    <?php } ?>
                </div>
            </div>

            <?php if( is_active_sidebar( 'dw_focus_footer_1' ) 
                        || is_active_sidebar( 'dw_focus_footer_2' ) 
                        || is_active_sidebar( 'dw_focus_footer_3' )  
                        || is_active_sidebar( 'dw_focus_footer_4' )  ) { ?>
            <div id="sidebar-footer" class="row-fluid">
                <?php if( is_active_sidebar('dw_focus_footer_1') ) { ?>
                <div id="sidebar-footer-1" class="span3">
                <?php dynamic_sidebar('dw_focus_footer_1'); ?>
                </div>
                <?php } ?>
                <?php if( is_active_sidebar('dw_focus_footer_2') ) { ?>
                <div id="sidebar-footer-2" class="span3">
                <?php dynamic_sidebar('dw_focus_footer_2'); ?>
                </div>
                <?php } ?>
                <?php if( is_active_sidebar('dw_focus_footer_3') ) { ?>
                <div id="sidebar-footer-3" class="span3">
                <?php dynamic_sidebar('dw_focus_footer_3'); ?>
                </div>
                <?php } ?>
                <?php if( is_active_sidebar('dw_focus_footer_4') ) { ?>
                <div id="sidebar-footer-4" class="span3">
                <?php dynamic_sidebar('dw_focus_footer_4'); ?>
                </div>
                <?php } ?>
            </div>

            <?php } ?>

            <div class="footer-shadown"></div>
        </div>

        <div id="site-info" class="container">
            <div class="clearfix">
                <div class="copyright">
                    <p>Copyright &copy; 2011-2014, <a href="http://tech.leepine.com" title="PLweb">小技术时代</a>  All Rights Reserved | <script src="http://s84.cnzz.com/stat.php?id=3484930&web_id=3484930" language="JavaScript"></script> | <a href="http://tech.leepine.com" title="小技术时代" target="_blank">网站地图(待制作)</a></p>
                    <p>
<script type="text/javascript">
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3Fa49bae91e40c7292419f6794e9a14e83' type='text/javascript'%3E%3C/script%3E"));
</script>
</p>
                </div>
                <div class="logo">
                    <a class="small-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
                </div>
            </div>
        </div>
    </footer><!-- #colophon .site-footer -->
<a class="scroll-top" href="#masthead" title="<?php _e( '返回顶部', 'dw-focus' ); ?>"><?php _e( '顶部', 'dw-focus' ); ?></a>


<?php wp_footer(); ?>


<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"16"},"slide":{"type":"slide","bdImg":"5","bdPos":"right","bdTop":"100"}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>


</body>
</html>
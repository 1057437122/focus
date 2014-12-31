<?php
/**
 * Register widgetized area and update sidebar with default widgets
 *
 * @package DW Focus
 */
function dw_focus_widgets_init() {
    
    
    register_sidebar( array(
        'name' => __( '主要边栏', 'dw_focus' ),
        'id' => 'dw_focus_sidebar',
        'description'   =>  __('用于在主要边栏中显示小工具','dw_focus'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
    register_sidebar( array(
        'name' => __( '分类边栏', 'dw_focus' ),
        'id' => 'dw_focus_category_sidebar',
        'description'   =>  __('用于在分类边栏中显示小工具','dw_focus'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
    register_sidebar( array(
        'name' => __( '文章边栏', 'dw_focus' ),
        'id' => 'dw_focus_single_post_sidebar',
        'description'   =>  __('用于在文章边栏中显示小工具','dw_focus'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
    register_sidebar( array(
        'name' => __( '主页内容构建', 'dw_focus' ),
        'id' => 'dw_focus_home',
        'description'   =>  __('用于在主页中显示小工具，构建主页内容','dw_focus'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h3 class="category-title">',
        'after_title' => '</h3>',
    ) );
    register_sidebar( array(
        'name' => __( '博客边栏', 'dw_focus' ),
        'id' => 'dw_focus_blog_sidebar',
        'description'   =>  __('用于在博客边栏中显示小工具','dw_focus'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
    register_sidebar( array(
        'name' => __( '头部', 'dw_focus' ),
        'id' => 'dw_focus_header',
        'description'   =>  __('用于在头部中显示小工具', 'dw_focus'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
    register_sidebar( array(
        'name' => __( '导航下方滚动列表', 'dw_focus' ),
        'id' => 'dw_focus_under_navigation',
        'description'   =>  __('用于在导航下方滚动列表中显示小工具', 'dw_focus'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
    register_sidebar( array(
        'name' => __( '首页底部区域', 'dw_focus' ),
        'id' => 'dw_focus_bottom',
        'description'   =>  __('用于在首页底部区域中显示小工具', 'dw_focus'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
    register_sidebar( array(
        'name' => __( '页脚边栏 1', 'dw_focus' ),
        'id' => 'dw_focus_footer_1',
        'description'   =>  __('用于在页脚边栏1中显示小工具', 'dw_focus'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
    register_sidebar( array(
        'name' => __( '页脚边栏 2', 'dw_focus' ),
        'id' => 'dw_focus_footer_2',
        'description'   =>  __('用于在页脚边栏2中显示小工具', 'dw_focus'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
    register_sidebar( array(
        'name' => __( '页脚边栏 3', 'dw_focus' ),
        'id' => 'dw_focus_footer_3',
        'description'   =>  __('用于在页脚边栏3中显示小工具', 'dw_focus'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
    register_sidebar( array(
        'name' => __( '页脚边栏 4', 'dw_focus' ),
        'id' => 'dw_focus_footer_4',
        'description'   =>  __('用于在页脚边栏4中显示小工具', 'dw_focus'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );

    
}
add_action( 'widgets_init', 'dw_focus_widgets_init' );


/**
 * Create HTML dropdown list of Categories.
 *
 * @package WordPress
 * @since 2.1.0
 * @uses Walker
 */
class DW_Walker_CategoryDropdown extends Walker {
    /**
     * @see Walker::$tree_type
     * @since 2.1.0
     * @var string
     */
    var $tree_type = 'category';

    /**
     * @see Walker::$db_fields
     * @since 2.1.0
     * @todo Decouple this
     * @var array
     */
    var $db_fields = array ('parent' => 'parent', 'id' => 'term_id');

    /**
     * @see Walker::start_el()
     * @since 2.1.0
     *
     * @param string $output Passed by reference. Used to append additional content.
     * @param object $category Category data object.
     * @param int $depth Depth of category. Used for padding.
     * @param array $args Uses 'selected' and 'show_count' keys, if they exist.
     */
    function start_el( &$output, $object, $depth = 0, $args = array(), $current_object_id = 0 ) {
        $pad = str_repeat('&#8211;', $depth * 2);

        $cat_name = apply_filters('list_cats', $object->name, $object);
        $output .= "\t<option class=\"level-$depth\" value=\"".$object->term_id."\"";
        if ( $object->term_id == $args['selected'] )
            $output .= ' selected="selected"';
        $output .= '>';
        $output .= $pad.$cat_name;
        if ( $args['show_count'] )
            $output .= '&nbsp;&nbsp;('. $object->count .')';
        $output .= "</option>\n";
    }
}


?>
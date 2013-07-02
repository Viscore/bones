<?php
require_once('library/settings.php');
require_once('library/admin.php');

/* Thumbnail sizes - Example usage: <?php the_post_thumbnail( 'thumb-600' ); ?> */
add_image_size( 'thumb-600', 600, 150, true );

/* Add page slug to body class - awesome for styling page temapltes */
function add_body_class( $classes ) {
    global $post;
    if ( isset( $post ) ) {
        $classes[] = $post->post_type . '-' . $post->post_name;
    }
    return $classes;
}
add_filter( 'body_class', 'add_body_class' );

/************* ACTIVE SIDEBARS ********************/
function viscore_register_sidebars() {
	register_sidebar(array(
		'id' => 'sidebar1',
		'name' => __('Sidebar 1', 'viscoretheme'),
		'description' => __('The first (primary) sidebar.', 'viscoretheme'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));
}
/************* SEARCH FORM LAYOUT *****************/
function viscore_wpsearch($form) {
	$form = '<form role="search" method="get" id="searchform" action="' . home_url( '/' ) . '" >
	<label class="screen-reader-text" for="s">' . __('Search for:', 'viscoretheme') . '</label>
	<input type="text" value="' . get_search_query() . '" name="s" id="s" placeholder="'.esc_attr__('Search the Site...','viscoretheme').'" />
	<input type="submit" id="searchsubmit" value="'. esc_attr__('Search') .'" />
	</form>';
	return $form;
}
?>
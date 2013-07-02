<?php
/************* DASHBOARD WIDGETS *****************/
// disable default dashboard widgets
function disable_default_dashboard_widgets() {
	// remove_meta_box('dashboard_right_now', 'dashboard', 'core');    // Right Now Widget
	remove_meta_box('dashboard_recent_comments', 'dashboard', 'core'); // Comments Widget
	remove_meta_box('dashboard_incoming_links', 'dashboard', 'core');  // Incoming Links Widget
	remove_meta_box('dashboard_plugins', 'dashboard', 'core');         // Plugins Widget

	// remove_meta_box('dashboard_quick_press', 'dashboard', 'core');  // Quick Press Widget
	remove_meta_box('dashboard_recent_drafts', 'dashboard', 'core');   // Recent Drafts Widget
	remove_meta_box('dashboard_primary', 'dashboard', 'core');         //
	remove_meta_box('dashboard_secondary', 'dashboard', 'core');       //

	// removing plugin dashboard boxes
	remove_meta_box('yoast_db_widget', 'dashboard', 'normal');         // Yoast's SEO Plugin Widget

}
// removing the dashboard widgets
add_action('admin_menu', 'disable_default_dashboard_widgets');

// Hide the admin bar while in development
add_filter('show_admin_bar', '__return_false');

/************* CUSTOM LOGIN PAGE *****************/
function viscore_login_css() {
	wp_enqueue_style( 'viscore_login_css', get_template_directory_uri() . '/library/css/login.css', false );
}
// changing the logo link from wordpress.org to your site
function viscore_login_url() {  return home_url(); }
// changing the alt text on the logo to show your site name
function viscore_login_title() { return get_option('blogname'); }
// calling it only on the login page
add_action('login_enqueue_scripts', 'viscore_login_css', 10 );
add_filter('login_headerurl', 'viscore_login_url');
add_filter('login_headertitle', 'viscore_login_title');

/************* CUSTOMIZE ADMIN *******************/
// Custom Backend Footer
function viscore_custom_admin_footer() {
	_e('<span id="footer-thankyou">Developed by <a href="http://nednikolic.com" target="_blank" title="Ned Nikolix">Ned Nikolic</a></span> of <a href="http://www.viscore.com.au/" target="_blank" title="Viscore">Viscore</a>.', 'viscoretheme');
}
// adding it to the admin area
add_filter('admin_footer_text', 'viscore_custom_admin_footer');
?>
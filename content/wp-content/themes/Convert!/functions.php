<?php
ob_start();
/*
This is where you can drop your custom functions or
just edit things like thumbnail sizes, header images,
sidebars, comments, ect.
*/

/*********************
INCLUDE NEEDED FILES
*********************/

/*
library/joints.php
	- head cleanup (remove rsd, uri links, junk css, ect)
	- enqueueing scripts & styles
	- theme support functions
	- custom menu output & fallbacks
	- related post function
	- page-navi function
	- removing <p> from around images
	- customizing the post excerpt
	- custom google+ integration
	- adding custom fields to user profiles
*/
require_once(get_template_directory().'/library/joints.php'); // if you remove this, Joints will break
/*
library/custom-post-type.php
	- an example custom post type
	- example custom taxonomy (like categories)
	- example custom taxonomy (like tags)
*/
require_once(get_template_directory().'/library/custom-post-type-accordion.php'); // you can disable this if you like
require_once(get_template_directory().'/library/custom-post-type.php'); // you can disable this if you like
/*
library/admin.php
	- removing some default WordPress dashboard widgets
	- an example custom dashboard widget
	- adding custom login css
	- changing text in footer of admin
*/
// require_once(get_template_directory().'/library/admin.php'); // this comes turned off by default
/*
library/translation/translation.php
	- adding support for other languages
*/
// require_once(get_template_directory().'/library/translation/translation.php'); // this comes turned off by default

/*********************
MENUS & NAVIGATION
*********************/
// registering wp3+ menus
register_nav_menus(
	array(
		'main-nav' => __( 'The Main Menu' ),   // main nav in header
		'footer-links' => __( 'Footer Links' ) // secondary nav in footer
	)
);

// the main menu
function joints_main_nav() {
	// display the wp3 menu if available
    wp_nav_menu(array(
    	'container' => false,                           // remove nav container
    	'container_class' => '',           // class of container (should you choose to use it)
    	'menu' => __( 'The Main Menu', 'jointstheme' ),  // nav name
    	'menu_class' => '',         // adding custom nav class
    	'theme_location' => 'main-nav',                 // where it's located in the theme
    	'before' => '',                                 // before the menu
        'after' => '',                                  // after the menu
        'link_before' => '',                            // before each link
        'link_after' => '',                             // after each link
    	'fallback_cb' => 'joints_main_nav_fallback'      // fallback function
	));
} /* end joints main nav */

// the footer menu (should you choose to use one)
function joints_footer_links() {
	// display the wp3 menu if available
    wp_nav_menu(array(
    	'container' => '',                              // remove nav container
    	'container_class' => 'footer-links clearfix',   // class of container (should you choose to use it)
    	'menu' => __( 'Footer Links', 'jointstheme' ),   // nav name
    	'menu_class' => 'sub-nav',      // adding custom nav class
    	'theme_location' => 'footer-links',             // where it's located in the theme
    	'before' => '',                                 // before the menu
        'after' => '',                                  // after the menu
        'link_before' => '',                            // before each link
        'link_after' => '',                             // after each link
        'depth' => 0,                                   // limit the depth of the nav
    	'fallback_cb' => 'joints_footer_links_fallback'  // fallback function
	));
} /* end joints footer link */

// this is the fallback for header menu
function joints_main_nav_fallback() {
	wp_page_menu( array(
		'show_home' => true,
    	'menu_class' => 'top-bar top-bar-section',      // adding custom nav class
		'include'     => '',
		'exclude'     => '',
		'echo'        => true,
        'link_before' => '',                            // before each link
        'link_after' => ''                             // after each link
	) );
}

// this is the fallback for footer menu
function joints_footer_links_fallback() {
	/* you can put a default here if you like */
}

/*********************
SIDEBARS
*********************/

// Sidebars & Widgetizes Areas
function joints_register_sidebars() {
	register_sidebar(array(
		'id' => 'sidebar1',
		'name' => __('Sidebar 1', 'jointstheme'),
		'description' => __('The first (primary) sidebar.', 'jointstheme'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));

	register_sidebar(array(
		'id' => 'offcanvas',
		'name' => __('Offcanvas', 'jointstheme'),
		'description' => __('The offcanvas sidebar.', 'jointstheme'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));

	/*
	to add more sidebars or widgetized areas, just copy
	and edit the above sidebar code. In order to call
	your new sidebar just use the following code:

	Just change the name to whatever your new
	sidebar's id is, for example:

	register_sidebar(array(
		'id' => 'sidebar2',
		'name' => __('Sidebar 2', 'jointstheme'),
		'description' => __('The second (secondary) sidebar.', 'jointstheme'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));

	To call the sidebar in your template, you can just copy
	the sidebar.php file and rename it to your sidebar's name.
	So using the above example, it would be:
	sidebar-sidebar2.php

	*/
} // don't remove this bracket!

// Site Functions


function footer_contact() {
	echo '<div id="footer-contact">';
		echo '<div class="row">';
				 echo do_shortcode('[contact-form-7 id="117" title="Contact Form"]');
		echo '</div>';		
	echo '</div>';	
}

// ACF Excerpt
function custom_field_excerpt($title) {
	global $post;
	$text = get_field($title);
	if ( '' != $text ) {
		$text = strip_shortcodes( $text );
		$text = apply_filters('the_content', $text);
		$text = str_replace(']]>', ']]>', $text);
		$excerpt_length = 40; // 20 words
		$excerpt_more = apply_filters('excerpt_more', ' ' . '[...]');
		$text = wp_trim_words( $text, $excerpt_length, $excerpt_more );
	}
	return apply_filters('the_excerpt', $text);
}


/*********************
COMMENT LAYOUT
*********************/

// Comment Layout
function joints_comments($comment, $args, $depth) {
   $GLOBALS['comment'] = $comment; ?>
	<li <?php comment_class('panel'); ?>>
		<article id="comment-<?php comment_ID(); ?>" class="clearfix large-12 columns">
			<header class="comment-author">
				<?php
				/*
					this is the new responsive optimized comment image. It used the new HTML5 data-attribute to display comment gravatars on larger screens only. What this means is that on larger posts, mobile sites don't have a ton of requests for comment images. This makes load time incredibly fast! If you'd like to change it back, just replace it with the regular wordpress gravatar call:
					echo get_avatar($comment,$size='32',$default='<path_to_url>' );
				*/
				?>
				<!-- custom gravatar call -->
				<?php
					// create variable
					$bgauthemail = get_comment_author_email();
				?>
				<?php printf(__('<cite class="fn">%s</cite>', 'jointstheme'), get_comment_author_link()) ?> on
				<time datetime="<?php echo comment_time('Y-m-j'); ?>"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"><?php comment_time(__(' F jS, Y - g:ia', 'jointstheme')); ?> </a></time>
				<?php edit_comment_link(__('(Edit)', 'jointstheme'),'  ','') ?>
			</header>
			<?php if ($comment->comment_approved == '0') : ?>
				<div class="alert alert-info">
					<p><?php _e('Your comment is awaiting moderation.', 'jointstheme') ?></p>
				</div>
			<?php endif; ?>
			<section class="comment_content clearfix">
				<?php comment_text() ?>
			</section>
			<?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
		</article>
	<!-- </li> is added by WordPress automatically -->
	
<?php
} // don't remove this bracket!

function our_process() {

?>

<div id="our-process" class="show-for-large-up" name="our-process">
	<div class="row">
		<div id="process-wheel-wrap" class="large-6 columns show-for-large-up">
			<div id="icon"></div>
			<div id="pointer"></div>	
			<div id="icons">
				<div class="row">		
					<div class="large-4 columns first">1</div>					
					<div class="large-4 columns">
						<div class="row">			
							<div id="icon-1" class="large-12 columns icon">1</div>
							<div id="icon-2" class="large-12 columns icon">2</div>		
							<div id="icon-3" class="large-12 columns icon">3</div>
							<div id="icon-4" class="large-12 columns icon">4</div>	
						</div>							
					</div>
					<div class="large-4 columns last">1</div>							
				</div>													
			</div>					
			<div id="wheel">				
			</div>
		</div>
		<div id="process-text" class="large-6 columns show-for-large-up">
			<br><br><br><br><h1>Our Process</h1>
			<div class="row">
				<div class="large-3 columns"><a id="process-1">Strategy</a></div>
				<div class="large-3 columns"><a id="process-2">Live Testing</a></div>
				<div class="large-3 columns"><a id="process-3">Marketing</a></div>
				<div class="large-3 columns"><a id="process-4">Integration</a></div>			
			</div>
			<div class="row">
				<div id="process-1-text" class="large-12 columns process-text"><h3><br>Strategy</h3></div>
				<div id="process-2-text" class="large-12 columns process-text"><h3><br>Live Testing</h3></div>
				<div id="process-3-text" class="large-12 columns process-text"><h3><br>Marketing</h3></div>
				<div id="process-4-text" class="large-12 columns process-text"><h3><br>Integration</h3></div>			
			</div>		
			<div class="row">
				<div id="process-1-body" class="large-12 columns process-body"><br><?php echo the_field('strategy_text', 'option');?></div>
				<div id="process-2-body" class="large-12 columns process-body"><br><?php echo the_field('live_testing_text', 'option');?></div>
				<div id="process-3-body" class="large-12 columns process-body"><br><?php echo the_field('marketing_text', 'option');?></div>
				<div id="process-4-body" class="large-12 columns process-body"><br><?php echo the_field('integration_text', 'option');?></div>			
			</div>					
		</div>	
	</div>
</div> <!-- end #our-process -->	

<?php }

?>
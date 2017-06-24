<?php
// Add scripts and stylesheets
function startwordpress_scripts() {
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.6' );
		wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), '3.3.6', true );
	wp_enqueue_style( 'blog', get_template_directory_uri() . '/css/blog.css' );
  wp_enqueue_style( 'customStyle', get_template_directory_uri() . '/css/customStyle.css' );
}

add_action( 'wp_enqueue_scripts', 'startwordpress_scripts' );

// Add Google Fonts
function startwordpress_google_fonts() {
    wp_register_style('OpenSans', 'http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800');
		wp_enqueue_style( 'OpenSans');
}

add_action('wp_print_styles', 'startwordpress_google_fonts');

// WordPress Titles
add_theme_support( 'title-tag' );

// Custom settings
function custom_settings_add_menu() {
  add_menu_page( 'Custom Settings', 'Custom Settings', 'manage_options', 'custom-settings', 'custom_settings_page', null, 99 );
}
add_action( 'admin_menu', 'custom_settings_add_menu' );
// Create Custom Global Settings
function custom_settings_page() { ?>
  <div class="wrap">
    <h1>Custom Settings</h1>
    <form method="post" action="options.php">
       <?php
           settings_fields( 'section' );
           do_settings_sections( 'theme-options' );
           submit_button();
       ?>
    </form>
  </div>
<?php }

// Twitter
function setting_twitter() { ?>
  <input type="text" name="twitter" id="twitter" value="<?php echo get_option( 'twitter' ); ?>" />
<?php }

// Instagram
function setting_instagram() { ?>
  <input type="text" name="instagram" id="instagram" value="<?php echo get_option( 'instagram' ); ?>" />
<?php }

// Youtube
function setting_youtube() { ?>
  <input type="text" name="youtube" id="youtube" value="<?php echo get_option( 'youtube' ); ?>" />
<?php }

// pinterest
function setting_pinterest() { ?>
  <input type="text" name="pinterest" id="pinterest" value="<?php echo get_option( 'pinterest' ); ?>" />
<?php }

function custom_settings_page_setup() {
  add_settings_section( 'section', 'All Settings', null, 'theme-options' );
  add_settings_field( 'twitter', 'Twitter URL', 'setting_twitter', 'theme-options', 'section' );
  add_settings_field( 'instagram', 'Instagram URL', 'setting_instagram', 'theme-options', 'section' );
  add_settings_field( 'youtube', 'Youtube URL', 'setting_youtube', 'theme-options', 'section' );
  add_settings_field( 'pinterest', 'Pinterest URL', 'setting_pinterest', 'theme-options', 'section' );

  register_setting('section', 'twitter');
  register_setting('section', 'instagram');
  register_setting('section', 'youtube');
  register_setting('section', 'pinterest');

}
add_action( 'admin_init', 'custom_settings_page_setup' );

// Support Featured Images
add_theme_support( 'post-thumbnails' );

// Custom Post Type
function create_little_notes() {
	register_post_type( 'little-notes',
			array(
			'labels' => array(
					'name' => __( 'Little Notes' ),
					'singular_name' => __( 'Little Notes' ),
			),
			'public' => true,
			'has_archive' => 'little-notes',
			'supports' => array(
					'title',
					'editor',
					'thumbnail',
				  'custom-fields',
					'comments'
			)
	));
}
add_action( 'init', 'create_little_notes' );

function create_best_thoughts() {
	register_post_type( 'best-thoughts',
			array(
			'labels' => array(
					'name' => __( 'Best Thoughts @ 3 a.m.' ),
					'singular_name' => __( 'Best Thoughts @ 3 a.m.' ),
			),
			'public' => true,
			'has_archive' => 'best-thoughts',
			'supports' => array(
					'title',
					'editor',
					'thumbnail',
				  'custom-fields',
					'comments'
			)
	));
}
add_action( 'init', 'create_best_thoughts' );

function create_currently_consuming() {
	register_post_type( 'currently-consuming',
			array(
			'labels' => array(
					'name' => __( 'Currently Consuming' ),
					'singular_name' => __( 'Currently Consuming' ),
			),
			'public' => true,
			'has_archive' => 'currently-consuming',
			'supports' => array(
					'title',
					'editor',
					'thumbnail',
				  'custom-fields',
					'comments'
			)
	));
}
add_action( 'init', 'create_currently_consuming' );

function create_obsessions() {
	register_post_type( 'obsessions',
			array(
			'labels' => array(
					'name' => __( 'Obsessions' ),
					'singular_name' => __( 'Obsessions' ),
			),
			'public' => true,
			'has_archive' => 'obsessions',
			'supports' => array(
					'title',
					'editor',
					'thumbnail',
				  'custom-fields',
					'comments'
			)
	));
}
add_action( 'init', 'create_obsessions' );

function create_yannivlogs() {
	register_post_type( 'yannivlogs',
			array(
			'labels' => array(
					'name' => __( 'YanniVlogs' ),
					'singular_name' => __( 'YanniVlogs' ),
			),
			'public' => true,
			'has_archive' => 'yannivlogs',
			'supports' => array(
					'title',
					'editor',
					'thumbnail',
				  'custom-fields',
					'comments'
			)
	));
}
add_action( 'init', 'create_yannivlogs' );

function cmm_partial_types( $types ) {

    $types[] = 'little-notes';
		$types[] = 'best-thoughts';
		$types[] = 'currently-consuming';
		$types[] = 'obsessions';
		$types[] = 'yannivlogs';

    return $types;
}
add_filter( 'wpcmn_type_support', 'cmm_partial_types' );

/**
 * Support Search Form
 */
add_theme_support( 'html5', array( 'search-form' ) );

add_theme_support( 'post-thumbnails' );

set_post_thumbnail_size( 300, 300 );

function wpse_allowedtags() {
    // Add custom tags to this string
        return '<br>,<em>,<i>,<ul>,<ol>,<li>,<p>';
    }

if ( ! function_exists( 'wpse_custom_wp_trim_excerpt' ) ) :

    function wpse_custom_wp_trim_excerpt($wpse_excerpt) {
    global $post;
    $raw_excerpt = $wpse_excerpt;
        if ( '' == $wpse_excerpt ) {

            $wpse_excerpt = get_the_content('');
            $wpse_excerpt = strip_shortcodes( $wpse_excerpt );
            $wpse_excerpt = apply_filters('the_content', $wpse_excerpt);
            $wpse_excerpt = str_replace(']]>', ']]&gt;', $wpse_excerpt);
            $wpse_excerpt = strip_tags($wpse_excerpt, wpse_allowedtags()); /*IF you need to allow just certain tags. Delete if all tags are allowed */

            //Set the excerpt word count and only break after sentence is complete.
                $excerpt_word_count = 20;
                $excerpt_length = apply_filters('excerpt_length', $excerpt_word_count);
                $tokens = array();
                $excerptOutput = '';
                $count = 0;

                // Divide the string into tokens; HTML tags, or words, followed by any whitespace
                preg_match_all('/(<[^>]+>|[^<>\s]+)\s*/u', $wpse_excerpt, $tokens);

                foreach ($tokens[0] as $token) {

                    if ($count >= $excerpt_word_count && preg_match('/[\,\;\?\.\!]\s*$/uS', $token)) {
                    // Limit reached, continue until , ; ? . or ! occur at the end
                        $excerptOutput .= trim($token);
												$excerptOutput .= "[...]";
                        break;
                    }

                    // Add words to complete sentence
                    $count++;

                    // Append what's left of the token
                    $excerptOutput .= $token;
                }

            $wpse_excerpt = trim(force_balance_tags($excerptOutput));

                //$excerpt_end = ' <a href="'. esc_url( get_permalink() ) . '">' . '&nbsp;&raquo;&nbsp;' . sprintf(__( 'Read more about: %s &nbsp;&raquo;', 'wpse' ), get_the_title()) . '</a>';
                //$excerpt_more = apply_filters('excerpt_more');

                //$pos = strrpos($wpse_excerpt, '</');
                //if ($pos !== false)
                // Inside last HTML tag
                //$wpse_excerpt = substr_replace($wpse_excerpt, $excerpt_end, $pos, 0); /* Add read more next to last word */
                //else
                // After the content
                $wpse_excerpt .= $excerpt_end; /*Add read more in new paragraph */

            return $wpse_excerpt;

        }
        return apply_filters('wpse_custom_wp_trim_excerpt', $wpse_excerpt, $raw_excerpt);
    }

endif;

remove_filter('get_the_excerpt', 'wp_trim_excerpt');
add_filter('get_the_excerpt', 'wpse_custom_wp_trim_excerpt');
?>

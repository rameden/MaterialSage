<?php

namespace Roots\Sage\Extras;

use Roots\Sage\Setup;

/**
 * Add <body> classes
 */
function body_class($classes) {
  // Add page slug if it doesn't exist
  if (is_single() || is_page() && !is_front_page()) {
    if (!in_array(basename(get_permalink()), $classes)) {
      $classes[] = basename(get_permalink());
    }
  }

  // Add class if sidebar is active
  if (Setup\display_sidebar()) {
    $classes[] = 'sidebar-primary';
  }

  return $classes;
}
add_filter('body_class', __NAMESPACE__ . '\\body_class');

/**
 * Clean up the_excerpt()
 */
function excerpt_more($source="general") {
  if ($source == "mdl-card") {
    return '&hellip; <div class="mdl-card__actions mdl-card--border">' .
          '<div class="mdl-layout-spacer"></div>' .
            '<a href="' . get_permalink() . '" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect ">Read More</a>' .
          '</div>';
  } else {
  return '&hellip; <br /><a href="' . get_permalink() . '" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-button--read-more">' . __('Read More', 'immaterial') . '</a><br class="clear"/>';
  }
}
add_filter('excerpt_more', __NAMESPACE__ . '\\excerpt_more');


/* As recommended in Roots Discourse, this function is called
 * within div wrap so we can eliminate the container and have
 * full width rows and divs.
*/
function container_class() {
  if ( is_front_page() || 'movies' == get_post_type() ) {
    return 'mdl-grid--no-spacing';
  } else {
    return;
  }
}
//*

function entry_class() {
  if ( is_page_template('biography-template.php') || is_post_type_archive( 'faq' ) ) {
    return 'entry-data';
  } else {
    return 'entry-content';
  }
}

// BOF Featured Article
function register_post_assets(){
    add_meta_box('featured-post', __('Featured Post'), __NAMESPACE__ . '\\add_featured_meta_box', 'post', 'advanced', 'high');
}
add_action('admin_init', __NAMESPACE__ . '\\register_post_assets', 1);

function add_featured_meta_box($post){
	$featured = get_post_meta($post->ID, '_featured-post', true);
	echo "<label for='_featured-post'>".__('Feature this post?', 'sage')."</label>";
	echo " <input type='checkbox' name='featured-post' id='featured-post' value='1' ".checked(1, $featured)." />";
	}

function save_featured_meta($post_id){
   if (isset($_REQUEST['featured-post']))
        update_post_meta(esc_attr($post_id), '_featured-post', esc_attr($_REQUEST['featured-post']));
        }
add_action('save_post', __NAMESPACE__ . '\\save_featured_meta');
// EOF Featured Article

// BOF Sequence Field For FAQs
// Source https://www.sitepoint.com/adding-custom-meta-boxes-to-wordpress

function sequence_meta_box_markup($object)
{
    wp_nonce_field(basename(__FILE__), "sequence_meta_box-nonce");

    ?>
        <div>
            <input name="sequence_meta_box" type="text" size="4" value="<?php echo get_post_meta($object->ID, "sequence_meta_box", true); ?>">
        </div>
    <?php
}

function add_sequence_meta_box()
{
    add_meta_box("sequence_meta_box", "Sequence of Questions", __NAMESPACE__ . '\\sequence_meta_box_markup', "faq", "side", "high", null);
}

add_action("add_meta_boxes", __NAMESPACE__ . '\\add_sequence_meta_box');

function save_sequence_meta_box($post_id, $post, $update)
{
    if (!isset($_POST["sequence_meta_box-nonce"]) || !wp_verify_nonce($_POST["sequence_meta_box-nonce"], basename(__FILE__)))
        return $post_id;

    if(!current_user_can("edit_post", $post_id))
        return $post_id;

    if(defined("DOING_AUTOSAVE") && DOING_AUTOSAVE)
        return $post_id;

    $slug = "faq";
    if($slug != $post->post_type)
        return $post_id;

    $sequence_meta_box_value = "";

    if(isset($_POST["sequence_meta_box"]))
    {
        $sequence_meta_box_value = $_POST["sequence_meta_box"];
    }
    update_post_meta($post_id, "sequence_meta_box", $sequence_meta_box_value);

}

add_action("save_post", __NAMESPACE__ . '\\save_sequence_meta_box', 10, 3);
// EOF Sequence Field for FAQs

/* Disable WPs filter that automatically adds paragraphs. */
remove_filter ('the_content', 'wpautop');

/*
* Replace spaces in url string with separator supplied as argument
*/
function formatUrl($str, $sep='-')
	{
		$res = strtolower($str);
		$res = preg_replace('/[^[:alnum:]]/', ' ', $res);
		$res = preg_replace('/[[:space:]]+/', $sep, $res);
		return trim($res, $sep);
	}

// Start BNS Dynamic Copyright
if ( ! function_exists( 'bns_dynamic_copyright' ) ) {
  function bns_dynamic_copyright( $args = '' ) {
      $initialize_values = array( 'start' => '', 'copy_years' => '', 'url' => '', 'end' => '' );
      $args = wp_parse_args( $args, $initialize_values );

      /* Initialize the output variable to empty */
      $output = '';

      /* Start common copyright notice */
      empty( $args['start'] ) ? $output .= sprintf( __('Copyright') ) : $output .= $args['start'];

      /* Calculate Copyright Years; and, prefix with Copyright Symbol */
      if ( empty( $args['copy_years'] ) ) {
        /* Get all posts */
        $all_posts = get_posts( 'post_status=publish&order=ASC' );
        /* Get first post */
        $first_post = $all_posts[0];
        /* Get date of first post */
        $first_date = $first_post->post_date_gmt;

        /* First post year versus current year */
        $first_year = substr( $first_date, 0, 4 );
        if ( $first_year == '' ) {
          $first_year = date( 'Y' );
        }

      /* Add to output string */
        if ( $first_year == date( 'Y' ) ) {
        /* Only use current year if no posts in previous years */
          $output .= ' &copy; ' . date( 'Y' );
        } else {
          $output .= ' &copy; ' . $first_year . "-" . date( 'Y' );
        }
      } else {
        $output .= ' &copy; ' . $args['copy_years'];
      }

      /* Create URL to link back to home of website */
      empty( $args['url'] ) ? $output .= ' <a href="' . home_url( '/' ) . '" title="' . esc_attr( get_bloginfo( 'name', 'display' ) ) . '" rel="home">' . get_bloginfo( 'name', 'display' ) .'</a>  ' : $output .= ' ' . $args['url'];

      /* End common copyright notice */
      empty( $args['end'] ) ? $output .= ' ' . sprintf( __('All rights reserved.') ) : $output .= ' ' . $args['end'];

      /* Construct and sprintf the copyright notice */
      $output = sprintf( __('<span class="copyright" id="bns-dynamic-copyright"> %1$s </span><!-- #bns-dynamic-copyright -->'), $output );
      $output = apply_filters( 'bns_dynamic_copyright', $output, $args );

      return $output;
  }
}
// End BNS Dynamic Copyright

// define the get_search_form callback 
function filter_get_search_form( $form ) {
    //$format = apply_filters( 'search_form_format', $format );
    //if ( 'html5' == $format ) {
			$form = '<form role="search" method="get" class="search-form" action="' . esc_url( home_url( '/' ) ) . '">
				<label>
					<span class="screen-reader-text">' . _x( 'Search for:', 'label' ) . '</span>
					<input type="search" class="search-field" placeholder="' . esc_attr_x( 'Search &hellip;', 'placeholder' ) . '" value="' . get_search_query() . '" name="s" />
				</label>
				<input type="submit" class="search-submit" value="'. esc_attr_x( 'Search', 'submit button' ) .'" />
			</form>';
			$form = '<form role="search" method="get" class="search-form" action="' . esc_url( home_url( '/' ) ) . '">
        <div class="mdl-textfield mdl-js-textfield">
            <input class="mdl-textfield__input" type="search" id="site-search" />
            <label class="mdl-textfield__label" for="site-search">Search</label>
         </div>
        <input type="submit" class="mdl-button mdl-js-button mdl-js-ripple-effect" value="'. esc_attr_x( 'Search', 'submit button' ) .'" />
      </form>';
		/*} else {
			$form = '<form role="search" method="get" id="searchform" class="searchform" action="' . esc_url( home_url( '/' ) ) . '">
				<div>
					<label class="screen-reader-text" for="s">' . _x( 'Search for:', 'label' ) . '</label>
					<input type="text" value="' . get_search_query() . '" name="s" id="s" />
					<input type="submit" id="searchsubmit" value="'. esc_attr_x( 'Search', 'submit button' ) .'" />
				</div>
			</form>';
		}*/
    return $form;
    }

add_filter( 'get_search_form', __NAMESPACE__ . '\\filter_get_search_form', 10, 1 );

<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;
use Roots\Sage\Extras;
use Roots\Sage\Assets;

?>

<!doctype html>
<html <?php language_attributes(); ?>>
  <?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>
  <?php echo file_get_contents(Assets\asset_path('images/sprites/sprite-defs.svg')); ?>
<script type="text/javascript">

// SVG feature detection
;(function (window, document, undefined) {

	'use strict';

	// SVG feature detection
	var supports = !!document.createElementNS && !!document.createElementNS('http://www.w3.org/2000/svg', 'svg').createSVGRect;
	if ( !supports ) return;

	// Add `.svg` class to <html> element
	document.documentElement.className += (document.documentElement.className ? ' ' : '') + 'svg';

})(window, document);

//https://github.com/iamdustan/smoothscroll
document.addEventListener('DOMContentLoaded', function(e) { setTimeout(function() {

// Make header disappear when scrolling down and return when scroll up.
  var main_header = document.getElementsByClassName('mdl-layout__header')[0];
      main_container = document.getElementsByClassName('mdl-layout__content')[0];
      header_rows = document.getElementsByClassName("mdl-layout__header-row");
      fade_class = "mdl-layout__header-row fade_out";
      opaque_class = "mdl-layout__header mdl-color--grey-800 mdl-color-text--alabaster-500 mdl-layout__header--waterfall";
      transparent_class = "mdl-layout__header mdl-layout__header--transparent";
      display_class = "mdl-layout__header-row";
      lastVal = 0;

  }, 2000) // /setTimeOut
}, false); // /addEventListener

function modifyMainHeader(visibility_class, opacity_class, hide) {
  for (var i = 1; i < header_rows.length; i++) {
    header_rows[i].className = visibility_class;
  }
  main_header.className = opacity_class;
  if (hide === true) {
    main_header.setAttribute("style", "min-height:16px;transition-duration: 0.8s;transition-property: min-height, box-shadow;");
  } else {
    main_header.removeAttribute("style");
  }
}

</script>
    <!--[if lt IE 9]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'immaterial'); ?>
      </div>
    <![endif]-->
    <div class="mdl-layout__container">
      <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
        <?php
          do_action('get_header');
          get_template_part('templates/header');
        ?>
        <div class="mdl-layout__content" role="document">
          <div class="mdl-grid <?= Extras\container_class(); ?>">
            <?php
            if (Setup\display_sidebar()) :
              $col = 'mdl-cell--8-col';
            else :
              $col = 'mdl-cell--12-col';
            endif;
            ?>
            <main class="mdl-cell <?php echo $col; ?>">
              <?php include Wrapper\template_path(); ?>
            </main><!-- main -->
            <?php if (Setup\display_sidebar()) : ?>
              <aside class="mdl-cell mdl-cell--4-col" role="complementary">
                <?php include Wrapper\sidebar_path(); ?>
              </aside><!-- sidebar -->
            <?php endif; ?>
          </div><!-- /.page-content.mdl-grid -->
          <?php
            do_action('get_footer');
            get_template_part('templates/footer');
            wp_footer();
          ?>
        </div><!-- /.mdl-layout__content -->
      </div><!-- /.mdl-layout -->
    </div>
    <script type="text/javascript">
    //Replace MDL icon with our sprite
    function mdl_drawer_btn() {

      // Only do this on phones
      var mdl_drawer_button = document.querySelector('.mdl-layout__drawer-button');
        // Exit if browser does not support SVG
        var supports = !!document.createElementNS && !!document.createElementNS('http://www.w3.org/2000/svg', 'svg').createSVGRect;
        if ( !supports ) return;

        if (mdl_drawer_button != null) {
            mdl_drawer_button.innerHTML = '<svg viewBox="0 0 100 100" class="icon nav-icon"><use xlink:href="#nav-icon"></use></svg>';
          } else {
            setTimeout(mdl_drawer_btn, 100);
          }
      }

      var vWidth = window.innerWidth;
      if (vWidth < 600)
        setTimeout(mdl_drawer_btn, 100);

    // ./Replace MDL icon with our sprite

    </script>

    <?php if ( is_front_page() || is_home() ): ?>

    <script type="text/javascript">

    // Fill viewport
    var vWidth = window.innerWidth;
        vHeight = window.innerHeight;
        //cover = document.getElementsByClassName('front-page__cover')[0];

    //cover.setAttribute("style", "height: " + vHeight + 'px');

    // Close MDL drawer on click so works with anchor links
    function close() {
      var d = document.querySelector('.mdl-layout');
      d.MaterialLayout.toggleDrawer();
    }

    //document.querySelector('.mdl-layout__drawer').addEventListener('click', close);

    </script>

  <?php endif; ?>
  </body>
</html>

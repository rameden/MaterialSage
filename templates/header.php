 <script>
    //https://github.com/iamdustan/smoothscroll
  document.addEventListener('DOMContentLoaded', function(e) { setTimeout(function() {
      document.getElementById("buildcase").addEventListener("click", pageScrolling);
      }, 2000)
    }, false);

    function pageScrolling() {
      document.getElementById('scrollIntoView').scrollIntoView({top: true, behavior: 'smooth'});
    }
  </script>
  <header class="mdl-layout__header mdl-color--grey-800 mdl-color-text--yellow-500 mdl-layout__header--waterfall">
  <div class="mdl-layout__header-row mdl-layout__header-row-sliver mdl-color-text--grey-200 mdl-color--yellow-50">
    <div class="mdl-layout-spacer"></div>
      <svg fill="#7f7d7b" height="18" viewBox="0 0 24 24" width="18" xmlns="http://www.w3.org/2000/svg">
          <path d="M12 5.9c1.16 0 2.1.94 2.1 2.1s-.94 2.1-2.1 2.1S9.9 9.16 9.9 8s.94-2.1 2.1-2.1m0 9c2.97 0 6.1 1.46 6.1 2.1v1.1H5.9V17c0-.64 3.13-2.1 6.1-2.1M12 4C9.79 4 8 5.79 8 8s1.79 4 4 4 4-1.79 4-4-1.79-4-4-4zm0 9c-2.67 0-8 1.34-8 4v3h16v-3c0-2.66-5.33-4-8-4z"/>
          <path d="M0 0h24v24H0z" fill="none"/>
      </svg>
      &nbsp; <span>850 932-8560</span>
  </div>
  <div class="mdl-layout__header-row">
    <!-- Title -->
    <a class="mdl-layout-title" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>

    <!-- Add spacer, to align navigation to the right -->
    <div class="mdl-layout-spacer"></div>
    <!-- Navigation -->
    <?php
    if ( has_nav_menu( 'header_navigation' ) ) :

      // Remove wrapping <li> from around links
      // https://css-tricks.com/snippets/wordpress/remove-li-elements-from-output-of-wp_nav_menu/#comment-542093
      $cleanermenu = wp_nav_menu( array(
        'theme_location' => 'header_navigation',
        'container' => false,
        'items_wrap' => '<nav class="mdl-navigation mdl-layout--large-screen-only">%3$s</nav>',
        'echo' => false,
        'depth' => 1,
      ) );
      $find = array('><a','li');
      $replace = array('','a');
      echo str_replace( $find, $replace, $cleanermenu );

    endif;
    ?>
  </div>
  <div class="mdl-layout__header-row mdl-layout__header-row-thin">
    <a class="mdl-layout-subtitle" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('description'); ?></a>
  </div>


</header>
<div class="mdl-layout__drawer mdl-color-text--grey-800 mdl-color--yellow-500">
  <a class="mdl-layout-title" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>

  <?php
  if ( has_nav_menu( 'primary_navigation' ) ) :

    // Remove wrapping <li> from around links
    // https://css-tricks.com/snippets/wordpress/remove-li-elements-from-output-of-wp_nav_menu/#comment-542093
    $cleanermenu = wp_nav_menu( array(
      'theme_location' => 'primary_navigation',
      'container' => false,
      'items_wrap' => '<nav class="mdl-navigation">%3$s</nav>',
      'echo' => false,
      'depth' => 2,
    ) );
    $find = array('><a','li');
    $replace = array('','a');
    echo str_replace( $find, $replace, $cleanermenu );

  endif;
  ?>
</div>

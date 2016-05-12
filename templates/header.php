 <script>
    //https://github.com/iamdustan/smoothscroll
  document.addEventListener('DOMContentLoaded', function(e) { setTimeout(function() {
      document.getElementById("buildcase").addEventListener("click", pageScrolling);
      window.onscroll=function(){
        alert("you are scrolling");
      };
      var didScroll = false;
          main_header = document.getElementsByClassName('mdl-layout__header')[0];
          main_container = document.getElementsByClassName('mdl-layout__content')[0];
          header_rows = document.getElementsByClassName("mdl-layout__header-row");
          fade_class = "mdl-layout__header-row fade_out";
          opaque_class = "mdl-layout__header mdl-color--grey-800 mdl-color-text--yellow-500 mdl-layout__header--waterfall";
          transparent_class = "mdl-layout__header mdl-layout__header--transparent mdl-layout__header--waterfall";
          display_class = "mdl-layout__header-row";
          lastVal = 0;

      main_container.onscroll = doThisStuffOnScroll;

      function doThisStuffOnScroll() {
        didScroll = true;
      }

      setInterval(function() {
        if(didScroll) {
            didScroll = false;
            if (main_container.scrollTop >= 400) {
              var st = main_container.scrollTop;
                if (main_container.scrollTop > lastVal){
                  hideMainHeader();
                } else {
                  // Scrolling up
                  showMainHeader();
                }
                lastVal = st;
            } else {
              //show main header when in top 400 pixels
              showMainHeader();
            }
        }
      }, 500);

      function hideMainHeader() {
          for (var i = 1; i < header_rows.length; i++) {
              header_rows[i].className = fade_class;
          }
          main_header.className = transparent_class;
          main_header.setAttribute("style", "min-height:16px;transition-duration: 0.8s;transition-property: min-height, box-shadow;");
        }

      function showMainHeader() {
          for (var i = 1; i < header_rows.length; i++) {
              header_rows[i].className = display_class;
          }
          main_header.className = opaque_class;
          main_header.removeAttribute("style");
        }
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
          <path d="M0 0h24v24H0z" fill="none"/>
          <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
      </svg>
      &nbsp; <span>850 932-8560</span> &nbsp;
      <svg fill="#7f7d7b" height="18" viewBox="0 0 24 24" width="18" xmlns="http://www.w3.org/2000/svg">
          <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
          <path d="M0 0h24v24H0z" fill="none"/>
      </svg>
      &nbsp; <span>info@delapiedralawfirm.com</span>
  </div>
  <div  id="header_main">
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

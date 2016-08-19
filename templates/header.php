 <header class="mdl-layout__header mdl-color--grey-800 mdl-color-text--alabaster-500">
<div class="mdl-layout__header-row mdl-layout__header-row-sliver mdl-color-text--grey-200 mdl-color--alabaster-50">
  <div class="mdl-layout-spacer"></div>
    <svg class="icon" height="18" viewBox="0 0 24 24" width="18" xmlns="http://www.w3.org/2000/svg">
        <path d="M0 0h24v24H0z" fill="none"/>
        <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
    </svg><span class="icon-fallback-text">Contact: </span>
    &nbsp; <span>850 932-8560</span> &nbsp;
    <a href="contact"><svg class="icon" height="18" viewBox="0 0 24 24" width="18" xmlns="http://www.w3.org/2000/svg">
        <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
        <path d="M0 0h24v24H0z" fill="none"/>
    </svg></a>
    &nbsp; <a href="<?php echo home_url( '/contact' ); ?>"><span>info@delapiedralawfirm.com</span></a>
</div>
<div  id="header_main">
  <div class="mdl-layout__header-row">
    <!-- Title -->
    <a class="mdl-layout-title" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
    <?php //bloginfo('description'); ?>
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
        'items_wrap' => '<nav class="mdl-navigation">%3$s</nav>',
        'echo' => false,
        'depth' => 1,
      ) );
      $find = array('><a','<li ','</li>');
      $replace = array('','<a ','');
      echo str_replace( $find, $replace, $cleanermenu );

    endif;
    ?>
  </div>

</div>
  <div class="mdl-layout__header-row mdl-layout__header-row-thin">
     <a class="mdl-layout-subtitle" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('description'); ?></a>
   </div>

</header>
<div class="mdl-layout__drawer mdl-color-text--grey-800 mdl-color--alabaster-500">
  <a class="mdl-layout-title" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>

  <?php
  if ( has_nav_menu( 'drawer_navigation' ) ) :

    $cleanermenu = wp_nav_menu( array(
      'theme_location' => 'drawer_navigation',
      'container' => false,
      'items_wrap' => '<nav class="mdl-color--alabaster-500 mdl-navigation">%3$s</nav>',
      'echo' => false,
      'depth' => 1,
    ) );
    //$find = array('><a','li');
    //$replace = array('','a');
    //mz_pr($cleanermenu);
    //mz_pr(str_replace( $find, $replace, $cleanermenu ));
    $find = array('><a','<li ','</li>');
    $replace = array('','<a ','');
    echo str_replace( $find, $replace, $cleanermenu );

  endif;
  ?>
</div>
<a id="cta-button" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-20" href="<?php echo home_url(); ?>/free-case-evaluation/">Free Case Evaluation</a>

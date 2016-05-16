<?php if ( is_active_sidebar( 'sidebar-mega-footer' ) ) { ?>
<footer class="mdl-mega-footer" role="contentinfo">
  <div class="mdl-mega-footer__middle-section">
    <?php dynamic_sidebar('sidebar-mega-footer'); ?>
  </div>

</footer>
<?php } ?>

<?php if ( is_active_sidebar( 'sidebar-mini-footer' ) ) { ?>
<footer class="mdl-mini-footer" role="contentinfo">
  <?php dynamic_sidebar('sidebar-mini-footer'); ?>
</footer>
<?php } ?>
<footer class="mdl-mini-footer">
  <div class="mdl-mini-footer__left-section">
     <div vocab="http://schema.org/" typeof="Person" class="mdl-mini-footer__address">
    <span property="name">Jack De La Piedra</span><br />
    <span property="jobTitle">Civil Justice Attorney</span>
    <div property="address" typeof="PostalAddress">
      <span property="streetAddress">
        913 Gulf Breeze Parkway, Suite 25
      </span><br />
      <span property="addressLocality">Gulf Breeze</span>,
      <span property="addressRegion">FL</span>
      <span property="postalCode">32561</span>
    </div>
    P: <span property="telephone">(850) 932-8560</span> F: <span property="fax">(850) 932-8129</span><br />
    <a href="mailto:jack@delapiedralawfirm.com" property="email">jack@delapiedralawfirm.com</a>
  </div>
     <!-- <ul class="mdl-mini-footer__link-list"> -->
      <?php

    if ( has_nav_menu( 'footer_links' ) ) :
      $cleanermenu = wp_nav_menu(array(
      'theme_location' => 'footer_links',
      'container' => false,
      'items_wrap' => '<nav class="mdl-mini-footer__link-list">%3$s</nav>',
      'echo' => false,
      'depth' => 2,
      ) );

    echo $cleanermenu;

  endif;
  ?>

  </div>
</footer>

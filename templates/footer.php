<?php if ( is_active_sidebar( 'sidebar-mega-footer' ) ) { ?>
<footer class="mdl-mega-footer" role="contentinfo">
  <div class="mdl-mega-footer__middle-section">
    <?php dynamic_sidebar('sidebar-mega-footer'); ?>
  </div>
  <div vocab="http://schema.org/" typeof="Person">
    <span property="name">Jack De La Piedra</span>
    <span property="jobTitle">Civil Justice Attorney</span>
    <div property="address" typeof="PostalAddress">
      <span property="streetAddress">
        913 Gulf Breeze Parkway, Suite 25
      </span><br />
      <span property="addressLocality">Gulf Breeze</span>,
      <span property="addressRegion">FL</span>
      <span property="postalCode">32561</span>
    </div>
    P: <span property="telephone">(850) 932-8560</span> F: <span property="fax">(850) 932-8129</span>
    <a href="mailto:jack@delapiedralawfirm.com" property="email">jack@delapiedralawfirm.com</a>
  </div>
</footer>
<?php } ?>

<?php if ( is_active_sidebar( 'sidebar-mini-footer' ) ) { ?>
<footer class="mdl-mini-footer" role="contentinfo">
  <?php dynamic_sidebar('sidebar-mini-footer'); ?>
</footer>
<?php } ?>

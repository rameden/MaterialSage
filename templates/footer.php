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
    <a href="attorney-advertising-legal-notice">Attorney Advertising & Legal Notice</a>
</footer>
<?php } ?>

<?php if ( is_active_sidebar( 'sidebar-mini-footer' ) ) { ?>
<footer class="mdl-mini-footer" role="contentinfo">
  <?php dynamic_sidebar('sidebar-mini-footer'); ?>
</footer>
<?php } ?>
<script type="text/javascript">

var didScroll = false;
    main_header = document.getElementsByClassName('mdl-layout__header')[0];
    main_container = document.getElementsByClassName('mdl-layout__content')[0];
    header_rows = document.getElementsByClassName("mdl-layout__header-row");
    fade_class = "mdl-layout__header-row fade_out";
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
    header_rows[1].className = fade_class;
    header_rows[2].className = fade_class;
    main_header.className = "mdl-layout__header mdl-layout__header--transparent mdl-layout__header--waterfall";
    main_header.setAttribute("style", "min-height:16px;transition-duration: 0.8s;transition-property: min-height, box-shadow;");
  }

function showMainHeader() {
    header_rows[1].className = display_class;
    header_rows[2].className = display_class;
    main_header.className = "mdl-layout__header mdl-color--grey-800 mdl-color-text--yellow-500 mdl-layout__header--waterfall";
    main_header.removeAttribute("style");
  }
</script>

<?php

use Roots\Sage\Assets;

?>
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
  <style type="text/css">
    .no-svg .svg {
      display: none;
    }

    .fallback {
      display: none;
    }

    .no-svg .fallback {
      display: block;
    }

    .arrow-pointer {
      fill: hsla(253, 6%, 74%, 1);
      width: 8rem;
      height: auto;
    }

    .biopic {
      width: 400px;
      height: auto;
    }

    .front-page__cover {
      min-height: 200px;
      padding: 2rem 0;
    }

    .front-page__cover p {
      font-size: 1.6rem;
    }

    .mdl-card__media > img {
      max-width: 100%;
    }

    .front-page__card_two {
      align-items: center;
    }

    .mdl-card__actions {
      display: flex;
      box-sizing:border-box;
      align-items: center;
    }
    .mdl-card__actions > .mdl-button--icon {
      margin-right: 3px;
      margin-left: 3px;
    }

    .front-page__card_one .mdl-card__supporting-text > span {
      font-weight: 900;
      font-size: 2.5rem;
      text-align: center;
      line-height: 2rem;
    }

    .mdl-card__media {
        margin: 0;
    }

    .hero {
  background: hsla(201, 61%, 50%, 1) url("../images/Mediation-lawyer-tampa-bay1-1200.jpg") repeat scroll center center / 1200px 555px;
  height:555px;
}

.mdl-cell--biography p {
  @include typo-headline();
}

h2.front-page {
  font-size: 3rem;
  line-height: 3rem;
  letter-spacing: -0.001rem;
  text-decoration: none;
  word-spacing: -0.1rem;
  color: hsla(253, 6%, 74%, 1);
  }

@media (min-width: 37rem) {
h2.front-page {
  font-size: 5rem;
  line-height: 5rem;
  letter-spacing: -0.001rem;
  text-decoration: none;
  word-spacing: -0.1rem;
  color: hsla(253, 6%, 74%, 1);
  }
}

@media (min-width: 60rem) {

}

  </style>
</head>

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
  var didScroll = false;
      main_header = document.getElementsByClassName('mdl-layout__header')[0];
      main_container = document.getElementsByClassName('mdl-layout__content')[0];
      header_rows = document.getElementsByClassName("mdl-layout__header-row");
      fade_class = "mdl-layout__header-row fade_out";
      opaque_class = "mdl-layout__header mdl-color--grey-800 mdl-color-text--yellow-500 mdl-layout__header--waterfall";
      transparent_class = "mdl-layout__header mdl-layout__header--transparent";
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
          if (main_container.scrollTop > lastVal - 100){
            modifyMainHeader(fade_class, transparent_class, true);
          } else if (( main_container.scrollTop  + 400 ) <= (main_container.scrollHeight - main_container.offsetHeight)) {
            // Scrolling up - show header
            modifyMainHeader(display_class, opaque_class, false);
          }
          lastVal = st;
        } else {
          //show main header when in top 400 pixels
          modifyMainHeader(display_class, opaque_class, false);
        }
      }
    }, 500); // /setInterval
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


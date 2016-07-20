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

.mdl-layout__drawer-button > i {
  display: none;
}

.mdl-layout__header-row .mdl-navigation a {
  display: none;
}

.mdl-mega-footer__drop-down-section img {
  max-width: 90%;
  margin: .8rem;
}

#articles .mdl-cell--12-col, #articles .mdl-cell--8-col-tablet {
  width: calc(100% - 4rem);
  margin: 1rem 2rem;
}



.mdl-mega-footer {
  margin: 0;
}


.wrap {
  width: 100%;
  text-align: center;
}

@media (min-width: 600px) {

  .mdl-layout__header-row .mdl-navigation a {
    display: block;
  }

}

  </style>

</head>




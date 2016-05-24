<?php

use Roots\Sage\Assets;

/**
 * Template Name: Home Template
 */
?>


<?php // while (have_posts()) : the_post(); ?>
  <?php //get_template_part('templates/page', 'header'); ?>
  <?php //get_template_part('templates/content', 'page'); ?>

  <div class="content-grid mdl-grid mdl-grid--no-spacing front-page__cover">
    <div style="text-align:center" class="mdl-cell mdl-cell--12-col mdl-cell--8-col-tablet mdl-cell--4-col-phone mdl-color--teal-500">
      <h2 class="front-page">Let’s Build <br />
      Your Case<br />
      Together</h2>
      <a href="#" id="arrow1">
      <?php echo file_get_contents(Assets\asset_path('images/arrow-pointer.svg')) ?>
      <img class="fallback" src="<?= Assets\asset_path('images/arrow-down.png') ?>" />
      </a>
    </div>
  </div>

	<div id="frontpage2" class="content-grid mdl-grid front-page__cover front-page__card_one">
    <div class="mdl-card mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-color--purple-50 mdl-shadow--2dp">
      <div class="mdl-card__title">
        <h2 class="mdl-card__title-text">Your job is simple.</h2>
      </div>
      <div class="mdl-card__supporting-text" >
        <span>Tell me the truth.</span>
          <ul class="mdl-list">
            <li class="mdl-list__item mdl-list__item--two-line">
              <span class="mdl-list__item-primary-content">
                <i class="material-icons mdl-list__item-avatar">forum</i>
                <span>We start with an interview</span>
              </span>
              <span class="mdl-list__item-secondary-content">
                <a class="mdl-list__item-secondary-action" href="#"><i class="material-icons">star</i></a>
              </span>
            </li>
            <li class="mdl-list__item mdl-list__item--two-line">
              <span class="mdl-list__item-primary-content">
                <i class="material-icons">import_contacts</i>
                <span>Find the story</span>
              </span>
            </li>
            <li class="mdl-list__item mdl-list__item--two-line">
              <span class="mdl-list__item-primary-content">
                <i class="material-icons">warning</i>
                <span>Identify the danger points</span>
              </span>
            </li>
            <li class="mdl-list__item mdl-list__item--two-line">
              <span class="mdl-list__item-primary-content">
                <i class="material-icons">attach_file</i>
                <span>Discovery of Medical Records, Facility Records</span>
              </span>
            </li>
          </ul>

      </div>
    </div>

    <div class="mdl-card mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-shadow--2dp front-page__card_two">
      <figure class="mdl-card__media">
        <img class="biopic" src="<?= Assets\asset_path('images/gerry-spence-757398.jpg') ?>" alt="Jack De La Piedra" />
      </figure>
      <div class="mdl-card__title">
        <h2 class="mdl-card__title-text">Strategize</h2>
      </div>

      <div class="mdl-card__actions mdl-card--border">
        <div class="mdl-layout-spacer"></div>
        <button id="lang-switcher" class="mdl-button mdl-js-button mdl-button--icon">
          <i class="material-icons">visibility</i>
        </button>
        <ul class="mdl-menu mdl-js-menu mdl-menu--top-right" for="lang-switcher">
            <li class="mdl-menu__item">Document Analysis by Expert</li>
            <li class="mdl-menu__item">Deposition Strategies</li>
            <li class="mdl-menu__item">Requests for Admissions</li>
        </ul>
      </div>


    </div>

    <div class="mdl-card mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet mdl-shadow--2dp">
      <div class="mdl-card__title">
        <h2 class="mdl-card__title-text">We thoroughly prepare.</h2>
      </div>
      <div class="mdl-card__supporting-text" >
        <span>A Clear and Pointed Delivery</span>

        <ul class="mdl-list">
            <li class="mdl-list__item mdl-list__item--two-line">
              <span class="mdl-list__item-primary-content">
                <i class="material-icons mdl-list__item-avatar">person</i>
                <span>Scene Selection for trial</span>
                <span class="mdl-list__item-sub-title">Which scenes demonstrate betrayal most effectively?</span>
              </span>
              <span class="mdl-list__item-secondary-content">
                <a class="mdl-list__item-secondary-action" href="#"><i class="material-icons">star</i></a>
              </span>
            </li>
            <li class="mdl-list__item mdl-list__item--two-line">
              <span class="mdl-list__item-primary-content">
                <i class="material-icons mdl-list__item-avatar">person</i>
                <span>Story Revision</span>
                <span class="mdl-list__item-sub-title">What do we know now that we didn't know during the Client Interview that
changes dynamic of our Hero's Story?</span>
              </span>
            </li>
            <li class="mdl-list__item mdl-list__item--two-line">
              <span class="mdl-list__item-primary-content">
                <i class="material-icons mdl-list__item-avatar">person</i>
                <span>Are the danger points still the same?</span>
              </span>
            </li>
          </ul>
      </div>
      <div class="mdl-card__actions mdl-card--border">
        <div class="mdl-layout-spacer"></div>
        <a  id="arrow2" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">About Me</a>
      </div>
    </div>
  </div>



  <div class="mdl-layout-spacer"></div>
    <div class="mdl-grid mdl-color--orange-200">
     <div class="mdl-layout-spacer"></div>
     <div id="frontpage3" class="mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-cell--biography front-page__cover">
      <p>After a decade in civil law, I’m able to focus on a field that is meaningful and fulfilling. I have become very skilled at representing people who have suffered injury or death in nursing homes and assisted living facilities. </p> 

      <p>Identifying and litigating cases of nursing home abuse allows me to work intimately with individuals and families to protect our elders. And life is just too short not to make every day count.  </p>

      <p>Some people see law as a tedious, drudging inevitability. For me, it’s an art.  Each case is like a block of rough marble. Together we look at it from all possible angles and carve out its innate beauty: a true story that speaks to the heart and makes sense in relation to the laws of our society. And <em>that</em> is persuasive.</p>

          <a href="#" id="arrow3">
          <?php echo file_get_contents(Assets\asset_path('images/arrow-down.svg')) ?></a><br />
          <img class="fallback" src="<?= Assets\asset_path('images/arrow-down.png') ?>" />
     </div>
   <div class="mdl-layout-spacer"></div>
</div>


  <a name="yellow"></a>
  	<div id="frontpage4" class="content-grid mdl-grid front-page__cover">
      <div class="mdl-cell mdl-cell--1-col mdl-color--yellow-50">
        50
      </div>
      <div class="mdl-cell mdl-cell--1-col mdl-color--yellow-100">
        100
      </div>
      <div class="mdl-cell mdl-cell--1-col mdl-color--yellow-200">
        200
      </div>
      <div class="mdl-cell mdl-cell--1-col mdl-color--yellow-300">
        300
      </div>
      <div class="mdl-cell mdl-cell--1-col mdl-color--yellow-400">
        400
      </div>
      <div class="mdl-cell mdl-cell--1-col mdl-color--yellow-500">
        500
      </div>
      <div class="mdl-cell mdl-cell--1-col mdl-color--yellow-600">
        600
      </div>
      <div class="mdl-cell mdl-cell--1-col mdl-color--yellow-700">
        700
      </div><div class="mdl-cell mdl-cell--1-col mdl-color--yellow-A100">
        A100
      </div>
      <div class="mdl-cell mdl-cell--1-col mdl-color--yellow-A200">
        A200
      </div>
      <div class="mdl-cell mdl-cell--1-col mdl-color--yellow-A400">
        A400
      </div>
      <div class="mdl-cell mdl-cell--1-col mdl-color--yellow-A700">
        A700
      </div>
  </div>
<a name="grey"></a>
<div class="content-grid mdl-grid" style="height:300px">
    <div class="mdl-cell mdl-cell--1-col mdl-color--grey-50">
      50
    </div>
    <div class="mdl-cell mdl-cell--1-col mdl-color--grey-100">
      100
    </div>
    <div class="mdl-cell mdl-cell--1-col mdl-color--grey-200">
      200
    </div>
    <div class="mdl-cell mdl-cell--1-col mdl-color--grey-300">
      300
    </div>
    <div class="mdl-cell mdl-cell--1-col mdl-color--grey-400">
      400
    </div>
    <div class="mdl-cell mdl-cell--1-col mdl-color--grey-500">
      500
    </div>
    <div class="mdl-cell mdl-cell--1-col mdl-color--grey-600">
      600
    </div>
    <div class="mdl-cell mdl-cell--1-col mdl-color--grey-700">
      700
    </div><div class="mdl-cell mdl-cell--1-col mdl-color--grey-A100">
      A100
    </div>
    <div class="mdl-cell mdl-cell--1-col mdl-color--grey-A200">
      A200
    </div>
    <div class="mdl-cell mdl-cell--1-col mdl-color--grey-A400">
      A400
    </div>
    <div class="mdl-cell mdl-cell--1-col mdl-color--grey-A700">
      A700
    </div>
</div>

<?php // endwhile; ?>

<?php

use Roots\Sage\Assets;

/**
 * Template Name: Home Template
 */
?>

<?php // while (have_posts()) : the_post(); ?>
  <?php //get_template_part('templates/page', 'header'); ?>
  <?php //get_template_part('templates/content', 'page'); ?>

    <div class="content-grid mdl-grid mdl-grid--no-spacing" style="height:400px">
      <div style="text-align:center" class="mdl-cell mdl-cell--12-col mdl-cell--8-col-tablet mdl-cell--4-col-phone mdl-color--teal-500">
        <h2 class="front-page">Let’s Build <br />
        Your Case<br />
        Together</h2>
        <a href="#" id="buildcase">
        <?php echo file_get_contents(Assets\asset_path('images/arrow-down.svg')) ?></a><br />
        <img class="fallback" src="<?= Assets\asset_path('images/arrow-down.png') ?>" />
      </div>
  </div>

        <div class="mdl-layout-spacer"></div>
          <div class="mdl-grid mdl-color--orange-200">
   <div class="mdl-layout-spacer"></div>
   <div class="mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-cell--biography">
      <p>After more than a decade and a half in civil law, I’m able to focus on a field that is meaningful and fulfilling. I have become an expert in representing people who have suffered serious injuries or death in nursing homes and assisted living facilities.</p>
<p>Identifying and prosecuting cases of nursing home abuse allows me to work intimately with individuals and families in protecting our elders. And life is just too short not to make every day count.</p>
<p>Some people see law as a tedious, drudging inevitability. For me, it’s an art. A case or a contract is like a piece of rough marble. We look at it from all possible angles and carve out something of beauty. A story that makes sense. And that is what wins cases.</p>
   </div>
   <div class="mdl-layout-spacer"></div>
</div>
  <a name="how"></a>
	<div class="content-grid mdl-grid" style="height:300px">
      <div class="mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-color--yellow-500">
        One
      </div>
      <div class="mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-color--green-100">
        Two
      </div>
      <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet mdl-cell--4-col-phone mdl-color--red-100">
        Three
      </div>
  </div>
  <a name="yellow"></a>
  	<div id='scrollIntoView' class="content-grid mdl-grid" style="height:300px">
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

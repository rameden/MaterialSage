<?php
/**
 * Template Name: Home Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php //get_template_part('templates/page', 'header'); ?>
  <?php //get_template_part('templates/content', 'page'); ?>

  <!-- row for wells -->
		<div class="content-grid mdl-grid mdl-grid--no-spacing mdl-color--blue-100">
      <div class="mdl-cell mdl-cell--8-col mdl-cell--2-col-tablet mdl-cell--2-col-phone">
        ONE
      </div>
      <div class="mdl-cell mdl-cell--1-col mdl-cell--5-col-tablet mdl-cell--2-col-phone">
        TWO
      </div>
      <div class="mdl-cell mdl-cell--3-col mdl-cell--1-col-tablet mdl-cell--4-col-phone">
        THREE
      </div>
    </div>
			  <span class="mdl-color--accent">Hi</span>.
		</div><!-- /.row col-wrap first row-->

		<div class="row col-wrap">
				<?php get_template_part('templates/front-page/articles'); ?>
		</div><!-- /.row col-wrap second row -->

<?php endwhile; ?>

<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package _tk
 */

get_header(); ?>

	<?php if ( have_posts() ) : ?>

		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>

			<div class="col-xs-12 col-md-3">
        		<div class="thumbnail">
        			<?php the_post_thumbnail('front-page'); ?>
          			<a href="<?php the_permalink(); ?>" class="caption">
            			<h4><?php the_title(); ?></h4>
            			<p><?php the_excerpt(); ?></p>
          			</a>
        		</div><!-- .thumbnail -->
      		</div><!-- .col-xs-12 -->

		<?php endwhile; ?>

		<?php // _tk_content_nav( 'nav-below' ); ?>
        <?php // _tk_pagination(); ?>

	<?php else : ?>

		<?php get_template_part( 'no-results', 'index' ); ?>

	<?php endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
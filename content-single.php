<?php
/**
 *
 * The template for displaying the content of a single post.
 *
 * On a large screen, the post will be displayed in a 2-column layout. The left
 * column will feature the post image and the content of the post will be on the
 * right.
 * 
 * @package _tk
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="row">
		<div class="col-xs-12 col-sm-6 col-md-8">
			<div class="entry-content-thumbnail">
				<?php the_post_thumbnail('post_thumbnail', ['class' => 'img-responsive']); ?>
			</div>
		</div>
	
		<div class="col-xs-12 col-sm-6 col-md-4">
			<header>
				<h1 class="page-title"><?php the_title(); ?></h1>
			</header><!-- .entry-header -->

				<div class="entry-content">
		
					<?php the_content(); ?>
		
				</div><!-- .entry-content -->
		</div><!-- .col-xs-12 -->
	</div><!-- .row -->

</article><!-- #post-## -->

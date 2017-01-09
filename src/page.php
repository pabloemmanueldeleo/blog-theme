<?php get_header(); ?>

	<main role="main" aria-label="Content" class="content">
		<!-- section -->
		<section>

			<h1 class="article-title"><?php the_title(); ?></h1>
			<?php if ( is_user_logged_in() ) { ?>
				<div class="post-meta">
					<?php edit_post_link(); ?>
				</div>
			<?php } ?>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<div class="article-content">
					<?php the_content(); ?>
				</div>

				<?php comments_template( '', true ); // Remove if you don't want comments ?>

				<br class="clear">

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>

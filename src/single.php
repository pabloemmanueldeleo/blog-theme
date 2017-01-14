<?php get_header(); ?>

	<main role="main" aria-label="Content" class="content">
	<!-- section -->
	<section>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<!-- post thumbnail -->
			<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
					<?php the_post_thumbnail(); // Fullsize image for the single post ?>
				</a>
			<?php endif; ?>
			<!-- /post thumbnail -->

			<!-- post title -->
			<h1 class="article-title">
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
			</h1>
			<!-- /post title -->

			<!-- post details -->
			<div class="post-meta">
				<span class="date">
					Published on <time datetime="<?php the_time('Y-m-d'); ?> <?php the_time('H:i'); ?>">
						<?php the_date(); ?> <?php the_time(); ?>
					</time>
				</span>
				<span class="comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?></span>
				<span><?php the_tags( __( '<span class="separator">&bull;</span> Tags: ', 'html5blank' ), ', ', ''); ?></span>
				<?php if ( is_user_logged_in() ) { ?>
				<span class="separator">&bull;</span>
				<?php } ?>
				<?php edit_post_link(); ?>

			</div>
			<!-- /post details -->

			<div class="article-content">
				<?php the_content(); // Dynamic Content ?>
			</div>


			<?php comments_template(); ?>

		</article>
		<!-- /article -->

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>

	</section>
	<!-- /section -->
	</main>

<?php get_footer(); ?>

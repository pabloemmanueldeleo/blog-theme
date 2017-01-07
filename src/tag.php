<?php get_header(); ?>

	<main role="main" aria-label="Content" class="content">
		<!-- section -->
		<section>

			<h1 class="tag-title"><?php _e( '', 'html5blank' ); echo single_tag_title('', false); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>

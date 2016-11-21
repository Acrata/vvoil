<?php get_header(); ?>

	<main role="main">
        <?php wd_slider(1); ?>
		<!-- section -->
			<div class="title-artist">
			    <h1><?php _e( 'Archives', 'html5blank' ); ?></h1>
			</div>
		<section>

			<?php get_template_part('loop-archive'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>

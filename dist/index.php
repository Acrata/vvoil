<?php get_header(); ?>

	<main role="main">
        <?php wd_slider(1); ?>
		<!-- section -->
		<section>

			<h1><?php //_e( 'Latest Posts', 'html5blank' ); ?></h1>

			<?php get_template_part('newloop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>


<?php /* Template Name: Contacto y nosotros  */?>
<?php get_header(); ?>
	<main role="main">
            <div class="feat-img">
                <?php the_post_thumbnail(); // Fullsize image for the single post ?>
            </div>
		<!-- section -->
		<section>
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
			<!-- article -->
            <?php //$id = get_the_ID();?>
           <div class="titles-voil">
                <h1 class="title-voil"><?php the_title(); ?></h1>
            </div>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<?php the_content(); ?>
                    <?php //echo get_post_meta(118,'duration_data',true)?>
				<?php //comments_template( '', true ); // Remove if you don't want comments ?>

				<br class="clear">

				<?php edit_post_link(); ?>

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

<?php get_sidebar(); ?>
<?php get_footer(); ?>

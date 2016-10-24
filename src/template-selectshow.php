
<?php /* Template Name: Show selector Page Template */ ?>


<?php get_header(); ?>
<h5>From template</h5>
	<main role="main">
		<!-- section -->
		<section>
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
            <?php //$id = get_the_ID();?>
            <div class="titles-voil">
                <h1 class="title-voil"><?php the_title(); ?></h1>
                <p>
                    <span class="show-title-voil"><?php //echo $invo; ?></span>
                </p>
            </div>
            <?php the_post_thumbnail(); // Fullsize image for the single post ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<div class="content-voil">
<h2>Shows de Edgar Groll</h2>
<?php //wpb_list_child_pages(); ?>
        <div class="show-selector">
            <a href=""><div class="go-palco">Ir a Palco</div></a>
            <a href=""><div class="go-calle">Ir a Calle</div></a>
        </div>
</div>
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

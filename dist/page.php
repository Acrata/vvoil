<?php get_header(); ?>
	<main role="main">
		<!-- section -->
		<section>
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
            <?php $pllid =  pll_get_post($post->ID)?>
            <?php $invo = get_post_meta($pllid,'show_title_voil',true)?>

            <?php the_post_thumbnail(); // Fullsize image for the single post ?>
			<!-- article -->
            <?php //$id = get_the_ID();?>
            <div class="titles-voil">
                <h1 class="title-voil"><?php the_title(); ?></h1>
                <p>
                    <span class="show-title-voil"><?php echo $invo; ?></span>
                </p>
            </div>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <p><?php //echo get_post_meta(118, 'show_titlea', true);?></p>
            <p><?php //echo get_post_meta(124, 'show_titlea', true);?></p>

				<br class="clear">
<div class="content-voil">
				<?php the_content(); ?>
</div>
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

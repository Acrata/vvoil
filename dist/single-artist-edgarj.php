<?php get_header(); ?>
	<main role="main">
<h4>Edagr custom template</h4>
		<!-- section -->
            <?php the_post_thumbnail(); // Fullsize image for the single post ?>
		<section>
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
            <?php $pllid =  pll_get_post($post->ID)?>
            <?php $invo = get_post_meta($pllid,'show_title_voil',true)?>
            <?php $dur_art_voil = get_post_meta($pllid,'duration_data_voil',true)?>
            <?php $public_art_voil = get_post_meta($pllid,'public_data_voil',true)?>
            <?php $from_art_voil = get_post_meta($pllid,'from_data_voil',true)?>
            <?php $calle_voil = get_post_meta($pllid,'calle_voil',true)?>
            <?php $palco_voil = get_post_meta($pllid,'palco_voil',true)?>

			<!-- article -->
            <?php //$id = get_the_ID();?>
            <div class="titles-voil">
                <h1 class="title-voil"><?php the_title(); ?></h1>
                <p>
                    <span class="show-title-voil"><?php echo $invo; ?></span>
                </p>
            </div>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<div class="content-voil">
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

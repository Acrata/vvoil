<?php get_header(); ?>
	<main role="main">
		<!-- section -->
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
            <div class="feat-img">
                <?php the_post_thumbnail(); // Fullsize image for the single post ?>
            </div>
		<section>
            <?php $pllid =  pll_get_post($post->post_parent)?>
            <?php $invo = get_post_meta($pllid,'show_title_voil',true)?>
            <?php $dur_art_voil = get_post_meta($pllid,'duration_data_voil',true)?>
            <?php $public_art_voil = get_post_meta($pllid,'public_data_voil',true)?>
            <?php $from_art_voil = get_post_meta($pllid,'from_data_voil',true)?>
            <?php $space_art_voil = get_post_meta($pllid,'space_data_voil',true)?>
            <?php $origin_art_voil = get_post_meta($pllid,'origin_data_voil',true)?>
            <?php $calle_voil = get_post_meta($pllid,'calle_voil',true)?>
            <?php $palco_voil = get_post_meta($pllid,'palco_voil',true)?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<!-- article -->
            <?php //$id = get_the_ID();?>
            <div class="titles-voil">
                <h1 class="title-voil"><?php echo get_the_title($post->post_parent); ?></h1>
                <p>
                    <span class="show-title-voil"><?php echo $invo; ?></span>
                </p>
            </div>
            <div class="art-info-voil">
            <h3><?php pll_e("Data show");?>:</h3>
                    <span><i class="fa fa-clock-o" aria-hidden="true"></i>  <?php pll_e("Time");?>:   <?php echo $dur_art_voil; ?>|</span>
                    <span><i class="fa fa-users" aria-hidden="true"></i> <?php pll_e("Public");?>: <?php echo $public_art_voil; ?>|</span>
                    <span><i class="fa fa-flag" aria-hidden="true"></i> <?php pll_e("Origin");?>:  <?php echo $from_art_voil; ?></span>
                    <span><i class="fa fa-flag" aria-hidden="true"></i> <?php pll_e("Space");?>:  <?php echo $space_art_voil; ?></span>
            </div>

<div class="content-voil">
				<?php the_content(); ?>
</div>
                    <?php //echo get_post_meta(118,'duration_data',true)?>
				<?php //comments_template( '', true ); // Remove if you don't want comments ?>


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

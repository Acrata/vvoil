<?php get_header(); ?>
	<main role="main">
		<!-- section -->
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
            <div class="feat-img">
                <?php the_post_thumbnail(); // Fullsize image for the single post ?>
            </div>
		<section>
            <?php $pllid =  pll_get_post($post->ID)?>
            <?php $invo = get_post_meta($pllid,'show_title_voil',true)?>
            <?php $dur_art_voil = get_post_meta($pllid,'duration_data_voil',true)?>
            <?php $public_art_voil = get_post_meta($pllid,'public_data_voil',true)?>
            <?php $from_art_voil = get_post_meta($pllid,'from_data_voil',true)?>
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

<div class="content-voil">
				<?php //the_content(); ?>
<?php

$args = array(
    'post_type'      => 'artist',
    'posts_per_page' => -1,
    'post_parent'    => $post->ID,
    'order'          => 'ASC',
    'orderby'        => 'menu_order'
 );


$parent = new WP_Query( $args );

if ( $parent->have_posts() ) : ?>
    <div class="scenario-list">
    <?php while ( $parent->have_posts() ) : $parent->the_post(); ?>

        <div id="parent-<?php the_ID(); ?>" class="parent-page asd">
            <div class="back-decoration"></div>
            <?php the_post_thumbnail(); // Fullsize image for the single post ?>
			<!-- article -->
            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><h1><?php the_title(); ?></h1></a>
            <?php //the_excerpt(); ?>

        </div>

    <?php endwhile; ?>

<?php endif; wp_reset_query(); ?>
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

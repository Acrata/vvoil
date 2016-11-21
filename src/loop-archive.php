<?php if (have_posts()): while (have_posts()) : the_post(); ?>
<?php
$attachment_id = get_post_thumbnail_id($post->ID);
?>
	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<div class="artist-index">
		<!-- post thumbnail -->
    <div class="artist-list-vv">
<div class="res-img">
   <img src="<?php echo wp_get_attachment_image_url( $attachment_id, 'index-artist' ) ?>"
     srcset="<?php echo wp_get_attachment_image_srcset( $attachment_id, 'index-artist' ) ?>"
     sizes="<?php echo wp_get_attachment_image_sizes( $attachment_id, 'index-artist' ) ?>" />
</div>
		<!-- /post thumbnail -->

        <div class="artist-item">
		<!-- post title -->
		<h1>
			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
		</h1>
		<!-- /post title -->
    </div>

		<!-- post details -->
<?php
//$pageChildren = get_pages( array( 'child_of' => $post->ID,'post_type' => 'artist' ,'sort_column' => 'menu_order', 'hierarchical' => '0' ) );
?>
<?php //echo <h2><a href="' . get_page_uri($pageChild) .'">' . $pageChild->post_title . get_the_post_thumbnail($pageChild->ID).'</a></h2> ?>
<?php //var_dump($pageChildren);?>
<?php //get_page_uri($pageChildren);?>
		<!-- /post details -->

		<?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>

<h3 class="shows-voil">Shows</h3>
<ul class="artist-childs">
<?php wp_list_pages( array(
    'child_of' => get_the_ID()
    , 'post_type' => 'artist'
    ,'title_li' => ''
) ); ?>
</ul>
        </div>
        </div>
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

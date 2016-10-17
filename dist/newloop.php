<?php
$opts = array(
    'post_type' => 'page',
    'page_id' => pll_get_post(246),
    'lang' => pll_current_language()
  );
$arty = array(
    'post_type' => 'page',
    'posts_per_page' => 3,
    'category_name' => 'artista , artist',
    'lang' => pll_current_language()
  );
?>
<?php $my_query = new WP_Query($opts);
while ($my_query->have_posts()) : $my_query->the_post();
$do_not_duplicate = $post->ID;?>


    <div class="entry">
            <?php the_post_thumbnail(array(120,120)); // Declare pixel size you need inside the array ?>
        <div class="about-index">
            <h1 class="title-voil"><?php the_title();?></h1>
            <?php the_content('read more &raquo;'); ?>
        </div>
    </div>

 <?php endwhile; ?>
<?php $my_query_art = new WP_Query($arty);?>
    <div class="artist-entry-list">
<?php
while ($my_query_art->have_posts()) : $my_query_art->the_post();
$do_not_duplicate = $post->ID;?>


    <div class="artist-entry">
            <?php the_post_thumbnail(array(120,120)); // Declare pixel size you need inside the array ?>
        <div class="about-index">
            <h1 class="title-voil-entry"><?php the_title();?></h1>
            <p><?php the_excerpt(); ?></p>
        </div>
    </div>

 <?php endwhile; ?>
    </div>

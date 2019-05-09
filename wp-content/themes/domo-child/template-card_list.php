<?php
/**
 * Template Name: Card List
 **/

get_header(); ?>


<?php
while ( have_posts() ) :
    the_post();
    ?>
    <div class="header_test"><?php the_field('header'); ?></div>
    <p><?php the_field('desc'); ?></p>





    <?php
    $checkbox = get_field('czy_wyswietlic');
    $picture = get_field('obraz');

    if (isset($checkbox) && !empty($checkbox) && ($checkbox==true)){ ?>
        <?php if (isset($picture) && !empty($picture)){ ?>
            <img src="<?php echo $picture['url']; ?>" alt="<?php echo $picture['alt']; ?>" />
        <?php } ?>
    <?php } ?>
<?php
endwhile;


get_footer(); ?>







<?php
get_footer();

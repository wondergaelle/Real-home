<?php
/**
 * Template part for displaying posts
 *
 *
 * @package WordPress
 * @subpackage Startheme
 * @since 1.0.0
 */

?>

<article <?php post_class(); ?>>
    <?php if (has_post_thumbnail()) : ?>
    <div class="row justify-content-between">
        <h2 class="entry-title"><?php the_title(); ?> </h2>
        <div class="entry-date"><?= get_the_date(); ?> </div>
    </div>

    <figure class="card-figure">
        <div>
            <a href="<?php the_permalink(); ?>"
               title="<?php _e('Lire la suite', 'startheme') ?>">
            </a>
        </div>
        <a style="width:30rem;" class="link-image" href="<?php the_permalink(); ?> "
           title="<?php _e('Lire la suite', 'startheme') ?>">
            <?php the_post_thumbnail('thumb-large', array('class' => 'img-fluid')); ?> </a>
        <?php endif; ?>
    </figure>


    <div class="entry-archive-content">
        <?php the_excerpt(); ?>
    </div>

</article>
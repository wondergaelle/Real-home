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
        <a class="link-image" href="<?php the_permalink(); ?>"
           title="<?php _e('Lire la suite', 'startheme') ?>"><?php the_post_thumbnail('thumb-medium', array('class' => 'img-fluid')); ?></a>
    <?php endif; ?>
    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"
                               title="<?php _e('Lire la suite', 'startheme') ?>"><?php the_title(); ?></a></h2>

    <div><?php the_field('ville') ?></div>
    <div><?php the_field('prix') ?></div>
    <div class="infos-proprietes row">
        <div><?php the_field('surface') ?></div>
        <div><?php the_field('infos-1') ?></div>
        <div><?php the_field('infos-2') ?></div>
    </div>


    <div class="entry-archive-content">
        <?php the_excerpt(); ?>
    </div>

</article>
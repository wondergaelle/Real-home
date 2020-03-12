<?php
/**
 * Template part for displaying posts
 *
 *
 * @package WordPress
 * @subpackage Startheme
 * @since 1.0.0
 */
$ville = get_the_terms(get_the_ID(), 'ville');


?>

<div class="card" style="width: 22rem;">
    <article <?php post_class(); ?>>
        <?php if (has_post_thumbnail()) : ?>
            <a class="card-figure" href="<?php the_permalink(); ?>" title="<?php _e('Lire la suite', 'startheme') ?>"><?php the_post_thumbnail('thumb-medium', array('class' => 'img-fluid')); ?></a>
        <?php endif; ?>
        <div class="card-body d-flex justify-content-center">
            <h2 class="  entry-title card-title "><a href="<?php the_permalink(); ?>" title="<?php _e('Lire la suite', 'startheme') ?>"><?php the_title(); ?></a></h2>
        </div>
        <h4 class="title-h4 d-flex justify-content-center">
           <?= $ville[0]->name; ?>

        </h4>
        <div>
            <div class="row d-flex justify-content-center"> <?php the_field('prix') ?><p>-€ </p>
            </div>
        </div>
        <div class="card-footer">
            <div class="d-flex justify-content-around">
                <div class="row"><?php the_field("surface") ?> <p>m² </p>
                </div>
                <div class="row"> <?php the_field("nbre_de_pieces") ?><p> pièces </p>
                </div>
                <?php the_field("info-1") ?>
            </div>
        </div>
</div>
<div class="entry-archive-content">
    <?php the_excerpt(); ?>
</div>
</article>
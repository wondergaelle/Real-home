<?php

/**
 * Template part for displaying posts
 *
 *
 * @package WordPress
 * @subpackage Startheme
 * @since 1.0.0
 */
$proprietes = get_posts(array(
    'numberposts' => 3,
    'post_type' => 'nos_proprietes',
    'orberby' => 'rand',
));
?>

<article <?php post_class(); ?>>

    <div class="container py-5">

        <h1 class="page-title entry-title"><?php the_title(); ?></h1>

        <div class="row justify-content-center">
            <?php if (has_post_thumbnail()) : ?>
                <div class="col">
                    <?php the_post_thumbnail('large', array('class' => 'img-fluid')); ?>
                </div>
            <?php endif; ?>

            <div class="col-md-8">
                <div class="entry-content">
                    <span>Prix : </span> <?php the_field('prix') ?>
                    <span>Ville: </span><?php the_field('ville') ?>
                    <span>Nbre de pièces : </span><?php the_field('nbre_de_pieces') ?>
                    <span>Surface : </span><?php the_field('surface') ?>
                    <span>Infos : </span><?php the_field('infos-2') ?>

                    <?php the_content(); ?>
                    <div><?php the_field('description') ?></div>
                </div>
            </div>




        </div><!-- .row -->

    </div><!-- .container -->


</article>








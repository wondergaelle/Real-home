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
    <div class="container py-5">
        <h1 class="page-title entry-title"><?php the_title(); ?></h1>
        <div class="row justify-content-center">
            <?php the_content(); ?>
            <div style="padding-bottom: 30px " class="container border-bottom">
                <div class="row">
                    <?php if (has_post_thumbnail()) : ?>
                    <div class="col-md-8">
                        <?php the_post_thumbnail('large', array('class' => 'img-fluid')); ?>
                    </div>
                    <div class="col-md-4">
                        <div style="margin-bottom: 50px; font-size:30px; color: #E2574C ;" class="row"> <img width="28px" src="https://image.flaticon.com/icons/png/512/40/40202.png" alt=""><div style="margin-left: 30px ;"><?php the_field('prix')?></div><div>€</div>
                        </div>
                        <div  class="row border-bottom border-top">
                            <div class="col-md-6">
                                <div class="row">Ville :</div>
                                <div class="row">Nbr de pieces :</div>
                                <div class="row">Surface :</div>
                                <div class="row">Infos :</div>
                                <div class="row">Infos :</div>
                            </div>
                            <div class="col-md-6">
                                <div class="row"> <?php the_field('ville') ?></div>
                                <div class="row"> <?php the_field('nbre_de_pieces') ?></div>
                                <div class="row">  <?php the_field('surface') ?><div>m²</div></div>
                                <div class="row"><?php the_field('infos-1') ?></div>
                                <div class="row"><?php the_field('infos-2') ?></div>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 40px;  margin-bottom: 40px;">
                            <?php the_field("description") ?>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
            </div><!-- .row -->
        </div><!-- .container -->
</article>








<?php
/**
 * Created by PhpStorm.
 * User: floch
 * Date: 2020-03-10
 * Time: 15:23
 */
?>
<article <?php post_class('mb-4 pb-4 border-bottom border-light'); ?>>

    <?php if(has_post_thumbnail()) : ?>

        <div class="row">

            <div class="col">

                <figure class="card-figure">
                    <a href="<?php the_permalink(); ?>" title="<?php _e( 'Lire la suite', 'startheme' ) ?>">
                        <?php the_post_thumbnail('thumb-medium', array('class'=>'img-fluid')); ?>

                    </a>
                </figure>

            </div>

            <div class="entry-archive-content col-lg-7">

                <h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php _e( 'Lire la suite', 'startheme' ) ?>"><?php the_title(); ?></a></h2>

                <?php the_excerpt(); ?>

            </div>

        </div>

    <?php else : ?>

        <div class="entry-archive-content">

            <h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php _e( 'Lire la suite', 'startheme' ) ?>"><?php the_title(); ?></a></h2>

            <?php the_excerpt(); ?>

        </div>

    <?php endif; ?>

</article>
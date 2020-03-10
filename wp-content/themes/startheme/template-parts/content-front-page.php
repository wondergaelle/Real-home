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
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="entry-content">
                    <?php the_content(); ?>
                </div>
            </div>
        </div><!-- .row -->
    </div><!-- .container -->
</article>
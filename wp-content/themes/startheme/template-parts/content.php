<?php

/**
 * Template part for displaying posts
 *
 *
 * @package WordPress
 * @subpackage Startheme
 * @since 1.0.0
 */
$exclude = is_front_page() ? get_option( 'sticky_posts' ) : [get_the_ID()];
$lastnews = get_posts(array(
    'numberposts' => 3,
    'category_name' => 'actualites',
    'orderby' => 'rand',
    'exclude'=> $exclude

));
?>
<div class="container">

    <div class="row">

        <article <?php post_class('col-md-8'); ?>>
            <h1 class="page-title entry-title"><?php the_title(); ?></h1>
            <?php the_post_thumbnail('large', array('class' => 'img-fluid')); ?>
            <?php the_content(); ?>
    </article>


    <aside class="col aside-categories mb-4">
        <ul class="bg-light p-3">
            <?php wp_list_categories(array(
                'child_of' => 4,
                'title_li' => '<h3>' . __('Catégories', 'startheme') . '</h3>',
            )) ?>
        </ul>
        <ul class="bg-light p-3">
            <h3>Archives</h3>
            <?php wp_get_archives(array(
                'type=yearly',
                'title_li' => '<h3>' . __('Archives', 'startheme') . '</h3>'
            )) ?>
        </ul>

        <?php if ($lastnews): ?>

            <?php foreach ($lastnews as $post):
                setup_postdata($post) ?>

                <article <?php post_class('card border-0') ?>>

                    <div class="card-body">
                        <h3 class="card-title h4">
                            <a href="<?php the_permalink(); ?>" title="<?php _e('Lire la suite', 'startheme') ?>">
                                <?php the_title(); ?>
                            </a>
                        </h3>
                        <?php the_excerpt() ?>
                    </div>
                </article>
            <?php endforeach;
            wp_reset_postdata() ?>


        <?php endif; ?>

    </aside>






    </div>

</div>








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

    </aside>

    </div>

</div>








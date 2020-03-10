<?php
/**
 * The last posts sidebar displayed before footer
 * @package startheme
 */

$lastproprietes = get_posts(array(
    'numberposts' => 4,
    'post_type' => 'nos_proprietes',
    'orderby' => 'rand',
    'exclude' => get_the_id()
));


?>


<section class="sidebar-lastnews bg-light">
    <div class="col-lg-12 offset-md-1">
        <header class="sidebar-header d-flex flex-wrap justify-content-between align-items-start">
            <h2 class="sidebar-title">
                <?php _e('Nos propriétés', 'startheme') ?>
            </h2>

        </header>
        <?php if ($lastproprietes) : ?>
            <div class="card-group">
                <?php foreach ($lastproprietes as $post):
                    setup_postdata($post) ?>

                    <article <?php post_class() ?>>

                        <figure class="row">
                            <a href="<?php the_permalink(); ?>" title="<?php _e('Lire la suite', 'startheme') ?>">
                                <?php the_post_thumbnail('thumb-medium', array('class' => 'img-fluid card-img-top')); ?>
                            </a>
                        </figure>

                        <div class="card-body row">
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

            </div>
        <?php endif; ?>
        <div>
            <a href="<?= get_category_link(31) ?>" class="btn btn-outline-primary">
                <?php _e('Nos propriétés', 'startheme') ?>
            </a>
        </div>
    </div>


</section>
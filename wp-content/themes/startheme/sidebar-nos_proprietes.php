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


<?php if ($lastproprietes) : ?>
    <div class="container">
        <div class="row">
            <?php foreach ($lastproprietes as $post) :
                setup_postdata($post) ?>
                <div class="card" style="width: 17rem;">
                    <div class="card-group">
                        <article <?php post_class() ?>>
                            <a href="<?php the_permalink(); ?>" title="<?php _e('Lire la suite', 'startheme') ?>">
                                <?php the_post_thumbnail('thumb-medium', array('class' => 'card-img-top')); ?>
                            </a>
                            <div class="card-body">
                                <div class="d-flex justify-content-center">
                                    <h3 class="card-title h3 ">
                                        <a style="color: #E2574C" href="<?php the_permalink(); ?>" title="<?php _e('Lire la suite', 'startheme') ?>">
                                            <?php the_title(); ?>
                                        </a>
                                    </h3>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <?php the_field('ville') ?>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <div class="row"><?php the_field('prix') ?><div>€</div>
                                    </div>
                                </div>
                                <?php the_excerpt() ?>
                            </div>
                        </article>
                    </div>
                </div>
            <?php endforeach;
            wp_reset_postdata() ?>
        </div>
    </div>
<?php endif; ?>
</div>
<div class="container">
    <div class="d-flex justify-content-center">
        <div>
            <a href="<?= get_post_type_archive_link('nos_proprietes') ?>"style="color: #orange; margin-bottom: 30px; margin-top: 30px;"  class="btn btn-outline-primary">
                <?php _e('Nos propriétés', 'startheme') ?>
            </a>
        </div>
    </div>
</div>
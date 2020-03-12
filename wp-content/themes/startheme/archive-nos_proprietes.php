<?php
/**
 * The template for displaying archive pages
 *
 *
 * @package WordPress
 * @subpackage Startheme
 * @since 1.0.0
 *
 */


$villes = get_terms(array(
    'taxonomy' => 'ville',
    'hide_empty' => false
));

$vil_get = isset($_GET['vil']) ? $_GET['vil'] : [];
get_header();
?>

    <main>

            <section class="archive-section container py-5">

                <h1 class="page-title"><?php the_archive_title('Nos '); ?></h1>

                <aside class="aside-filter bg-light mb-5 p-3">
                    <form action="<?php $_SERVER['REQUEST_URI']; ?>" method="get"

                    <div class="form-group">

                        <h3 class="mb-lg-0 mr-4"><?php _e('Villes', 'startheme') ?></h3>

                        <?php foreach ($villes as $vil) : ?>

                            <div class="form-check form-check-inline">

                                <input type="checkbox" name="vil[]" value="<?= $vil->term_id ?>"
                                       id="vil-<?= $vil->term_id ?>" class="vil-filters-field form-check-input"
                                       <?php if (in_array($vil->term_id, $vil_get)) : ?>checked<?php endif; ?>>

                                <label for="vil-<?= $vil->term_id ?>"
                                       class="form-check-label"><?= $vil->name ?></label>

                            </div>

                        <?php endforeach; ?>

                        <button class="btn btn-outline-danger ml-auto"
                                type="submit"><?php _e('Filtrer', 'startheme') ?></button>
                        </form>
                    </div><!-- .form-group -->

                </aside>

                <?php if (have_posts()) : ?>

                <div class="row">

                    <?php while (have_posts()) : the_post(); ?>

                        <div class="col-md-6 col-lg-4 my-3">

                            <?php get_template_part('template-parts/content-archive', get_post_type()); ?>

                        </div>

                    <?php endwhile; ?>

                </div>
                <nav aria-label="Page-navigation">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled"><?php the_posts_pagination(); ?></li>
                    </ul>
                </nav>

                <?php else : ?>

                    <?php get_template_part('template-parts/content', 'none'); ?>

                <?php endif; ?>

            </section>



    </main>

<?php get_footer() ?>
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

get_header();
?>

    <main>

        <?php if (have_posts()) : ?>

            <section class="archive-section">



                <div class="container py-5">
                    <div class="title-actus">
                    <h1 class="page-title"><?php the_archive_title(''); ?></h1>
                    </div>
                    <div class="row flex-md-row-reverse">
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

                        <div class="col-md-8 col-lg-9">
                            <?php while (have_posts()) : the_post(); ?>


                                <?php get_template_part('template-parts/content-archive', get_post_type()); ?>


                            <?php endwhile; ?>
                            <?php the_posts_pagination(); ?>
                        </div>


                    </div><!-- .row -->
                </div><!-- .container -->
            </section>

        <?php else : ?>

            <?php get_template_part('template-parts/content', 'none'); ?>

        <?php endif; ?>

    </main>

<?php get_footer() ?>